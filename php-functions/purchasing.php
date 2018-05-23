<html>
<body>
<?php

session_start();

require ('InputParsing.php');

if (checkForInvalidChars($_POST['email']) && checkForInvalidChars($_POST['fullName'])
    && checkForInvalidChars($_POST['homeAddress'])) {
    $to = "synewaveltd@gmail.com";
    $headers = 'From: synewavepurchases@gmail.com' . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $order = "";
//concatenates to order string variable
    foreach ($_SESSION['CART'] as &$tobuy) {

        $order .= $tobuy['ProductID'] . ", " . $tobuy['Make'] . ", " . $tobuy['ProductName'] . ", " . $tobuy['Cost'] . ", " . $tobuy['quantity'] . ";" . "\r\n";

    }

    $fullText = "Purchase from : " . $_POST['email'] .
        "\r\n" . "Name : " . $_POST['fullName'] .
        "\r\n" . "Address : " . $_POST['homeAddress'] .
        "\r\n\n\n\n" . "------------------------------------------------------------Products------------------------------------------------------------" .
        "\r\n" . "The Ordered Products are displayed in the order; ProductID, Make, ProductName, Cost(€), Quantity" .
        "\r\n\n" . $order . "\r\n";

    session_regenerate_id(true);
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');

    mail($to, "Purchase Order", $fullText, $headers);
    header("Location: http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/frontPage.php"); /*redirects to main page*/
} else {
    echo "<script>
            alert('Input not valid! Injection strings \<script\>, \</script\>, \<?php, \?>, echo or \$ were detected');
            window.location.href='http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/purchase.php';
            </script>";
}
exit();
?>
</body>
</html>