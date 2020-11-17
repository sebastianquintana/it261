<?php

$statment = 'This is a very important day';

echo $statment;
echo '<br>';
echo substr($statment,0);
echo '<br>';
echo substr($statment, 0, 4);
echo '<br>';
echo substr($statment,-4);
echo '<br>';
echo substr($statment,-14,10);
echo '<br>';

$statment2 = 'yippy and skyppy';
echo $statment2;
echo '<br>';
echo str_replace('yippy','guacamole',$statment2);
?>