<html>
<body>
<?php

$to = "synewaveltd@gmail.com";
$headers = 'From: synewavepurchases@gmail.com' . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$order;

foreach($_SESSION as &$tobuy):
        
    $order .= $tobuy['ProductID']  . $tobuy['Make'] . $tobuy['ProductName'] . $tobuy['Cost'] . $tobuy['quantity'] . "\r\n";
        
endforeach;
    
$fullText = "Purchase from : " . $_POST['email'] . 
    "\r\n" . "Name : " .   $_POST['fullName'] . 
    "\r\n" . "Address : " . $_POST['homeAddress'] . 
    "\r\n\n" . "------------------------------------------------------------Products------------------------------------------------------------" .
    "\r\n" . "ProductID:\t\tMake\t\tProductName\t\tQuantity\t\tCost(€)" . 
    "\r\n" . $order . "\r\n";
;
mail($to, "Purchase Order", $fullText, $headers);
header("Location: http://127.0.0.1:8080/WebApplications/page-structures/frontPage.php"); /*redirects to main page*/
exit();
?>
</body>
</html>