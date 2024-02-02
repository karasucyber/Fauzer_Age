function SendMail() {
    var params = {
        nome: document.getElementById("nome").value,
        email: document.getElementById("email").value,
        telefone: document.getElementById("telefone").value,
        texto: document.getElementById("texto").value,

    };

    const serviceID = "service_8c54czs";
    const templateID = "template_85cdk89";

    emailjs.send(serviceID, templateID, params)
        .then((res) => {
            document.getElementById("nome").value = "";  // Corrected from "name" to "nome"
            document.getElementById("email").value = "";
            document.getElementById("telefone").value = "";
            document.getElementById("texto").value = "";
            console.log(res);
            alert("Email enviado com sucesso");
        })
        .catch((err) => console.log(err));
}