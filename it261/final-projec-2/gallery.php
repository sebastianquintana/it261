<?php 
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
     header('Location: login.php');
}

include('config.php');
      include('includes/header.php');
      
?>


<div id="wrapper">
<main>
 <h1><?php echo $mainHeadline; ?></h1>
<table>
    <?php foreach($people as $fullName => $image): ?>
 <tr>
   <td>
     <img src="images/<?php echo substr($image,0,5) ; ?>.jpg" alt= "<?php echo $fullName;?>">
    </td>
    <td>
     <?php echo str_replace('_','',$fullName) ; ?>
    </td>
    <td><?php echo substr($image,6) ; ?> </td>
    </tr>
     <?php endforeach ; ?>
</table class="candidates">
 </main>
 <aside>
     <h3> This is my Headline 3 on the gallery page</h3>
     <?php 
    
    $foto[0]= 'berni';
    $foto[1]= 'biden';
    $foto[2]= 'boker';
    $foto[3]= 'castr';
    $foto[4]= 'clint';
    $foto[5]= 'harri';
    $foto[6]= 'klobu';
    $foto[7]= 'peter';
    $foto[8]= 'trump';
    $foto[9]= 'warrn';
    $foto[10]= 'yangg';

    $i = rand(0, count($foto) -1);
    $selectFoto = 'images/'.$foto[$i].'.jpg';
   
    echo '<img src = "'.$selectFoto.'">';


    ?>
    </aside>
 
<?php  include('includes/footer.php');  ?>
