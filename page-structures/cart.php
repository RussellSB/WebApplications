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

<main>
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

echo "<form action=\"singleproduct.php\" method=\"post\" id=\"cart\">";

// Debug - Prints the contents of the session variable.
foreach ($_SESSION as &$tobuy):?>

    <button type="submit" name="prod" value="<?php echo $tobuy['ProductID'] ?>" class="cartitem">
        <img src=<?php echo "http://$_SERVER[HTTP_HOST]/WebApplications/productImages/" . $tobuy['PictureLocation']?>></img>
        <p id="name"> <?php echo $tobuy['ProductName'] ?> </p>
        <p id="make"> <?php echo $tobuy['Make'] ?> </p>
        <p id="cost"> <?php echo $tobuy['Cost'] * $tobuy['quantity'] ?> </p>
        <p id="quty"> <?php echo $tobuy['quantity'] ?> </p> 
    </button>

<?php endforeach; ?>

</form>

</main>

</body>


</html>