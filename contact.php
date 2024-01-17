<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolhe os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar o destinatário e assunto do e-mail
    $to = "karasucyber@gmail.com"; 
    $subject = "Nova mensagem do formulário de contato";

=    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Telefone: $phone\n\n";
    $email_body .= "Mensagem:\n$message";

=    $headers = "De: $email";


    $enviado = mail($to, $subject, $email_body, $headers);

    
        echo "success";
    } else {
        echo "error";
    }
} else {
    
    echo "error";
}

?>
