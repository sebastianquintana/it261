<?php
ob_start(); //this prevent  headers errors before reading the whole page.

define('DEBUG', 'TRUE');//we want to see our error

include('credentials.php');

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
    $mainHeadline = 'About Us';
    $center = 'center';
    $body = 'About';
  break;
  
  case 'daily.php':
    $title = 'schedule Page';
    $mainHeadline = 'Oso Negro Schedule and Where you can find us';
    $center = 'center';
    $body = 'Daily';
  break;

  case 'customer.php':
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
$nav ['custumer.php'] = 'Customers';
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



$firstName = '';
$lastName = '';
$email = '';
$comments = '';

$gender = '';
$wines = '';
$privacy = '';
$tel = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$commentsErr = '';
$genderErr = '';
$winesErr = '';
$privacyErr = '';
$telErr = '';



if($_SERVER['REQUEST_METHOD']== 'POST'){

if(empty($_POST['firstName'])){
    $firstNameErr = ' Please fill out your first name!';
}else{
    $firstName = $_POST['firstName'];
}

if(empty($_POST['lastName'])){
    $lastNameErr = ' Please fill out your first name!';
}else{
    $lastName = $_POST['lastName'];
}

if(empty($_POST['email'])){
    $emailErr = ' Please fill out your email!';
}else{
    $email = $_POST['email'];
}

if(empty($_POST['wines'])){
    $winesErr = 'Pick your wine !';
}else{
    $wines = $_POST['wines'];
}
if(empty($_POST['privacy'])){
    $privacyErr= ' Please agree to our privacy rules!';
}else{
    $privacy = $_POST['privacy'];
}
if(empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Your phone number please!';
    } elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telErr = 'Invalid format!';
    } else{
    $tel = $_POST['tel'];
    }
    }

if(empty($_POST['comments'])){
    $commentsErr= ' Please lets us a comment!';
}else{
    $comments = $_POST['comments'];
}

if(empty($_POST['gender'])){
    $genderErr = 'please check on!';
}else{
    $gender = $_POST['gender'];
}
if($gender == 'male'){
  $male = 'checked';
}
elseif($gender == 'female'){
   $female = 'checked';
}
function myWines(){
    $myReturn = '';
if(!empty($_POST['wines'])){
    
 $myReturn = implode(',', $_POST['wines']);
    
}//end if
return $myReturn;
}//end function

if (isset($_POST['firstName'],
          $_POST['lastName'],
          $_POST['gender'],
          $_POST['tel'],
          $_POST['comment'],
          $_POST['privacy'],
          $_POST['wines'])) {

    $to = 'sebastianquintan@gmail.com';
    $subject = 'Test Email' .date('m/d/y');
    $body = '' .$firstName. 'has filled out your form '.$PHP_EOL. '';
    $body .= 'email '.$email.' '.$PHP_EOL. '';
    $body .= 'your phone number:'.$tel.' '.$PHP_EOL. '';
    $body .= 'Your Wine  '.myWines().' '.$PHP_EOL. '';
    $body .= 'gender '.$gender.' '.$PHP_EOL. '';
    $body .= 'comments: '.$comments. '';

    $headers = array(
      'From' => 'no-reply@gmail.com',
      'Reply-to' => ''.$email.'');


    mail($to, $subject, $body, $headers) ;
    header('Location: thx.php');

}//close if _SERVER request method
}




if(isset($_GET['today'])){
    $today = $_GET['today'];
}else {
   $today = date('l');
}

switch($today){
   case 'Friday':
      $alfajor = 'friday is delivery Day.';
      $pic = 'delivery.jpg';
      $alt = 'delivery';
      $content = 'Every week we are doing delivery on Friday, Get your order worm at home.!';
   break;

   case 'Saturday':
      $alfajor = 'Saturday is Day off.';
      $pic = 'off.jpg';
      $alt = 'day off';
      $content = ' Not all in this life is work so we are taking Saturday off.';
   break;

   case 'Sunday':
      $alfajor = 'Logan/s Brewery. ';
      $pic = 'logan.png';
      $alt = 'brewery';
      $content = ' Sunday come visit us at Logan Brewery at burien.!';
   break;

   case 'Monday':
      $alfajor = 'Monday is we are off.';
      $pic = 'off.jpg';
      $alt = 'day off
      ';
      $content = ' We are taking this off for us.';
   break;
   case 'Tuesday':
      $alfajor = 'Baking/s Tuesday. ';
      $pic = 'cookies.jpg';
      $alt = 'cookies';
      $content = 'Every Tuesdays we are baking our delicious cookies to get ready for the market and deliveries.';
   break;

   case 'Wednesday':
      $alfajor = 'Wednesday is Preparation day.';
      $pic = 'preparation.jpg';
      $alt = 'preper';
      $content = 'Unfortunable we are not selling or delivering on Wednesday, we are preparing our delicious dulce de leche. ';
   break;

   case 'Thursday':
      $alfajor = 'Thursday At The Burien Market.';
      $pic = 'Market.jpg';
      $alt = 'Market';
      $content = 'We are selling our product every Thursday at Burien Farmer Market, come to visit us. ';
   break;
}







function myerror($myFile, $myLine, $errorMsg) {
    
  if(defined('DEBUG')  && DEBUG)  {
      
      echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
?>