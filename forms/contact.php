<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar campos obrigatórios
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
        echo "error";
        exit; // Terminar o script se campos obrigatórios não estiverem preenchidos
    }

    // Recolher os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = isset($_POST["subject"]) ? $_POST["subject"] : '';
    $message = $_POST["message"];

    // Validar o e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error";
        exit; // Terminar o script se o e-mail não for válido
    }

    // Configurar o destinatário e assunto do e-mail
    $to = "karasucyber@gmail.com";
    $subject = "Nova mensagem do formulário de contato";

    // Construir o corpo do e-mail
    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Telefone: $phone\n\n";
    $email_body .= "Mensagem:\n$message";

    // Configurar os cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // Se o método de requisição não for POST, responder com erro
    echo "error";
}
?>
