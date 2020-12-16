<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title><?php echo $title ?></title>
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/emailable.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ;  ?>">
<header>
  <div class="inner-header">
    <img id="logo" src="images/osonegrologo.png" alt="logo">
<nav>

<ul>
<?php echo makeLinks($nav) ;  ?>
<li>  <?php
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
<?php endif  ?></li>
</ul>

  </nav>


</div><!--end inner header-->
</header>