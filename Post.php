<!DOCTYPE html>
<html>
<head>
<?php include 'Scripts/Js.html';?> 
<?php include 'Scripts/Css.html';?> 
<?php include 'Scripts/Counter.php';?>
</head>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<?php include 'Theme/Menus.html';?> 

<!-- Top menu on small screens -->
<!-- Overlay effect when opening sidebar on small screens -->
<?php include 'Theme/MMenus.html';?> 

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Home</p>
   <!-- <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>-->
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container" >
   <?php include "Theme/Img_Background.html"; ?>
   <!---
	<div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2016</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div> --->
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p style="font-size: 1.5em;">
<?php	
include 'Scripts/Print_Post_Un.php'; 
?>
<?php 
include 'Scripts/Ads.php'; 
?>
</p>
  </div>

  <!-- Product grid -->
   <?php include "Theme/Griglia.html"; ?> 

  <!-- Subscribe section -->
 <?php include "Theme/Black_Board.html"; ?> 
  
  <!-- Footer -->
 <?php include "Theme/Footer.html"; ?> 

 <!--- <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>--->

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->




<?php 
include 'Scripts/Sidebar.html' ;
include 'Scripts/Music.html' ;
include 'Scripts/script.php'; 
include 'Theme/Visual.php' ;
?>
</body>
</html>
