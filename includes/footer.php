<?php
  $currPath = "http://$_SERVER[HTTP_HOST]/WebApplications/";
?>

<link rel="stylesheet" href="<?= $currPath . "stylesheets/footer.css"?>" />

<div id="social">
    <button id="twitter" onclick="window.open('https://twitter.com/synewaveltd');"></button>
    <button id="facebook" onclick="window.open('https://www.facebook.com/synewaveltd/');"></button>
</div>

<div id="subMenus">
    <a href="<?= $currPath . "page-structures/products.php"?>"  class="navtext menus1">Products</a>
    <a href="<?= $currPath . "page-structures/aboutPage.php"?>" class="navtext menus1">About Us</a>
    <a href="<?= $currPath . "page-structures/contactUs.php"?>" class="navtext menus1">Contact Us</a>
</div>
