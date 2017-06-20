<?php

// if(isset($_POST['submit'])){
    $to = "liquidspeed@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission from anthonyvanbeek.com from contact";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<p>Thank you " . $_POST['name'] . ", your message has been sent.<br/><br/> I'll get back to you shortly!</p><br/>";
// }


?>
