<?php 

include('config.php');
include('includes/header.php');
?>
<?php


if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

} else {
    header('Location: people.php');
  
}//end else


$sql = 'SELECT * FROM alfajores WHERE AlfajorID  = '.$id.' ';

//connect to the database

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $AlfajorName = stripslashes($row['AlfajorName']);
        $price = stripslashes($row['price']);
        $description = stripslashes($row['description']);
        $DateSeason = stripslashes($row['DateSeason']);
        $Feedback = '';
    }
    }else {
        $Feedback = 'Sorry,they eat all the alfajores';
    }// end else

?>
<main>

<h2>Welcome to <?php echo $AlfajorName ; ?>'s Page </h2>
<?php 
if($Feedback == ''){
    echo '<ul>';
    echo '<li> <b>Alfajor Flavor:</b>'.$AlfajorName.' </li>';
    echo '<li> <b>Last Name:</b>'.$price.' </li>';
    echo '<li> <b>birthday year :</b>'.$DateSeason.' </li>';

    echo '</ul>';
    echo '<p>'.$Description.'</p>';
} else {
  echo $Feedback;
  echo '<p> <a href="custumer.php">Go back to menu page! </p>';
}//end else

?>
</main>

<aside>
<?php 
if($Feedback === ''){
    echo '<img src="images/alfajor'.$id.'.jpg" alt = "'.$AlfajorName.'">';
} else {
    echo $Feedback;
}
 //realease the web server

 @mysqli_free_result($result);

 //close the connection

 @mysqli_close($iConn);

?>
</aside>

<?php 
include('includes/footer.php');
?>



