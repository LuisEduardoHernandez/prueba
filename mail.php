<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = ""; /*aqui va tu correo*/
   $mail ->Password = ""; /*aquí va tu contraseña*/
   $mail ->SetFrom($email,$name);
   $mail ->Subject = "MI SITIO WEB";
   $mail ->Body = '<h1 align = center>Nombre: '.$name.'<br>Su correo es: ' .$email.'<br>Mensaje: '.$message;
   $mail ->AddAddress(""); /*aqui va tu correo*/
   
   if(!$mail->Send())
   {
       echo "mensaje enviado";
   }
   else
   {
       echo "No se envío el mensaje";
   }





   

