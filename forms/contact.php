<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace 'your_email@example.com' with your actual email address
    $to = 'shamikagpm@example.com';
    $subject = 'New message from contact form';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";
    
    // Send the email
      if (mail($to, $subject, $email_message)) {
          echo "Successfully message recieved";
      } else {
          echo "Oops! Something went wrong and we couldn't send your message.";
      }
  } else {
      // If the form is not submitted via POST method, redirect to the contact page
      header("Location: contact.html");
      exit;
  }
  ?>
