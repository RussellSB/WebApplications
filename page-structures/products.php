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
          echo "<div class=\"product\">";
          echo "<div class=\"image\">";
          echo "<img src=http://$_SERVER[HTTP_HOST]/WebApplications/productImages/"
           . $r['PictureLocation'] .
           " alt=" . $r['PictureLocation'] . "></img>";
          echo "</div>";
          echo "<p> " . $r['ProductName'] . "</p>";
          echo "<h3> $" . $r['Cost']  . "</h2>";
          $x = $r['ProductID'];
          echo "<select><option value=1>1</option><option value=2>2</option><option value=3>3</option></select>";
          echo "<button type='button' onClick='goToProducts($x)' name='addToCart' value=$x >" . "Product page" . "</button>";
          echo "</div>";
      }

      function toProduct($productID){

      }
    ?>

  </main>

  <footer>
      <?php include "../includes/footer.php"?>
  </footer>

  <script src="../javascript/script.js"></script>
</body>

</html>
