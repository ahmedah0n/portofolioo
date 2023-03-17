<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message =$_POST['message'];


    $email_from = 'ahonahon30@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visior_email.\n".
                        "user Message: $message.\n";

    $to = "ahinahon88561@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $visitors_email \r\n";

    mail( $to,$email_subject,$email_body,$headers);

    header("Loaction: index.html");





?>