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
<h1> <?php echo $alfajor; ?></h1>
    <p> <?php echo $content;?></p>
    <br>
    <br>
    
    <img src="images/<?php echo $pic; ?>">
</main>
<aside>
      <h3>Week schedule</h3>
      <br>
      <ul>
            <li><a href="daily.php?today=Sunday">Sunday</a></li><br>
              <li><a href="daily.php?today=Monday">Monday</a></li><br>
              <li><a href="daily.php?today=Tuesday">Tuesday</a></li><br>
              <li><a href="daily.php?today=Wednesday">Wednesday</a></li><br>
              <li><a href="daily.php?today=Thursday">Thursday</a></li><br>
              <li><a href="daily.php?today=Friday">Friday</a></li><br>
              <li><a href="daily.php?today=Saturday">Saturday</a></li>
      </ul>
</aside>
<?php  include('includes/footer.php');  ?>