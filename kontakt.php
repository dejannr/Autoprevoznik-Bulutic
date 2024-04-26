<?php

    if (isset($_POST['submit'])) {

        $youremail = $_POST['youremail'];
        $yourmessage = $_POST['yourmessage'];
        $yourname = $_POST['yourname'];
        $yoursurname = $_POST['yoursurname'];
        $yournumber = $_POST['yourphone'];
        $headers = "From: ".$youremail;
    
        $to = "buluticdragan@gmail.com";
        $subject = "Poruka od: ".$yourname." ".$yoursurname;
        $yourmessagefinal = $yourmessage.", Broj telefona: ".$yournumber;
    
        mail($to, $subject, $yourmessagefinal, $headers);
        header("Location: poslato.html");

    }

?>