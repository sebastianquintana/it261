<?php 


$distance = '';
$gallonPrice = '';
$efficiency = '';




$gallonPriceErr = '';
$efficiencyErr = '';
$distanceErr = '';




if($_SERVER['REQUEST_METHOD']== 'POST'){



if(empty($_POST['distance'])){
     $distanceErr = ' Please fill out !';
 }else{
     $distance= $_POST['distance'];
 }

 if(empty($_POST['gallonPrice'])){
     $gallonPriceErr = ' Please choose what price !';
}else{
    $gallonPrice = $_POST['gallonPrice'];
}

 if(empty($_POST['efficiency'])){
     $efficiencyErr= ' Don\'t forget to choose';
 }else{
     $efficiency = $_POST['efficiency'];
}

}
?>



<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>Trip Calculater</title>

  <style>
      form {
          width : 350px;
          margin: 0 auto;
          background: beige;
      }
      input [type=text],
       input [type=email]{
          width:100%;
          height:30px;
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
        margin-left:0;
    }
      </style>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
        <label><b>How many miles will you be driving?</b></label>
        <input type="text" name ="distance" value="<?php
        if(isset($_POST['distance'])) echo $_POST['distance'] ; ?>">
        <span><?php echo $distanceErr ; ?></span>
        
        <br>
            

            <label><b>Price per Gallon</b></label>
        <ul>
            <li><input type="radio" name="gallonPrice" value="3.00"  <?php if(isset($_POST['gallonPrice']) && $_POST['gallonPrice']=='3.00') echo 'checked="checked"';?>>$3.00</li>
            <li><input type="radio" name="gallonPrice" value="3.5"  <?php if(isset($_POST['gallonPrice']) && $_POST['gallonPrice']=='3.50') echo 'checked="checked"';?>>$3.50</li>
            <li><input type="radio" name="gallonPrice" value="4.0" <?php if(isset($_POST['gallonPrice']) && $_POST['gallonPrice']=='4.00') echo 'checked="checked"';?>>$4.00</li>
            

        </ul>
        <span><?php echo $gallonPriceErr ;?></span>
        <br>
         
        <label><b>Fuel Efficiency</b></label>
            <select name="efficiency">
            <option value="NULL" <?php if(isset($_POST['efficiency']) && $_POST == 'NULL'){
                echo 'selected = "unselected"';
            }?>>Select one</option>

            <option value="10">very bad at 10 </option>

            <option value="20">bad at 20</option>

            <option value="30">ok at 30</option>

            <option value="40">excellent at 40</option>
            </select>
            <span><?php echo $efficiencyErr ;?></span>
            <br>
            <br>
            <input type="submit" value="convert it!!">
            <p><a href="">Reset</a></p> 
        </fieldset>

    </form>
        <?php


        if(isset(
          $_POST['gallonPrice'],
          $_POST['efficiency'],
          $_POST['distance'])){
        
        $distance = $_POST['distance'];
        $gallonPrice = $_POST['gallonPrice'];
        $efficiency = $_POST['efficiency'];
        
        $milesxpricegas = $distance * $gallonPrice;
        $totalcostgas= $milesxpricegas / $efficiency;
        $totalcostgas_f = number_format($totalcostgas,2);
        
        ?>
       <div class= "box">
       <?php
        
        echo '<p>You have driven '.$distance.'</p>';
       echo '<p>your vehicle has an efficiency rating of '.$efficiency.' Miles per gallen.</p>';
        echo '<p>Your total cost for gas will be $ '.$totalcostgas_f.'</p>';
        
          } 
    
       ?>
       
    </div> <!-- end box div-->
     
</body>
</html>
    