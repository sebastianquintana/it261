<?php

//$dice= rand(1, 6);

//echo $dice;


//$dice1 = rand(1, 6);
// $dice2 = rand(1, 6);

 $dice1 = rand(1, 6);
 $dice2 = rand(1, 6);

if($dice1 == $dice2){
    echo ' you\'ve got a double';

}else {
    echo ' you don\'t';
    echo '<br>';
}

// $photos = array(
//    'photo1',
//    'photo2',
//    'photo3',
//    'photo4',
//    'photo5'
// );

$photos[0]= 'photo1';
$photos[1]= 'photo2';
$photos[2]= 'photo3';
$photos[3]= 'photo4';
$photos[4]= 'photo5';

$i = rand(0, count($photos) -1);
$selectImages = 'website/images/'.$photos[$i].'.jpg';

echo '<img src="'.$selectImages.'">';


