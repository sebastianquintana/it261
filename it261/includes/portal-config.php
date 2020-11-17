<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "PHP Portal-web";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'aia.php':
        $title = "Sebastian Quintana - ";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'Flowchart.php':
        $title = "Sebastian Quintana - WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Sebastian Quintana - WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Sebastian';
    break;

    case 'site1/index.php':
        $title = "Sebastian Quintana - Web120 BIG project";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Welcome';
    break;

    case 'big/index.php':
        $title = "Sebastian Quintana - WEB120 Contact Page";
        $logo = 'fa-home';
        $PageID = 'welcome';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }
   //place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['site1/index.php'] = "Switch-2";
$nav1['week4/added.php'] = "Troubleshoot";
$nav1['week6/trip-calculater'] = "Calculator";
$nav1['week6/form-emailable.php'] = "Email";
$nav1['contactme.php'] = "Gallary";
$nav1['database.php'] = "Database-7";



//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Sebastian Quintana - WEB120 Title Page";
    break;

    default:
        $title = THIS_PAGE;
}
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

