<?php
  $currPath = "http://$_SERVER[HTTP_HOST]/WebApplications/";
  // echo "<h1>". basename($_SERVER['PHP_SELF']) ."</h1>";
?>

<link rel="stylesheet" href="<?= $currPath . "stylesheets/header.css"?>" />

<!-- The icon at the upperleft of the site. -->
<div id="iconbox" class="hovering">
    <a href="<?= $currPath . "page-structures/frontPage.php"?>"><img src="<?= $currPath . "images/synewave_icon_blended.gif"?>" id="syneicon"></a>
</div>

<!-- The left side of the header. Contains the title, and three menu items, highlighted after detecting current page -->
<div id="leftside">


    <!--These are conditions that detect the active menu by getting the current php file name and setting which to highlight accordingly-->
    <?php if(basename($_SERVER['PHP_SELF'])=="frontPage.php") :?>

        <a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave" id="activemenu">SyneWave</a>
        <a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus">Products</a>
        <a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus">About Us</a>
        <a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus">Contact Us</a>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="products.php" or
        basename($_SERVER['PHP_SELF'])=="categories.php") : ?>

        <a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave">SyneWave</a>
        <a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus" id="activemenu">Products</a>
        <a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus">About Us</a>
        <a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus">Contact Us</a>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="aboutPage.php") : ?>

        <a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave">SyneWave</a>
        <a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus">Products</a>
        <a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus" id="activemenu">About Us</a>
        <a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus">Contact Us</a>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="contactUs.php") : ?>

        <a href="<?= $currPath . "page-structures/frontPage.php"?>" class="navtext synewave">SyneWave</a>
        <a href="<?= $currPath . "page-structures/categories.php"?>"  class="navtext menus">Products</a>
        <a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus">About Us</a>
        <a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus" id="activemenu">Contact Us</a>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="404.php") : ?>

      <a href="<?= $currPath . "page-structures/frontPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext synewave">SyneWave</a>
      <a href="<?= $currPath . "page-structures/categories.php"?>"  style="text-shadow:0 0 2px white;" class="navtext menus">Products</a>
      <a href="<?= $currPath . "page-structures/aboutPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">About Us</a>
      <a href="<?= $currPath . "page-structures/contactUs.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">Contact Us</a>
      <a href="<?= $currPath . "page-structures/404.php"?>"       style="text-shadow:0 0 2px white;" class="navtext menus" id="activemenu">404!</a>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="searching.php") : ?>
        <a href="<?= $currPath . "page-structures/frontPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext synewave">SyneWave</a>
        <a href="<?= $currPath . "page-structures/categories.php"?>"  style="text-shadow:0 0 2px white;" class="navtext menus">Products</a>
        <a href="<?= $currPath . "page-structures/aboutPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">About Us</a>
        <a href="<?= $currPath . "page-structures/contactUs.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">Contact Us</a>

    <?php elseif(basename($_SERVER['PHP_SELF'])=="Product.php") : ?>
        <a href="<?= $currPath . "page-structures/frontPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext synewave">SyneWave</a>
        <a href="<?= $currPath . "page-structures/categories.php"?>"  style="text-shadow:0 0 2px white;" class="navtext menus">Products</a>
        <a href="<?= $currPath . "page-structures/aboutPage.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">About Us</a>
        <a href="<?= $currPath . "page-structures/contactUs.php"?>" style="text-shadow:0 0 2px white;" class="navtext menus">Contact Us</a>
    <?php endif; ?>
</div>

<!-- The right side of the header. Contains the search bar, button, and shopping button. -->
<div id="rightside">
    <form id="searcher">
        <input id="searchbox" type="text" placeholder="Search for Products" onkeypress="handle(event)">
    </form>
    <button id="search" onClick="search_func()"></button>
    <button id="shopping" onClick="toCart()"></button>
</div>
