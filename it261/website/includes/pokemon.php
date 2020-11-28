<?php

include('website/includes/config.php');


?>
<main>
<?php

$sql = 'SELECT * FROM pokemon';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){// showing the records
while($row = mysqli_fetch_assoc($result)){
         echo '<ul>';//use a similar a href's value that we used for out switch assigment 
         echo '<li class="bold">Click here for more information <a href="includes/pokemon-view.php?id='.$row['pokemonID'].'">'.$row['pokemonName'].'</a> </li>';
         echo '<li>'.$row['edition'].'</li>';
         echo '<li>'.$row['price'].'</li>';
         echo '</ul>';
}//end of while
} else {
    echo 'The Pokemons run away';
}// end else 

 //realease the web server

 @mysqli_free_result($result);

 //close the connection

@mysqli_close($iConn);


?>
</main>

