<?php 

//$var1 = 'test';
 // if(isset($var1));{
//      print_r(isset($var1));
 // }else {
  //    echo 'It has not been set';
 // };


if(isset($_GET['today'])){
    $today = $_GET['today'];
}else {
   $today = date('l');
}

switch($today){
   case 'Friday':
      $coffe = 'friday is Frappacino Day';
      $pic = 'frappucino.jpg';
      $alt = 'frappucino';
      $content = 'Frappuccino is a trademarked brand of the Starbucks Corporation for a line of iced, blended coffee drinks. It consists of coffee or crème base, blended with ice and other various ingredients, usually topped with whipped cream and flavored syrups. Frappuccinos are also 
      sold as bottled coffee beverages in grocery stores, convenience stores and from vending machines.';
   break;

   case 'Saturday':
      $coffe = 'Saturday is Latte Day';
      $pic = 'latte.jpg';
      $alt = 'Latte';
      $content = ' coffee drink made with espresso and steamed milk. The word comes from the Italian caffè e latte[3] [kafˌfɛ e lˈlatte], caffelatte [kaffeˈlatte] or caffellatte [kaffelˈlatte], which means "coffee & milk". The word is also sometimes spelled latté or lattè in English with different kinds of accent marks, which can be a hyperforeignism or a 
      deliberate attempt to indicate that the word is not pronounced according to the rules of English orthography.';
   break;

   case 'Sunday':
      $coffe = 'Sunday is Caffe con Leche Day';
      $pic = 'cafeleche.jpg';
      $alt = 'Caffe con Leche';
      $content = ' is a Spanish coffee beverage consisting of strong and bold coffee (usually espresso) mixed with scalded milk in approximately a 1:1 ratio. The amount of milk can be higher in café con leche en vaso or café con leche de desayuno. [1] Sugar or sweetener is added according to taste. 
      It is similar to the Italian caffè latte (latte) and the French café au lait, but is closest to the latte.';
   break;

   case 'Monday':
      $coffe = 'Monday is Affogato Day';
      $pic = 'affogatojpg.jpg';
      $alt = 'Affogato';
      $content = ' Italian coffee-based dessert. It usually takes the form of a scoop of fior di latte or vanilla gelato or ice cream topped or "drowned" with a shot of hot espresso. Some variations also include a shot of amaretto, Bicerin, or other liqueur.[1][2][3][4]

      Though restaurants and cafes in Italy categorize the affogato as a dessert, some restaurants and cafes outside of Italy categorize it as a beverage.[5] Occasionally, coconut, berries,
       honeycomb and multiple flavors of ice cream are added.[6] Affogatos are often enjoyed as a post-meal coffee dessert combo. ';
   break;
   case 'Tuesday':
      $coffe = 'Tuesday is Mocha Day';
      $pic = 'mocca.jpg';
      $alt = 'Mocha';
      $content = 's an Italian word meaning "marked" or "stained", and may refer to:

      Caffè macchiato AKA espresso macchiato, espresso coffee with a little milk
      Latte macchiato, steamed milk with a little espresso coffee';
   break;

   case 'Wednesday':
      $coffe = 'Wednesday is Mocha Day';
      $pic = 'mocca.jpg';
      $alt = 'Mocha';
      $content = 'A caffè mocha, also called mocaccino, is a chocolate-flavoured variant of a caffè latte. Other commonly used spellings are 
      mochaccino and also mochachino. The name is derived from the city of Mocha, Yemen, which was one of the centers of early coffee trade';
   break;

   case 'Thursday':
      $coffe = 'Thursday is Americano Day';
      $pic = 'americano.jpg';
      $alt = 'Americano';
      $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, 
      traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added. ';
   break;
}
 ?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>switch page</title>
</head>

<body>
<ul>
   <h1> <?php echo $coffe; ?></h1>
    <p> <?php echo $content;?></p>
  
            <li><a href="../week3/switch.php?today=Sunday">Sunday</a></li>
              <li><a href="switch.php?today=Monday">Monday</a></li>
              <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
              <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
              <li><a href="switch.php?today=Thursday">Thursday</a></li>
              <li><a href="switch.php?today=Friday">Friday</a></li>
              <li><a href="switch.php?today=Saturday">Saturday</a></li>
              </ul>

              <img src="images/<?php echo $pic; ?>">
   </body>
   </html>