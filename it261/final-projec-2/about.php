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

<p>
<img class = "about-block"src="images/acenseba.jpg"  alt="ace and sebastian"  width="300px" height="400px"/>
Aislinn McManigal and Sebastian Quintana met as line cooks working at Tom Douglas’ Lola in Downtown Seattle.
 It was love at first shift but the paths that brought them together were worlds apart. Aislinn, a Seattle native, 
 graduate of UW and Seattle Culinary academy, was working towards her goal of becoming a chef. Sebastián,
 born and raised in Valparaiso, Chile, moved to Seattle in 2008 and had worked in Tom Douglas kitchens for 9 years.</p>
<p>After getting married in 2017, Aislinn went on to work at a Michelin-star restaurant in Spain and later became sous-chef
 at the well known Pike Place Market restaurant Matt’s in the Market. Seba meanwhile traded in his apron for a keyboard, enrolling
  in SCC’s Web Development program. 
In 2018 they were able to take a trip to Chile to visit family and celebrate nuptials. </p>
<p>But it wasn’t just family that Seba introduced Aislinn to. Alfajores,
 a South American cookie noted for a delicate texture and thick caramel filling, were instantly loved by Aislinn, much 
 like the sweet Chilean man who brought them into her life. They enjoyed them throughout Chile and at many Argentine bakeries
  during their week in Buenos Aires. Bringing those tastes and memories home, they began developing their own recipes in their Capitol Hill 
kitchen to share with family and friends. In 2020 the culinary passion became a business.</p>
<p>And the name? Oso Negro, Black Bear in Spanish, is as much an ode to the cookie’s roots as it is the story of the bakers behind them. 
Seba’s bear-like appetite meets Aislinn’s dependency to hibernate. 
South America meets the Pacific Northwest. Together they are Oso Negro Baking Co. Buen provecho, Seattle friends!</p>

 </main>
 <aside>
 <h3>this is my aside</h3>
 </aside>
<?php  include('includes/footer.php');  ?>
