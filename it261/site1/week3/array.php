<?php 


?>
<!--
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="daily.php">Daily</a></li>
<li><a href="customers.php">Customers</a></li>
<li><a href="gallery.php">Gallery</a></li>
</ul>
-->

<?php 
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['gallery.php'] = 'Gallery';


$nav = array(
    'index.php' => 'Home' ,
    'about.php' => 'About' ,
    'daily.php' => 'Daily' ,
    'customers.php' => 'Customers' ,
    'gallery.php' => 'Gallery' 
);
?>
<ul>
<?php
foreach($nav as $key => $value){
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
    //echo 'this is my'.$value.' page and the name of the php page is'.$key.'<br>';
}
  ?>
  </ul>