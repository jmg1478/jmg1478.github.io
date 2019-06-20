<?php

    if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subjust = $_POST['subjust'];
    $mailFrom = $_POST['mail'];
    $mssage = $_POST['message'];
    
$mailTo = "JG.Mundt@yahoo.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("location: contact.php?mailsend");
    
    }

    ?>