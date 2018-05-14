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

<?php include "../includes/sidebar.php"?>

<body>

  <header id="navbar">
      <nav>
          <?php include "../includes/header.php"?>
      </nav>
  </header>

  <main>

    <!-- TODO: Add sidebar -->
    <!-- TODO: Add support for category queries (category and subcategory) -->

    <?php
      if (isset($_GET['category'])){
        $category = $_GET['category'];
      }
      else{
        $category = NULL;
      }

      require "../php-functions/db.php";

      if($category != NULL){
        $sql = "SELECT * FROM productlist WHERE ParentCategory=" . $category;
      }
      else{
        $sql = "SELECT * FROM productlist";
      }
      $query = mysqli_query($con, $sql) or die(nl2br("\n Failed to execute query"));

      if (mysqli_num_rows($query)==0) { header("location:404.php"); }

      // Retrieves all the rows returned by the SQL query
      $rows = array();
      $x = 0;
      echo "<div class=\"items\">";
      while($r = mysqli_fetch_assoc($query)) {

          $maxPos = 100;
          if (strlen($r['ProductName']) > $maxPos)
          {
              $lastPos = ($maxPos - 3) - strlen($r['ProductName']);
              $r['ProductName'] = substr($r['ProductName'], 0, strrpos($r['ProductName'], ' ', $lastPos)) . '...';
          }

          echo "<div class=\"product\">";
          echo "<div class=\"image\">";
          echo "<img src=http://$_SERVER[HTTP_HOST]/WebApplications/productImages/"
           . $r['PictureLocation'] .
           " alt=" . $r['PictureLocation'] . "></img>";
          echo "</div>";
          echo "<p> " . $r['ProductName'] . "</p>";
          echo "<h3> $" . $r['Cost']  . "</h2>";
          $x = $r['ProductID'];
          echo "<form action=\"singleproduct.php\" method=\"post\">";
          echo "<button name=\"prod\" type=\"submit\" value=" . $r['ProductID'] . "> Product Page </button>";
          echo "</form>";
        //   echo "<button onClick='toProducts($x)' type='button' name='Product_Page' value=$x >" . "Product page" . "</button>";
          echo "</div>";
      }
    ?>

  </main>

  <footer>
      <?php include "../includes/footer.php"?>
  </footer>

  <script src="../javascript/script.js"></script>

</body>

</html>
