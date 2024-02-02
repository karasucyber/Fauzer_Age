function SendMail() {
    var params = {
        name: document.getElementById("nome").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("telefone").value,
    };

    const serviceID = "service_m2swido";
    const templateID = "template_8n9ge8g";

    emailjs.send(serviceID, templateID, params)
        .then((res) => {
            document.getElementById("nome").value = "";  // Corrected from "name" to "nome"
            document.getElementById("email").value = "";
            document.getElementById("telefone").value = "";
            console.log(res);
            alert("Email enviado com sucesso");
        })
        .catch((err) => console.log(err));
}