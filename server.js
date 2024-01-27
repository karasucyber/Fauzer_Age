const express = require('express');
const nodemailer = require('nodemailer');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Configuração do Nodemailer (substitua com suas configurações)
const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'seu_email@gmail.com',
    pass: 'sua_senha'
  }
});

// Middleware para analisar dados do formulário
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Rota para lidar com o envio do formulário
app.post('/contact', (req, res) => {
  const { name, email, subject, message } = req.body;

  // Configurações do e-mail a ser enviado
  const mailOptions = {
    from: 'seu_email@gmail.com',
    to: 'destinatario@example.com',
    subject: subject || 'Assunto padrão',
    text: `Nome: ${name}\nE-mail: ${email}\nTelefone: ${subject}\nMensagem: ${message}`
  };

  // Envia o e-mail
  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      console.error(error);
      res.status(500).send('Erro no envio do e-mail.');
    } else {
      console.log('E-mail enviado: ' + info.response);
      res.status(200).send('E-mail enviado com sucesso.');
    }
  });
});

// Inicia o servidor
app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
