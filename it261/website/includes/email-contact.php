<?php 

$firstName = '';
$lastName = '';
$email = '';
$comments = '';

$gender = '';
$wines = '';
$privacy = '';
$tel = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$commentsErr = '';
$genderErr = '';
$winesErr = '';
$privacyErr = '';
$telErr = '';



if($_SERVER['REQUEST_METHOD']== 'POST'){

if(empty($_POST['firstName'])){
    $firstNameErr = ' Please fill out your first name!';
}else{
    $firstName = $_POST['firstName'];
}

if(empty($_POST['lastName'])){
    $lastNameErr = ' Please fill out your first name!';
}else{
    $lastName = $_POST['lastName'];
}

if(empty($_POST['email'])){
    $emailErr = ' Please fill out your email!';
}else{
    $email = $_POST['email'];
}

if(empty($_POST['wines'])){
    $winesErr = 'Pick your wine !';
}else{
    $wines = $_POST['wines'];
}
if(empty($_POST['privacy'])){
    $privacyErr= ' Please agree to our privacy rules!';
}else{
    $privacy = $_POST['privacy'];
}
if(empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Your phone number please!';
    } elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telErr = 'Invalid format!';
    } else{
    $tel = $_POST['tel'];
    }
    }

if(empty($_POST['comments'])){
    $commentsErr= ' Please lets us a comment!';
}else{
    $comments = $_POST['comments'];
}

if(empty($_POST['gender'])){
    $genderErr = 'please check on!';
}else{
    $gender = $_POST['gender'];
}
if($gender == 'male'){
  $male = 'checked';
}
elseif($gender == 'female'){
   $female = 'checked';
}
function myWines(){
    $myReturn = '';
if(!empty($_POST['wines'])){
    
 $myReturn = implode(',', $_POST['wines']);
    
}//end if
return $myReturn;
}//end function

if (isset($_POST['firstName'],
          $_POST['lastName'],
          $_POST['gender'],
          $_POST['tel'],
          $_POST['comment'],
          $_POST['privacy'],
          $_POST['wines'])) {

    $to = 'sebastianquintan@gmail.com';
    $subject = 'Test Email' .date('m/d/y');
    $body = '' .$firstName. 'has filled out your form '.$PHP_EOL. '';
    $body .= 'email '.$email.' '.$PHP_EOL. '';
    $body .= 'your phone number:'.$tel.' '.$PHP_EOL. '';
    $body .= 'Your Wine  '.myWines().' '.$PHP_EOL. '';
    $body .= 'gender '.$gender.' '.$PHP_EOL. '';
    $body .= 'comments: '.$comments. '';

    $headers = array(
      'From' => 'no-reply@gmail.com',
      'Reply-to' => ''.$email.'');


    mail($to, $subject, $body, $headers) ;
    header('Location: txh.php');

}//close if _SERVER request method
}

?>



<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>My Emailable Form</title>

  <style>
      form {
          width : 350px;
          margin: 0 auto;
      }
      input [type=text],
       input [type=email],
       textarea {
          width:100%;
          height:30px;
      }
      textarea {
          height: 120px;
          margin-bottom : 20px;
      }
      input{
          margin-bottom:10px;
      }
      fieldset {
          color:#666;
          padding:10px 15px 10px 10px;
      }
      label{
          display:block;
          margin-bottom:5px;
      }
    .box {
        width:600px;
        margin: 20px auto;
        background:beige;
        padding:20px;
        border:1px solid green;
    }
    select{
        margin-bottom:10px;
    }
    span {
        display:block;
        color:red;
        font-style:italic;
    }
    li {
        list-style-type: none;
    }
      </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
        <label>Name</label>
        <input type="text" name ="firstName" value="<?php
        if(isset($_POST['firstName'])) echo  htmlspecialchars($_POST['firstName']) ; ?>">
        <span><?php echo $firstNameErr ; ?></span>
        <label>Last Name</label>
        <input type="text" name ="lastName" value="<?php
        if(isset($_POST['lastName'])) echo  htmlspecialchars($_POST['lastName']) ; ?>">
        <span><?php echo $lastNameErr ; ?></span>
        <label>Email</label>
        <input type="text" name ="email" value="<?php
        if(isset($_POST['email'])) echo  htmlspecialchars($_POST['email']) ; ?>">
        <span><?php echo $emailErr ; ?></span>

        <label>Phone number</label>
        <input type="text" name ="tel" placeholder="xxx-xxx-xxxx" value="<?php
        if(isset($_POST['tel'])) echo  htmlspecialchars($_POST['tel']) ; ?>">
        <span><?php echo $telErr ; ?></span>
            
            <br>
            
            <label>Gender</label>
        <ul>
            <li><input type="radio" name="gender"  value="female"
            <?php if(isset($_POST['gender']) && $_POST['gender']=='female') echo 'checked="checked"';?>
            >Female</li>
            <li><input type="radio" name="gender" value="male"
            <?php if(isset($_POST['gender']) && $_POST['gender']=='male') echo 'checked="checked"';?>
            >Male</li>
            </ul>
            <span><?php echo $genderErr ; ?></span>

            <label>Favorite wine</label>
        <ul>
            <li><input type="checkbox" name="wines[]" value="Cabernet"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='Cabernet') echo 'checked="checked"';?>
            >Cabernet</li>
            <li><input type="checkbox" name="wines[]" value="Merlo"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='Merlo') echo 'checked="checked"';?>
            >Merlo</li>
            <li><input type="checkbox" name="wines[]" value="Carmenere"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='Carmenere') echo 'checked="checked"';?>
            >Carmenere</li>
            <li><input type="checkbox" name="wines[]" value="verdhe"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='verdhe') echo 'checked="checked"';?>
            >vino verdhe</li>

        </ul>
        <span><?php echo $winesErr ; ?></span>
        <label>Comments</label>
        <textarea name="comments">
            <?php
             if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;
            ?>
        </textarea>
        <span><?php echo $commentsErr; ?></span>
        
        <input type="radio" name = "privacy" value="
        <?php
        if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']) ; 
        ?>">
        I agree to your Privacy Policy
        <span><?php echo $privacyErr ; ?></span>
        <input type="submit" value="Send it!!">
        <p><a href="">Reset</a></p> 
</fieldset>

    </form>

   
</body>
</html>
    