<!DOCTYPE html>
<html>
<head>
<title>Form 2</title>
<meta charset="utf-8">
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
   textarea, input {
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
<form action = "" method = "post">
      <label> Name</label>
      <input type = "text" name = "name"> <br>
      <label> Email</label>
      <input type = "text" name = "email"><br>
      <label>Comments</label><br>
      <textarea name = "comments"></textarea>
      <input type = "submit" value = "send it"> 
      <p><a href = "">Reset Page</a></p>

</form>

<?php 
if (isset($_POST['name'], $_POST['email'],$_POST['comments'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
if (empty($name && $email && $comments)){
    echo '<h2>Error, Will Robinson </h2>' ; 
    echo '<b>';
    echo '<p class="center"> Please fill out all the fields</p>' ;
}else {
    echo '<ul class = "center">';
    echo '<li>'.$name.'</li>';
    echo '<li>'.$email.'</li>';
    echo '<li>'.$comments.'</li>';
    echo '</ul>';
    
    
}
}
?>
</body>
</html>