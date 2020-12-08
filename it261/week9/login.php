<?php
include('server.php');

include('includes/header.php');
?>
<h1>Login</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" method = "post">
<fieldset>
<label>Username </label>
<input type = "text" name = "UserName" value = "<?php 
if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">
<!--CHANGE PASSWORD BELOW TO password-->
<label>Password </label>
<!--Name = password  NO VALUE = PHP!!!!-->
<input type = "password" name = "password"> 
    <?php 
include('errors.php') 
?>
<button type = "submit" class = "btn" name="login_user">Login</button>
<button type = "button"
onclick = "window.location.href = '<?php echo 
htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">Reset</button>
</fieldset>

</form>

<p class="login-register">Haven't Registered? <a href= "register.php">Register here</a> </p>