<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolher os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar o destinatário e assunto do e-mail
    $to = "karasucyber@gmail.com";
    $subject = "Nova mensagem do formulário de contato";

    // Construir o corpo do e-mail
    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Telefone: $phone\n\n";
    $email_body .= "Mensagem:\n$message";

    // Configurar os cabeçalhos do e-mail
    $headers = "De: $email";

    // Enviar o e-mail
    mail($to, $subject, $email_body, $headers);

    // Responder ao formulário com mensagem de sucesso
    echo "success";
} else {
    // Se o método de requisição não for POST, responder com erro
    echo "error";
}
?>
