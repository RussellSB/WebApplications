<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SyneWave - Music Store For All Your Favourites">
    <meta name="author" content="The Syne Bros.">
    <title>SyneWave</title>
    <link rel="stylesheet" href="../stylesheets/styles.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../images/synewave_icon.png" />
</head>

<body>

<header id="navbar">
    <nav>
        <?php include "../includes/header.php"?>
    </nav>
</header>

<?php $QSTART = "ParentCategory=";?>

<main>
    <!--To be filled -->
    <h1 class="pagetitle">Pick your category!</h1>
    <div id="categories">
    <form action="products.php" method="post">

        <button type="submit" name="query"
          value="<?php echo $QSTART . "1"?>"
          class="category" id="sub1">
          <div class="img">
            <img src="../images/guitaricon.png" alt="string">
          </div>
          <p> string </p>
        </button>

        <button type="submit" name="query"
          value="<?php echo $QSTART . "2"?>"
          class="category" id="sub2">
          <div class="img">
            <img src="../images/woodwindicon.png" alt="woodwind">
          </div>
          <p> woodwind </p>
        </button>

        <button type="submit" name="query"
          value="<?php echo $QSTART . "3"?>"
          class="category" id="sub3">
          <div class="img">
            <img src="../images/brassicon.png" alt="brass">
          </div>
          <p> brass </p>
        </button>

        <button type="submit" name="query"
          value="<?php echo $QSTART . "4"?>"
          class="category" id="sub4">
          <div class="img">
            <img src="../images/keyboardicon.png" alt="keyboard">
          </div>
          <p> keyboard </p>
        </button>

        <button type="submit"
          class="category" id="sub5">
          <div class="img">
            <img src="../images/all.png" alt="all">
          </div>
          <p> all products </p>
        </button>

    </form>
    </div>

    <!-- Breaks to leave space for footer-->
    <br />
    <br />

</main>

<footer>
    <?php include "../includes/footer.php"?>
</footer>


<script src="../javascript/script.js"></script>

</body>

</html>
