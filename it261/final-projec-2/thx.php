<?php 
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
     header('Location: login.php');
}

include('config.php');
      include('includes/header.php');
      
?>


<div id="wrapper">
 <h1>Thank you for contact us </h1>





<?php  include('includes/footer.php');  ?>