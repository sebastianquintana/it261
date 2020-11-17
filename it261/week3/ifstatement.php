<?php

$salary = 200000;

//if($salary == 200000){
//    echo'bingo bango bongo';
//}
//else {
//    echo'not  too happy';
//}

if($salary >= 200000){
     echo 'bingo bango bongo';
}elseif ($salary >= 100000){
     echo 'not bad at all' ;
}else {
   echo 'that is bummer';
}

echo '<br>';


echo date('y');
echo '<br>';
echo date('h:i a');

echo '<h2>Reset the timezone</h2>';

date_default_timezone_set('America/Los_Angeles');
echo '<br>';

echo "the real time is " .date('H:i a');

// if is the morning, say good morning
//if is afternoon, say good afternoon
// if it is the evening, say good evening

echo '<br>';

echo date('h:i a');
echo '<br>';
echo date('h:i sa');
echo '<br>';
$correct_time = date('H:i a');

if ($correct_time < 10){
    echo 'Good Morning';
}elseif ($correct_time < 18) {
    echo 'Good Afternoon';
} else {
    'Good Evening ';
}


