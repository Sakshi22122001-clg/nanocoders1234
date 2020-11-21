<?php
require 'mailer/PHPMailerAutoLoad.php';
include_once("connection.php");
$mail=new PHPMailer;
$mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'goyalakash385@gmail.com';
      // Gmail Password
      $mail->Password = 'Flatron@w1943c';
      $mail->SMTPSecure = "tls";
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('goyalakash385@gmail.com');
$query="select * from emailss";
$res=mysqli_query($dbCon,$query);
if(mysqli_num_rows($res))
{
    while($x=mysqli_fetch_assoc($res))
    {
        $mail->addBCC($x['email']);
    }
    $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "mail sent to all";

      if(!$mail->send())
      {
          echo "wrong";
      }
      else
      echo "done";

}
else
    echo "no data";
?>