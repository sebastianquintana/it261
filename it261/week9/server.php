<?php

session_start();
include('config.php');

$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$errors = array();
$success = 'You are now logged in!';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(isset($_POST['reg_user'])){
    //to receive all the info

$FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
$LastName = mysqli_real_escape_string($db, $_POST['LastName']);
$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
$Email = mysqli_real_escape_string($db, $_POST['Email']);
$password_1= mysqli_real_escape_string($db, $_POST['password_1']);
$password_2= mysqli_real_escape_string($db, $_POST['password_2']);

if(empty($FirstName)){
array_push($errors,'First Name is required');
}
if(empty($LastName)){
    array_push($errors,'Last Name is required');
}
if(empty($UserName)){
    array_push($errors,'UserName is required');
}
if(empty($Email)){
    array_push($errors,'Email is required');
}
if(empty($password_1)){
    array_push($errors,'Password is required');
}
if($password_1 != $password_2){
    array_push($errors,'Passwords do not match');
}

//check if there is a username or email that i would like to use
$user_check_query = "SELECT * FROM users WHERE UserName = '$UserName' or Email = '$Email' LIMIT 1 ";
$result = mysqli_query($db, $user_check_query);
$user= mysqli_fetch_assoc($result);

if($user){
    if($user['UserName'] == $UserName){
        array_push($errors, 'UserName already exists');
    }
    if($user['Email'] == $Email){
        array_push($errors, 'Email already exists');
    }
    
}
if(count($errors) == 0){
 $password = md5($password_1);
 
$query = "INSERT INTO users(FirstName, LastName,UserName,Email, password) VALUES ('$FirstName','$LastName', '$UserName', '$Email', '$password')";
mysqli_query($db, $query);

  $_SESSION['UserName'] = $UserName;
  $_SESSION['success'] = $success;


header(Location: 'login.php');




}//end count
}//end isset

if(isset($_POST['login_user'])){
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, $_POST['password']);


if(empty($UserName)){
        array_push($errors,'UserName is required');
    }

if(empty($Password)){
        array_push($errors,'Password is required');
    }

if(count($errors) == 0){
    $password = md5($password);

    $query = "SELECT * FROM Users WHERE UserName = '$UserName' and
    password = '$password' ";

    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 1){
      $_SESSION['UserName'] = $UserName;
      $_SESSION['success'] = $success;

    header('Location:index.php');
    }else{
      array_push($errors, 'Wrong Username/password combination')  
    }//else end 
}//if end
}//close isset login user