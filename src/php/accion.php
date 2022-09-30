<?php
if(isset($_POST['submit'])){
    $to = "guerrero.hernandez.hagen@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contacto de formulario";
    $subject2 = "Datos recopilados del formulario";
    $message = $name. " tiene el mensaje:" . "\n\n" . $_POST['message'];
    $message2 = "Aquí hay una copia del mensaje que envió " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}
?>