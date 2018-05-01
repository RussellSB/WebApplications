<!DOCTYPE html>
<html lang="en">

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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <h1 class="pagetitle"> <?php echo "CATEGORY IS = " . $_GET['category']; ?> </h1>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <footer>
      <?php include "../../includes/footer.php"?>
  </footer>

  <script src="../../javascript/script.js"></script>

</body>

</html>
