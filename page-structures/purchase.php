<?php

session_start();

if(isset($_POST['purchase'])){
    $totalcost = $_POST['purchase'];
}
else{
    echo '<p> No items in cart found - redirecting to home page </p>';
    header("Refresh: 5;:http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/frontPage.php");
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
    <link rel="shortcut icon" type="image/x-icon" href="../images/synewave_icon.png" />
</head>

<body id="purchasebody">
    <header id="navbar">
        <nav>
            <?php include "../includes/header.php"?>
        </nav>
    </header>

    <main id="purchasemain">
        
    </main>

    <footer>
        <?php include "../includes/footer.php"?>
    </footer>
</body>