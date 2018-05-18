<?php
  $currPath = "http://$_SERVER[HTTP_HOST]/WebApplications/";
  // echo "<h1>". basename($_SERVER['PHP_SELF']) ."</h1>";
?>

<link rel="stylesheet" href="<?= $currPath . "stylesheets/header.css"?>" />

<button id="hmbg">&#8801;</button>

<!-- The icon at the upperleft of the site. -->
<div id="iconbox" class="hovering">
    <a href="<?= $currPath . "page-structures/frontPage.php"?>"><img src="<?= $currPath . "images/synewave_icon_blended.gif"?>" id="syneicon"></a>
</div>

<!-- The left side of the header. Contains the title, and three menu items, highlighted after detecting current page -->
<ul id="leftside">


    <!--These are conditions that detect the active menu by getting the current php file name and setting which to highlight accordingly-->
    <?php if(basename($_SERVER['PHP_SELF'])=="frontPage.php") :?>

        <li><a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave" id="activemenu">SyneWave</a></li>
        <li><a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus">Products</a></li>
        <li><a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus">About Us</a></li>
        <li><a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus">Contact Us</a></li>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="products.php" or
        basename($_SERVER['PHP_SELF'])=="categories.php" or
        basename($_SERVER['PHP_SELF'])=="singleproduct.php" or
        basename($_SERVER['PHP_SELF'])=="cart.php") : ?>

        <li><a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave">SyneWave</a></li>
        <li><a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus" id="activemenu">Products</a></li>
        <li><a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus">About Us</a></li>
        <li><a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus">Contact Us</a></li>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="aboutPage.php") : ?>

        <li><a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave">SyneWave</a></li>
        <li><a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus">Products</a></li>
        <li><a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus" id="activemenu">About Us</a></li>
        <li><a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus">Contact Us</a></li>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="contactUs.php") : ?>

        <li><a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave">SyneWave</a></li>
        <li><a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus">Products</a></li>
        <li><a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus">About Us</a></li>
        <li><a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus" id="activemenu">Contact Us</a></li>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="404.php") : ?>

      <li><a href="<?= $currPath . "page-structures/frontPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext synewave">SyneWave</a></li>
      <li><a href="<?= $currPath . "page-structures/categories.php"?>"  style="text-shadow:0 0 2px white;" class="navtext menus">Products</a></li>
      <li><a href="<?= $currPath . "page-structures/aboutPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">About Us</a></li>
      <li><a href="<?= $currPath . "page-structures/contactUs.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">Contact Us</a></li>
      <li><a href="<?= $currPath . "page-structures/404.php"?>"       style="text-shadow:0 0 2px white;" class="navtext menus" id="activemenu">404!</a></li>

    <?php endif; ?>

</ul>

<ul class="hidden-links hidden"></ul>

<!-- The right side of the header. Contains the search bar, button, and shopping button. -->
<ul id="rightside">
    <li><form id="searcher" action="../page-structures/products.php" method="GET">
        <input id="searchbox" type="text" name="query" placeholder="Search for Products" onkeypress="handle(event)">
        <button id="search" type="submit"></button>
    </form></li>
    <li><button id="shopping" onClick="document.location.href='../page-structures/cart.php';"></button></li>
</ul>

<script src="<?= $currPath . "javascript/jquery.min.js"?>"></script>
<script src="<?= $currPath . "javascript/header.js"?>"></script>