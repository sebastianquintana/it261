<?php  //server page!!! - Sebastian

session_start();
include('config.php');

// initialize the variables

$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$errors = array();
$success = 'You are now logged in!';

// connect to the database
//$db = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// register the user

if(isset($_POST['reg_user'])) {
// lets receive all the information
$FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
$LastName = mysqli_real_escape_string($db, $_POST['LastName']);
$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
$Email = mysqli_real_escape_string($db, $_POST['Email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
// the array push function will be able to add the exact error that we will be referring to

if(empty($FirstName)) {
  array_push($errors, 'First name is required'); 
}
if(empty($LastName)) {
  array_push($errors, 'Last name is required'); 
}
if(empty($UserName)) {
  array_push($errors, 'Username is required'); 
}
if(empty($Email)) {
  array_push($errors, 'Email is required'); 
}
if(empty($password_1)) {
  array_push($errors, 'Password is required'); 
}
if($password_1 != $password_2) {
    array_push($errors, 'Passwords do not match!'); 
}
    
// check to see if there is a username or email out there that I would like to use
    
$user_check_query = "SELECT * FROM users WHERE UserName= '$UserName' OR Email = '$Email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
    
if($user) {
 if($user['UserName']  == $UserName ) {
    array_push($errors, 'Username already exists');    
 }
    
if($user['Email']  == $Email ) {
    array_push($errors, 'Email already exists');    
 }
    
}// end if user
    
// if everything is okay - if there are NO ERRORS
    
if(count($errors) == 0) {
$password = md5($password_1);
    
$query = "INSERT INTO users (FirstName, LastName, UserName, Email, password) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$password') ";
mysqli_query($db, $query);

    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;
    
header('Location: login.php') ;  
    
}  // end count


}  // isset


// we will return to the server.php page to enter the login information!!!

if(isset($_POST['login_user'])) {
$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    
$password = mysqli_real_escape_string($db, $_POST['password']);
    
    if(empty($UserName)) {
  array_push($errors, 'Username is required'); 
}
    
    if(empty($password)) {
  array_push($errors, 'Password is required'); 
}
    
 if(count($errors) == 0) {
$password = md5($password);
 $query = "SELECT * FROM users WHERE UserName = '$UserName' AND password = '$password' " ;   
        $results = mysqli_query($db, $query);
        if(mysqli_num_rows($results) == 1) {
      $_SESSION['UserName']  = $UserName;
        $_SESSION['success'] = $success;
    header('Location: index.php') ;   
         } else { 
       array_push($errors, '<p class="red">Wrong username/password combo</p>') ;
    }
        
    }  // count
           
    
}  // close isset


