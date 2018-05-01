<!DOCTYPE html>
<html lang="en">

<?php // $_GET['category']; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SyneWave - Music Store For All Your Favourites">
    <meta name="author" content="The Syne Bros.">
    <title>SyneWave</title>
    <link rel="stylesheet" href="../../stylesheets/styles.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../images/synewave_icon.png" />
</head>

<!-- TODO: Use category variable to show different subcategory pages. -->

<body>

  <header id="navbar">
      <nav>
          <?php include "../../includes/header.php"?>
      </nav>
  </header>



  <h1 class="pagetitle"> Pick your subcategory! </h1>

  <?php if ($_GET['category'] == 1) : ?>

    <div id="categories">
      <a href="products/sub.php?category=1">
        <div class="category" id="sub1">
          <p class="subcategory"> bass </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub2">
          <p class="subcategory"> harp </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub3">
          <p class="subcategory"> ukelele </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub4">
          <p class="subcategory"> guitar </p>
        </div>
      </a>
    </div>

  <?php elseif ($_GET['category'] == 2) : ?>

    <div id="categories">
      <a href="products/sub.php?category=1">
        <div class="category" id="sub1">
          <p class="subcategory"> clarinets </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub2">
          <p class="subcategory"> bagpipes </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub3">
          <p class="subcategory"> panflutes </p>
        </div>
      </a>
    </div>

  <?php elseif ($_GET['category'] == 3) : ?>

    <div id="categories">
      <a href="products/sub.php?category=1">
        <div class="category" id="sub1">
          <p class="subcategory"> trumpets </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub2">
          <p class="subcategory"> saxophone </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub3">
          <p class="subcategory"> french horn </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub4">
          <p class="subcategory"> mellophone </p>
        </div>
      </a>
    </div>

  <?php elseif ($_GET['category'] == 4) : ?>

    <div id="categories">
      <a href="products/sub.php?category=1">
        <div class="category" id="sub1">
          <p class="subcategory"> piano </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub2">
          <p class="subcategory"> accordian </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub3">
          <p class="subcategory"> electric-keyboard </p>
        </div>
      </a>

      <a href="products/sub.php?category=1">
        <div class="category" id="sub4">
          <p class="subcategory"> synthesizer </p>
        </div>
      </a>
    </div>

  <?php endif ?>

  <br>
  <br>
  <footer>
      <?php include "../../includes/footer.php"?>
  </footer>

  <script src="../../javascript/script.js"></script>

</body>

</html>
