<?php

session_start();

if (isset($_POST['purchase'])) {
    $totalcost = $_POST['purchase'];
} else {
    echo '<p> No items in cart found - redirecting to home page </p>';
    header("http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/frontPage.php");
}
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
    <link rel="shortcut icon" type="image/x-icon" href="../images/synewave_icon.png"/>
</head>

<body id="purchasebody">
<header id="navbar">
    <nav>
        <?php include "../includes/header.php" ?>
    </nav>
</header>

<main id="purchasemain">
    <?php
    if (isset($_SESSION['ERROR'])) {
        if ($_SESSION['ERROR'] == "TRUE") {
            echo "<script>alert('You can not use <, >, %, ; or *')</script>";
            $_SESSION['ERROR'] = "FALSE";
        }
    } else {
        $_SESSION['ERROR'] = "FALSE";
    }
    ?>
    <div id="purchase">
        <h1 class="pagetitle">Almost there!</h1>
        <h4>Please enter your personal details below to finalize purchase!</h4>
        <form method="post" action="http://localhost:8080/WebApplications/php-functions/purchasing.php">
            <label>
                <div id="nam1">Full name: <input class="userinput" type="text" name="fullName" required></div>
                <div id="em2">Email: <input class="userinput" type="email" name="email" required></div>
                <div id="add">Home Address: <input class="userinput" type="text" name="homeAddress" required></div>

                <input type="submit" style="font-weight: 800" value="Purchase Order">
            </label>
        </form>
    </div>

    <!-- Breaks to leave space for footer-->
    <br/>
    <br/>
    <br/>

</main>

<footer>
    <?php include "../includes/footer.php" ?>
</footer>
</body>