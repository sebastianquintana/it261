<?php 

//this will be the configuration file where we are going to link the credentials.php
 ob_start(); //this prevent  headers errors before reading the whole page.

 define('DEBUG', 'TRUE');//we want to see our error

 include('week8/credentials.php');









//please remeber this is place at the very bottom of your config file
 function myerror($myFile, $myLine, $errorMsg){
     if (defined('DEBUG') && DEBUG){
     echo 'Error in file: <b>'.$myFile.' </b> on the line: <b>'.$myLine.'</b>';
     echo 'Error message: <b>'.$errorMsg.' </b>';
     die();
    }else{
    echo ' Houston we have a problem';
     die()
    }//end else
 }// end function