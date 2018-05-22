<html>
<body>
<?php

session_start();

$to = "synewaveltd@gmail.com";
$headers = 'From: synewavepurchases@gmail.com' . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$order="";

//concatenates to order string variable
foreach($_SESSION as &$tobuy){
        
    $order .= $tobuy['ProductID']  . ", " . $tobuy['Make'] . ", " . $tobuy['ProductName'] . ", " . $tobuy['Cost'] . ", " . $tobuy['quantity'] . ";" . "\r\n";
        
}
    
$fullText = "Purchase from : " . $_POST['email'] . 
    "\r\n" . "Name : " .   $_POST['fullName'] . 
    "\r\n" . "Address : " . $_POST['homeAddress'] . 
    "\r\n\n\n\n" . "------------------------------------------------------------Products------------------------------------------------------------" .
    "\r\n" . "The Ordered Products are displayed in the order; ProductID, Make, ProductName, Cost(€), Quantity" . 
    "\r\n\n" . $order . "\r\n";
;
mail($to, "Purchase Order", $fullText, $headers);
header("Location: http://localhost:8080/WebApplications/page-structures/frontPage.php"); /*redirects to main page*/
exit();
?>
</body>
</html>