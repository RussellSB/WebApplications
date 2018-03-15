<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: seanp
 * Date: 15/03/2018
 * Time: 11:27
 */

$to = "synewave1@gmail.com";
$headers = 'From: synewavecomplaints@gmail.com' . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$fullText = $_POST['fullName'] . "\r\n" . $_POST['mainText'] . "\r\n";
mail($to, $_POST['subject'], $fullText, $headers);

echo "Email Sent";
?>
</body>
</html>

