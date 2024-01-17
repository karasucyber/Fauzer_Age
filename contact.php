<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolhe os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar o destinatário e assunto do e-mail
    $to = "karasucyber@gmail.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Nova mensagem do formulário de contato";

    // Construir o corpo do e-mail
    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Telefone: $phone\n\n";
    $email_body .= "Mensagem:\n$message";

    // Configurar os cabeçalhos do e-mail
    $headers = "De: $email";

    // Enviar o e-mail
    $enviado = mail($to, $subject, $email_body, $headers);

    // Verificar se o e-mail foi enviado com sucesso
    if ($enviado) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // Se o método de requisição não for POST, responder com erro
    echo "error";
}

?>
