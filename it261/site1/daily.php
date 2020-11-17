
   <?php
    include('includes/header.php');
    include('week3/switch.php');
   ?>
     <body>

      <div class="grid-container">
        <header class="item1">Welcome to my Portal</header>
        <main class="item2">
         <h1> <?php echo $coffe; ?></h1>

            <p><?php echo $content;?><p>
          <p> Click below to find out what awesome 
            flavors are in the rest of the week!!</p>

           
              <img src="images/<?php echo $pic; ?>">
         </main>
        
    <?php 
   include('includes/footer.php');

?>