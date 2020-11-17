<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />

</head>

<body>
<!-- START WRAPPER -->

<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Sebastian Quintana SCC WEB120 Portal</a></h1>
 
</header>
<nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>

