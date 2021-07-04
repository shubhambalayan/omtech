<?php

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['phone'];
       $Msg = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:/contact.html?error');
       }
       else
       {
           $to = "info@omtechauto.com";

           if(mail($to,$UserName,$Subject,$Msg,$Email))
           {
               header("location:/form-sucessfull");
           }
       }
    }
    else
    {
        header("location:/contact.html");
    }
?>