<!DOCTYPE html>
<html>
<head>
<title>My Adder Assignment</title>
<style>
   form {
       width : 350px;
       border: 1px solid green;
       margin : 20px auto;
       padding:10px;
   }
   input [type=submit] {
       display: block;
   }
    input {
      margin-bottom: 10 px;
   }
   h2 {
       color: red;
       text-align:center;
   }
   .center {
       text-align:center;
   }
   ul {
       list-style-type:none;
   }
</style>
</head>
<body> 
<form action="" method = "post">
  <label>Enter the first number:</label>
  <input type="text" name="num1"><br>
  <label>Enter the second number:</label>
  <input type="text" name="num2"><br>
  <input type="submit" value="Add Em!!"> 
  <p><a href="">Reset page</a></p>
</form>
<?php
if (isset($_POST['num1'],$_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
if (empty($num1)){
    echo '<h2>Error, Will Robinson </h2>' ; 
    echo '<b>';
    echo '<p class="center"> Please fill out all the fields</p>' ;
}
elseif (empty($num2)){
    echo '<h2>Error, Will Robinson </h2>' ; 
    echo '<b>';
    echo '<p class="center"> Please fill out all the fields</p>' ;
}
elseif(empty($num1 && $num2)){
    echo '<h2>Error, Will Robinson </h2>' ; 
    echo '<b>';
    echo '<p class="center"> Please fill out all the fields</p>' ;
}else{
    $myTotal = $num1 + $num2;
    echo '<h2>You added '.$num1.' and '.$num2.'';
    echo ' <p> and the answer is <br>'.$myTotal.'!</p>';
}
}
?>

</body>
</html>