<?php

    $email = $_POST['emailPro'];
    $subject = "🚨 NEWSLETTER OPTIBUS 🚨";
    if ($email === ''){
        echo "L'email ne peut pas être vide.";
        die();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Le format de l'email est invalide.";
        die();
        }
    }


    $mailTo = "optibus92@gmail.com";
    $headers = "De la part de: $email \r\n";
    $txt = 
    "Voilà une personne supplémentaire intéressée par OptiBus!";

    mail($mailTo, $subject, $txt, $headers) or die("Erreur, veuillez renvoyer un mail plus tard :(");
    print_r(error_get_last()); 
    header("location:index.php?form=success");
    print_r(error_get_last()); 
?>