<?php 
include('config.php');
include('includes/header.php');
      
?>


<div id="wrapper">
<main>
 <h1><?php echo $mainHeadline; ?></h1>

 <?php
 include('includes/pokemon-view.php'); ?>

 </main>
<aside>
      <h3>This is the side</h3>
      <img src="images/pokemon-logo.png">
</aside>
<?php  include('includes/footer.php');  ?>
