function SendMail() {
    var params = {
        name: document.getElementById("nome").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("telefone").value,
    };

    const serviceID = "service_8c54czs";
    const templateID = "template_85cdk89";

    emailjs.send(serviceID, templateID, params)
        .then((res) => {
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("telefone").value = "";
            console.log(res);
            alert("Email enviado com sucesso");
        })
        .catch((err) => console.log(err));
}

