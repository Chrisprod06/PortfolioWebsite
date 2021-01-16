<!Doctype HTML>

<html>
    <body>
        <?php>


    //Variables

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    //Compose the email
    $email_from = 'portfoliowebsitechris@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "You have recieved a new message at your portfolio website from the user $name.\nHere is the message: \n$message";


    //Send the email
    $send_to = "chrisprodromou06@gmail.com";
    $headers= "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($send_to,$email_subject,$email_body,$headers);



    ?>
        
    </body>

</html>

