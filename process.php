<?php 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "fachrulmufti19@gmail.com";

           if(mail($to,$Subject,$Msg,$Email)); //Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing in C:\xampp\htdocs\un\process.php on line 17
                                               //maka harus dikasih titik koma(;) agar terdeteksi
           {
               header("location:formpesan.php?success"); //lokasi file sesuai dengan nam html+php
           }
       }
    }
    else
    {
        header("location:formpesan.php"); //lokasi file sesuai dengan nam html+php
    }
?>
