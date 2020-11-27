<?php 

include('../website/config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else {
    header('Location:includes/pokemon.php');
}

$sql = 'SELECT * FROM pokemon WHERE pokemonID = '.$id.' ';

//connect to the database

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $pokemonName = stripslashes($row['pokemonName']);
        $edition = stripslashes($row['edition']);
        $price = stripslashes($row['price']);
        $description = stripslashes($row['description']);
        $releaseDate = stripslashes($row['releaseDate']);
        $Feedback = '';
    }//while end
    }else {
        $Feedback = 'Sorry, no Pokemons -they are partying';
    }//else end

?>

<main>

<h2>Welcome to <?php echo $pokemonName ; ?>'s Page </h2>
<?php 
if($Feedback == ''){
    echo '<ul>';
    echo '<li> <b>Pokemon Name:</b>'.$pokemonName.' </li>';
    echo '<li> <b>Edition of the Card:</b>'.$edition.' </li>';
    echo '<li> <b>Price:</b>'.$price.' </li>';
    echo '<li> <b>Release year :</b>'.$releaseDate.' </li>';

    echo '</ul>';
    echo '<p>'.$description.'</p>';
} else {
  echo $Feedback;
  echo '<p> <a href="includes/pokemon.php">Go back to pokemon page! </p>';
}//end else

?>
</main>

<aside>
<?php 
if($Feedback === ''){
    echo '<img src="uploads/pokemon'.$id.'.jpg" alt = "'.$pokemonName.'">';
} else {
    echo $Feedback;
}
 //realease the web server

 @mysqli_free_result($result);

 //close the connection

 @mysqli_close($iConn);

?>
</aside>

