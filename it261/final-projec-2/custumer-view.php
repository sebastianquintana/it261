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
<main>
 <h1><?php echo $mainHeadline; ?></h1>

 <?php
 include('includes/alfajor-view.php'); ?>

 </main>
<aside>
      <h3>This is the side</h3>
      
</aside>
<?php  include('includes/footer.php');  ?>
