<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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

    <div id="contact">
        <h1 class="pagetitle">Talk to us!</h1>
        <form method="POST" action="http://127.0.0.1:8080/WebApplications/php-functions/contacting.php">
            <label>
                <div id="us1">Full name: <input class="userinput" type="text" name="fullName" required><br><br></div>
                <div id="us2">Subject: <input class="userinput" type="text" name="subject" required><br><br></div>
                <div id="us3">Main text: <textarea class="userinput" name="mainText" required></textarea><br><br></div>
                <div id="us4">Email: <input class="userinput" type="email" name="email" required><br><br></div>
                <br>
                <input type="submit" style="font-weight: 800" value="Send Email">
            </label>
        </form>
    </div>

    <!-- Breaks to leave space for footer-->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

</main>

<footer>
    <?php include "../includes/footer.php"?>
</footer>

<script src="../javascript/script.js"></script>
</body>
</html>
