<?php
/**
 * Created by PhpStorm.
 * User: seanp
 * Date: 03/05/2018
 * Time: 11:50
 */
session_start();

?>
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

<body id="cartbody">

<header id="navbar">
    <nav>
        <?php include "../includes/header.php"?>
    </nav>
</header>


<!-- TODO check if cookie exist -->
<!-- TODO if not create one -->
<!-- TODO on the other hand check session state(Any products in car)-->
<!-- TODO if they do exist output them -->

<main id="purchase1">

<h1 id="carttitle" class="pagetitle"> Your Products </h1>
<?php
$listItems = array();
$has_session = session_status() == PHP_SESSION_ACTIVE;

// Connects to database
require "../php-functions/db.php";

// If new object was passed.
// For example, pressing the shopping button will skip this entire segment.
if(isset($_POST['cartobj'])){
    // Retrieves item to be added to cart from database
    $sql = "SELECT * FROM productlist WHERE ProductID=" . $_POST['cartobj'];
    $query = mysqli_query($con, $sql) or die(nl2br("\n Failed to execute query"));

    // Retrieves item - and appends quantity to it.
    $newobj = mysqli_fetch_assoc($query);
    $newobj['quantity'] = $_POST['quantity'];

    // Appends item+quantity to the session global array.
    $_SESSION['Object' . $_POST['cartobj']] = $newobj;
}

if(isset($_POST['delete'])){
    unset($_SESSION['Object' . $_POST['delete']]);
}

$totalcost = 0;
foreach ($_SESSION as &$tobuy){
    $totalcost += (float) $tobuy['Cost'] * $tobuy['quantity'];
}
?>

<?php
if($totalcost == 0){ //if no iterms in shopping cart

    echo "<div id=\"nothingInCart\">";
    echo "<h2>No Instruments Found in Cart!</h2>";
    echo "<h3>Feel free to search for your desired instrument or browse through our selection of offers!</h3>";
    echo "</div>";    

}else{ //if items in shopping cart

    echo "<div id=\"totalprice\">";
    echo "<p id=\"label\"> Total Price : </p>";
    echo "<p id=\"totalcost\">€";
    echo number_format((float)$totalcost, 2, '.', '');
    echo "</p>";
    echo "<form action=\"purchase.php\" method=\"post\" id=\"purchaseform\">";
    echo "<button type=\"submit\" name=\"purchase\" value=\"";
    echo $totalcost;
    echo "\"> Finalize purchase </button>";
    echo "</form>";
    echo "</div>";

}
?>

<div id="cartdiv">
<?php

// Debug - Prints the contents of the session variable.
foreach ($_SESSION as &$tobuy):?>
    <form action="singleproduct.php" method="post" class="cart">
    <button type="submit" name="prod" value="<?php echo $tobuy['ProductID'] ?>" class="cartitem">
        <span>
        <img src=<?php echo "http://$_SERVER[HTTP_HOST]/WebApplications/productImages/" . $tobuy['PictureLocation']?>></img>
        <p id="name"> <?php echo $tobuy['ProductName'] ?> </p>
        <p id="make"> <?php echo $tobuy['Make'] ?> </p>
        <p id="cost"> <i>Cost : €<?php echo $tobuy['Cost'] * $tobuy['quantity'] ?> </i> </p>
        <p id="quty"> Quantity : <?php echo $tobuy['quantity'] ?> </p>
        </span>
    </button>
    </form>

    <form action="cart.php" method="post" class="delete">
        <button
            type=submit
            name="delete"
            value=<?php echo $tobuy['ProductID'] ?>>
            Remove item </button>
        </button>
    </form>

<?php endforeach; ?>
</div>

</main>

<footer>
    <?php include "../includes/footer.php"?>
</footer>

</body>


</html>