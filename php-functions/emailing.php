<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: seanp & andrej & russellsb
 * Date: 15/03/2018
 * Time: 11:27
 */
session_start();



if(checkForInvalidChars($_POST['email']) && checkForInvalidChars($_POST['fullName']) &&
    checkForInvalidChars($_POST['mainText']) && checkForInvalidChars($_POST['subject'])) {
    $to = "synewaveltd@gmail.com";
    $headers = 'From: synewavebot@gmail.com' . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $fullText = "Complaint from : " . $_POST['email'] . "\r\n" . "Name : " .
        $_POST['fullName'] . "\r\n\n" . $_POST['mainText'] . "\r\n";
    mail($to, $_POST['subject'], $fullText, $headers);
    header("Location: http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/frontPage.php"); /*redirects to main page*/
}else{
    echo "<script>alert('Please do not use >, <, %, $, ; or *')";
    $_SESSION["ERROR"] = "TRUE";
    header("Location: http://$_SERVER[HTTP_HOST]/WebApplications/page-structures/contactUs.php"); /*redirects to main page*/
}
exit();


function checkForInvalidChars($toBeChecked)
{
    $toBeChecked = "x".$toBeChecked;
    if (strpos($toBeChecked, '%') !== false ||
        strpos($toBeChecked, '>') !== false ||
        strpos($toBeChecked, '<') !== false ||
        strpos($toBeChecked, '$') !== false ||
        strpos($toBeChecked, ';') !== false ||
        strpos($toBeChecked, "*") !== false ){
        return false;
    } else {
        return true;
    }
}

?>
</body>
</html>