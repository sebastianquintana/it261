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
 <h1 class="<?php echo $center ; ?>"><?php echo $mainHeadline; ?></h1>
<img src="images/osonegrologo.png" alt="oso negro logo" width="500px" height="600px" >
<!-- php tag and echo randImages($photos);-->

<br>
<br>
<p>WE ARE A LOCAL SMALL BATCH BAKERY SPECIALIZING IN ARTISANAL SOUTH AMERICAN CONFECTIONS. DELIVERING TO THE GREATER SEATTLE AREA.</p><br>
 Somos una pequeña compañia de pasteleria artesal de alfajores sudamericanos. Entregamos en toda la area de Seattle.</p>

</main>
<aside>
<ul>
<li><img src="images/index-aside-1.jpg" alt="oso negro logo" width="400px" height="300px" ></li>
<li><img src="images/index-aside-2.jpg" alt="oso negro logo" width="400px" height="300px" > </li>
<li><img src="images/index-aside-3.jpg" alt="oso negro logo" width="400px" height="300px" > </li>
</ul>

<br>

  
</aside>

<?php  include('includes/footer.php');  ?>
