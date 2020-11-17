<doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
  <title>Currency Form 2</title>

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
      </style>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
        <label>Name</label>
        <input type="text" name ="name">
        <label>Email</label>
        <input type="text" name ="email">
            <label>
                How much Money do you have?
            </label>
            <input type="text" name ="amount">
            <br>
            <label>
                Choose your currency!
            </label>
        <ul>
            <li><input type="radio" name="currency" value="0.013">Rubles</li>
            <li><input type="radio" name="currency" value="0.76">Canadian Dollar</li>
            <li><input type="radio" name="currency" value="1.28">Pounds</li>
            <li><input type="radio" name="currency" value="1.18">Euros</li>
            <li><input type="radio" name="currency" value="0.0094">Yen</li>
        </ul>
        <input type="submit" value="convert it!!">
        <p><a href="">Reset</a></p> 
</fieldset>

    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){

        if(empty($_POST['name'])){
            echo ' <p>Please fill out your name!</p>';
        }if (empty($_POST['email'])){
            echo '<p>do not forget to fill all out your email</p>';
        }
        if(empty($_POST['amount'])){
            echo '<p>Please show me the money</p>';
        }
        if(empty($_POST['currency'])){
            echo '<p>Please check one of the currencies!</p>';
        }

        elseif(isset($_POST['name'],
          $_POST['email'],
          $_POST['amount'],
          $_POST['currency'])&&
           is_numeric($_POST['amount'])&&
           is_numeric($_POST['currency'])
          
          ){
              $name= $_POST['name'];
              $email = $_POST['email'];
              $amount= $_POST['amount'];
              $currency = $_POST['currency'];

             $total = $amount * $currency;
             $total_f = number_format($total,2);
             ?>
             <div class="box">
            <?php

             echo '<p>Thank you '.$name. ' for filling out our form.</p>';
             echo '<p>'.$name.', you now have $'.$total_f.' American Dollars!</p>';
             echo '<p>We will be getting back to you via your email: '.$email.'.</p>';
        
        }

    }//close main if statement 
    ?>
    </div><!--end box-->
</body>
</html>
    