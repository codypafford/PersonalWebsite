<?php
    require 'PHPMailer/PHPMailerAutoload.php';

   // echo $_POST["Name"];
   // echo $_POST['Email'];
   // echo $_POST['Message'];
    $from = $_POST["Email"];
    $message = $_POST["Message"];
    $mail = new PHPMailer();
  //  $mail->isSMTP();  //enable for use on localhost
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='codypafford6@gmail.com';
    $mail->Password='Abcd008722';

    $mail->setFrom("codypafford6@gmail.com", "codypafford6@gmail.com"); // changed
    $mail->addAddress('codypafford6@icloud.com');
    $mail->addReplyTo($from); // changed

    $mail->isHTML(true);
    $mail->Subject='CONTACT MESSAGE';
    $header = "<h3><i>From: </i></h3>" . $from . "<br>";
    $header = $header . ' ' . "<br>" . "<h3><i>Message Body: </i></h3>" . "<br>";
    $mail->Body=$header . $message;

    if(!$mail->send()){
        echo "Message could not be sent";
    }else{
        echo "<h1>Email sent. Thank you for your email!</h1><br>" . "<i>*Due to the mail server not always functioning as it should, feel free to reach me at my cell number: 904-239-0382*</i>";
    }

