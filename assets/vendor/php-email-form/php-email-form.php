<?php 
if(isset($_POST['submit'])){
    $to = "srinirohan31@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $body = $_POST['message'];
    $subject = $_POST['subject'];
    $message = $name . " /n/n" . $body  . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
