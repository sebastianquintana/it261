<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE){
  case 'index.php':
    $title = 'Home Page for our new website';
    $mainHeadline = 'Welcome to our Home Page';
    $center = 'center';
    $body = 'Home';
  break;

  case 'about.php':
    $title = 'About page';
    $mainHeadline = 'Welcome to our Wonderful About Page!';
    $center = 'center';
    $body = 'About';
  break;
  
  case 'daily.php':
    $title = 'Daily Page';
    $mainHeadline = 'Welcome to the Daily';
    $center = 'center';
    $body = 'Daily';
  break;

  case 'customers.php':
    $title = 'Our very important customers';
    $mainHeadline = 'Hello customers - Good to see you!';
    $center = 'center';
    $body = 'Costumer';
    
  break;

  case 'contact.php':
    $title = 'Contact us today';
    $mainHeadline = 'Welcome to our Contact Page';
    //$center = 'center';
    $body = 'Contact';
    
  break;

  case 'gallery.php':
    $title = 'Check out our Gallery';
    $mainHeadline = 'Welcome to our Gallery';
    $center = 'center';
    $body = 'Gallery';
    
  break;



}//end of the switch
$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['customers.php'] = 'Customers';
$nav ['contact.php'] = 'Contact';
$nav ['gallary.php'] = 'Gallary';

function makeLinks($nav){
    $myReturn = '';
 foreach($nav as $key => $value){
if(THIS_PAGE == $key){
   $myReturn .='<li><a href=" '.$key.' " class="active">'.$value.'</a></li>';
}else{
    $myReturn .='<li><a href=" '.$key.' " >'.$value.'</a></li>';
}// end else


 }//end foreach


return $myReturn;

}//end function

?>