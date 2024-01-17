<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"];
    $message = $_POST["message"];

    $to = "karasucyber@gmail.com"; 
    $subject = "Nova mensagem do formulário de contato";

    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Telefone: $phone\n\n";
    $email_body .= "Mensagem:\n$message";

    $headers = "De: $email";

    $enviado = mail($to, $subject, $email_body, $headers);

    if ($enviado) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    
    echo "error";
} ?>
