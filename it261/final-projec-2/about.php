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

 <h1><?php echo $mainHeadline; ?></h1>

<p>
<img src="images/about-alfajor-table.png"  alt="alfajor table" />
<br>
<img src="images/user-table.png"  alt="alfajor table"/>



<?php  include('includes/footer.php');  ?>
