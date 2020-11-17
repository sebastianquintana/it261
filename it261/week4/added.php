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


<!--
1. Im going to pass the php code inside of the body including the php tag.
2. line 31 i will fix the form tag taking out the \ add method.
3.I will bring the label and imput tag before the php tag and fix adding label tag in the beginning it is missing that.
4.I pass the input to the line 33 and then fix the the next label tag in line 34
5. add double colon in the end in the line 36, missing to close the tag .
6.I added to the isset the $ post["num2"].
7.in the first echo I fixed the colons.
8. second echo I pass the style tag to head and order the colons .
9. It is a <p> tag with an <a> tag with "the reset page"  and i put those ones to the form.
10. close the php tag.
11. added style
12. and I fixed all the Num2 to num2 capitol N and I take out the - before the = on the myTotal variable.
-->