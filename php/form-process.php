<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Le nom est obligatoire ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "L'email est obligatoire ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Le message est obligatoire ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "khaledannee2023@gmail.com";
$Subject = "Nouveau message reçu";

// prepare email body text
$Body = "";
$Body .= "Nom: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "succès";
}else{
    if($errorMSG == ""){
        echo "Quelque chose s'est mal passé :(";
    } else {
        echo $errorMSG;
    }
}

?>