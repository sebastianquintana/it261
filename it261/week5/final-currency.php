<?php 

$name = '';
$email = '';
$amount = '';
$bank = '';
$currency = '';

$nameErr = '';
$emailErr = '';
$amountErr = '';
$bankErr = '';
$currencyErr = '';



if($_SERVER['REQUEST_METHOD']== 'POST'){

if(empty($_POST['name'])){
    $nameErr = ' Please fill out your name!';
}else{
    $name = $_POST['name'];
}

if(empty($_POST['email'])){
    $emailErr = ' Please fill out your email!';
}else{
    $email = $_POST['email'];
}
if(empty($_POST['amount'])){
    $amountErr = 'Show me the money!';
}else{
    $amount = $_POST['amount'];
}
if(empty($_POST['bank'])){
    $bankErr = 'Pick your banking institution !';
}else{
    $bank = $_POST['bank'];
}
if(empty($_POST['currency'])){
    $currencyErr= ' Please choose your currency!';
}else{
    $currency = $_POST['currency'];
}


}//close if _SERVER request method
?>



<doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
  <title>Final Currency</title>

  <style>
      form {
          width : 350px;
          margin: 0 auto;
      }
      input [type=text] {
          width:100%;
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
      </style>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
        <label>Name</label>
        <input type="text" name ="name" value="<?php
        if(isset($_POST['name'])) echo $_POST['name'] ; ?>">
        <span><?php echo $nameErr ; ?></span>
        <label>Email</label>
        <input type="text" name ="email" value="<?php
        if(isset($_POST['email'])) echo $_POST['email'] ; ?>">
        <span><?php echo $emailErr ; ?></span>
            <label>How much Money do you have?</label>
            <input type="text" name ="amount" value="<?php
        if(isset($_POST['amount'])) echo $_POST['amount'] ; ?>">
            <span><?php echo $amountErr ; ?></span>
            <br>
            <label>Choose your Banking Institution!</label>
            <select name="bank">
            <option value="NULL"
            <?php if(isset($_POST['bank']) && $_POST == 'NULL'){
                echo 'selected = "unselected"';
            }?>
            >Select one</option>

            <option value="Bank of America"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America'){
                echo 'selected = "selected"';
            }?>
            >Bank of America</option>

            <option value="Wells Fargo"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo'){
                echo 'selected = "selected"';
            }?>
            >Wells Fargo</option>

            <option value="Chase Bank"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank'){
                echo 'selected = "selected"';
            }?>
            >Chase Bank</option>

            <option value="BECU Bank"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU Bank'){
                echo 'selected = "selected"';
            }?>
            >BECU Bank</option>
            </select>
            <span><?php echo $bankErr ; ?></span>
            <label>Choose your currency!</label>
        <ul>
            <!-- logic = we are still asking if postr currency was set but no we are asking 
            one more question --- ios the post currency equal to the value-->
            <li><input type="radio" name="currency" value="0.013"
            <?php if(isset($_POST['currency']) && $_POST['currency']=='0.013') echo 'checked="checked"';?>
            >Rubles</li>
            <li><input type="radio" name="currency" value="0.76"
            <?php if(isset($_POST['currency']) && $_POST['currency']=='0.76') echo 'checked="checked"';?>
            >Canadian Dollar</li>
            <li><input type="radio" name="currency" value="1.28"
            <?php if(isset($_POST['currency']) && $_POST['currency']=='1.28') echo 'checked="checked"';?>
            >Pounds</li>
            <li><input type="radio" name="currency" value="1.18"
            <?php if(isset($_POST['currency']) && $_POST['currency']=='1.18') echo 'checked="checked"';?>
            >Euros</li>
            <li><input type="radio" name="currency" value="0.0094"
            <?php if(isset($_POST['currency']) && $_POST['currency']=='0.0094') echo 'checked="checked"';?>
            >Yen</li>
        </ul>
        <span><?php echo $currencyErr ; ?></span>
        <input type="submit" value="convert it!!">
        <p><a href="">Reset</a></p> 
</fieldset>

    </form>
    <?php
    

        if(isset($_POST['amount'],
          $_POST['currency'])&&
           is_numeric($_POST['amount'])&&
           is_numeric($_POST['currency'])
          
          ){
              
              $amount= $_POST['amount'];
              $currency = $_POST['currency'];
              $total = $amount * $currency;
              $total_f = number_format($total,2);
             
             ?>
             <div class="box">
            <?php

             echo '<p>Thank you '.$name. ' for filling out our form, your money will be wired to '.$bank.' within 24 hrs</p>';
             echo '<p>'.$name.', you now have $'.$total_f.' American Dollars!</p>';
             echo '<p>We will be getting back to you via your email: '.$email.'.</p>';
        
        }

     
    ?>
    </div><!--end box-->
</body>
</html>
    