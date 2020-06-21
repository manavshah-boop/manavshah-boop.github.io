<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone']
    $message = $_POST['message'];

    
    $email_from = 'pstahley@msn.com';
    
    $email_subject = "New Form Submission";

    $email_body = "Name: $name.\n".
        "Email: $visitor_email.\n".
        "Phone: $phone.\n".
            "Message: $message.\n";
    
    $to = "pstahley@msn.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: Index.html");

?>