<?php
//Sebastian
// In order to view this page, a user must have registered and logged in, otherwise, he/she must be directed to do so!!!!

session_start();
include('config.php');
if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
     header('Location: login.php');
}


include('includes/header.php');
?>



<?php
//Notification message
if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
  <?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);
     ?>
     </h3>
</div>  <!--end success-->
<?php endif ?>


<?php
    if(isset($_SESSION['UserName'])) : ?>
<div class="welcome-logout">
    <h3> Hello,
<?php echo $_SESSION['UserName'] ;     ?>
</h3>  

<a href="index.php?logout='1' ">Log out!</a>
</div>  <!--end welcome logout-->
<?php endif  ?>

<h1>Welcome to our home page!</h1>

    
    
    
    
    
    
    





</div>  <!-- end wrapper-->


        
        
        
        


 