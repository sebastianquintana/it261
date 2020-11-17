<?php

//function greeting(){
//    echo 'hello';
//}
//greeting();


//lets create a fuction to find the area of a rectangle


function getArea($width, $height) {
    $calculation = $width * $height;
    return $calculation;
    }
$calculation = getArea(10,20);
echo $calculation;
echo '<br>';

$nav['index.php'] = 'Home';
$nav['daily.php'] = 'daily';
$nav['about.php'] = 'about';
$nav['contact.php'] = 'contact';
$nav['gallery.php'] = 'gallery';

function myNav($nav){
    $myReturn = implode(',', $nav);
    return $myReturn;
}
echo myNav($nav);

echo '<br>';

function popupad1(){
      echo '
      <h2> this is my pop up ad number 1!!!</h2>
      <h2> this is my pop up ad number 1!!!</h2>
      <h2> this is my pop up ad number 1!!!</h2>
      <h2> this is my pop up ad number 1!!!</h2>
      ';
}
popupad1();

echo '<br>';

function popupad2(){ 
    $variable = '<h2> this is my pop up ad number 1!!!</h2>
    <img src="../images/vote.jpg" alt="I voted">
    <h2>I voted</h2>
    ';
    return $variable;
}

echo popupad2();