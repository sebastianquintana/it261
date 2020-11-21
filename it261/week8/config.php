<?php 

//this will be the configuration file where we are going to link the credentials.php
 ob_start(): //this prevent  headers errors before reading the whole page.

 define('DEBUG', 'TRUE');

 include('credentials.php');










 function myerror($myFile, $myLine, $errorMsg){
     if (defined('DEBUG') && DEBUG){
     echo 'Error in file: <b>'.$myFile.' </b> on the line <b>'.$myLine.'</b>';
     echo 'Error messege: <b>'.$errorMsg.' </b>';
     die();
    }else{
        echo ' Houston we have a problem';
        die();
    }
 }