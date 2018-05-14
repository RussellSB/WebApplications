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
<?php

//$id = $_GET["ProductID"];
$id = 3;
require "../php-functions/db.php";
$sql = "SELECT * FROM productlist WHERE ProductID = " . $id . ";";
$query = mysqli_query($con, $sql) or die(nl2br("\n Failed to execute query"));
// Retrieves all the rows returned by the SQL query
$rows = array();
$x = 0;

echo "<div class=\"item\">";
$r = mysqli_fetch_assoc($query);

echo "<div class=\"image\">";
echo "<img src=http://$_SERVER[HTTP_HOST]/WebApplications/productImages/"
    . $r['PictureLocation'] .
    " alt=" . $r['PictureLocation'] . "></img>";
echo "</div>";
echo "<p> " . $r['ProductName'] . "</p>";
echo "<p> " . $r['Description'] . "</p>";
echo "<p> Make: " . $r['Make'] . "</p>";
echo "<p> No. in stock: " . $r['AmountInStock'] . "</p>";
echo "<h3> $" . $r['Cost'] . "</h2>";
echo "<select><option value=1>1</option><option value=2>2</option><option value=3>3</option></select>";
echo "<button type='button' name='addToCart' value=$x>" . "Add to Cart" . "</button>";

echo "</div>";
?>
</main>

</body>
<footer>
    <?php include "../includes/footer.php"?>
</footer>

</html>