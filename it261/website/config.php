<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$people['Donald_Trump'] = 'trump_ Almost ex-President';
$people['Joe_Biden'] = 'biden_President elected.';
$people['Hilary_clint'] = 'clint_Secretery from NY';
$people['Bernie_Sanders'] = 'berni_Senator from VT';
$people['Elizabeth_Warren'] = 'warrn_Senator from MA';
$people['Kamala_Harris'] = 'harri_Senator from CA';
$people['Cory_Booker'] = 'boker_Senator from NJ';
$people['Andrew_Yang'] = 'yangg_Enterpreneur from NY';
$people['Pete_Buttigieg'] = 'peter_Mayor from IN';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN';
$people['Julian_Castro'] = 'castr_House/Urban  from TX';




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
    
    $body = 'Contact';
    
  break;

  case 'gallery.php':
    $title = 'Check out our Gallery';
    $mainHeadline = 'Welcome to our Gallery';
    
    $body = 'gallery inner';
    
  break;



}//end of the switch
$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['customers.php'] = 'Customers';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

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