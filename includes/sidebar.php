<?php
  $currPath = "http://$_SERVER[HTTP_HOST]/WebApplications/";
?>

<link rel="stylesheet" href="<?= $currPath . "stylesheets/sidebar.css"?>" />

<div id=sidebar>
    <br/>
    <br/>
    <a class="sidelinks" href="<?= $currPath . "page-structures/products.php"?>" class="testing"> Products? </a>
    <a class="sidelinks" href="<?= $currPath . "page-structures/aboutPage.php"?>" class="testing"> About Us? </a>
</div>