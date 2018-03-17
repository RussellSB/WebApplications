<html>
<body>
    <?php
        /**
         * Created by PhpStorm.
         * User: seanp
         * Date: 15/03/2018
         * Time: 11:27
         */

        $to = "synewaveltd@gmail.com";

        $headers = 'From: synewavecomplaints@gmail.com' . "\r\n" .
            'Reply-To: ' . $_POST['email'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $fullText = "Complaint from : " . $_POST['email'] . "\r\n" . "Name : " .
            $_POST['fullName'] . "\r\n" . $_POST['mainText'] . "\r\n";

        mail($to, $_POST['subject'], $fullText, $headers);

        header("Location: http://127.0.0.1:8080/WebApplications/html-structures/frontPage.html"); /*redirects to main page*/
        exit();
    ?>
</body>
</html>