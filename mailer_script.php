<?php 
    $user_name = $_POST['name'];
    $phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $message = $_POST['message'];

    $success = "Sent Successfully";
    
    $email_from = "foodlifefarms@gmail.com";
    $email_subject = "New Enquiry";
    $message_body = "User Name: $user_name.\n".
                     "Phone $phone.\n".
                    "User Email: $user_email.\n". 
                    "User Message: $message.\n";
    
    
    $to = "silas07official@gmail.com";
    $header = "From: $email_from \r\n";
    $header .= "Reply To: $user_email \r\n";
    
    
  mail($to, $email_subject, $message_body, $header);
  header("location: index.html")
      
  
?> 