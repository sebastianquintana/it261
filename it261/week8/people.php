<?php
include('config.php');
include('includes/header.php');
//we are going to connect to the database

?>
<main>
<?php
$sql = ' SELECT * FROM people';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) { //showing the records 
while($row = mysqli_fetch_assoc($result)){
        //this array will display the contents or your row

         echo '<ul>';//use a similar a href's value that we used for out switch assigment 
         echo '<li class="bold">For more information <a href="people-view.php?id='.$row['PeopeID'].'">'.$row['FirstName'].'</a> </li>';
         echo '<li>'.$row['LastName'].'</li>';
         echo '<li>'.$row['Occupation'].'</li>';
         echo '</ul>';
}//close while
} else {//what if there are no people
    echo 'Nobody at home';
}//else end 


    //realease the web server

@mysqli_free_result($result);

    //close the connection

@mysqli_close($iConn);
?>
</main>

<aside>
<h3> This is my aside </h3>
</aside>
<?php

include('includes/footer.php');
?>