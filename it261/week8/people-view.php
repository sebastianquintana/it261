<?php
include('config.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

} else {
    header('Location:people.php');
  
}


$sql = 'SELECT * FROM people WHERE peopeID = '.$id.' ';

//connect to the database

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Occupation = stripslashes($row['Occupation']);
        $Email = stripslashes($row['Email']);
        $Description = stripslashes($row['Description']);
        $RegDate = stripslashes($row['RegDate']);
        $Feedback = '';
    }
    }else {
        $Feedback = 'Sorry, no candidates -they are partying';
    }

include('includes/header.php');?>

<main>

<h2>Welcome to <?php echo $FirstName ; ?>'s Page </h2>
<?php 
if($Feedback == ''){
    echo '<ul>';
    echo '<li> <b>First Name:</b>'.$FirstName.' </li>';
    echo '<li> <b>Last Name:</b>'.$LastName.' </li>';
    echo '<li> <b>Ocuppation:</b>'.$Occupation.' </li>';
    echo '<li> <b>Email :</b>'.$Email.' </li>';
    echo '<li> <b>birthday year :</b>'.$RegDate.' </li>';

    echo '</ul>';
    echo '<p>'.$Description.'</p>';
} else {
  echo $Feedback;
  echo '<p> <a href="people.php">Go back to people page! </p>';
}//end else

?>
</main>

<aside>
<?php 
if($Feedback === ''){
    echo '<img src="uploads/people'.$id.'.jpg" alt = "'.$FirstName.'">';
} else {
    echo $Feedback;
}
 //realease the web server

 @mysqli_free_result($result);

 //close the connection

 @mysqli_close($iConn);

?>
</aside>

<?php 
include('includes/footer.php');