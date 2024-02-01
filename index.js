function SendMail(){
    var params ={
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("subject").value,
        text: document.getElementById("message").value,
  }
}

const serviceID = "service_8c54czs";
const templateID = "template_85cdk89"

emailjs
.send(serviceID, templateID, params)
.then((res) => {
     document.getElementById("name").value ="" ,
      document.getElementById("email").value = "",
     document.getElementById("subject").value ="",
     document.getElementById("message").value = "",
     console.log(res);
     alert("Email enviado com sucesso")
})

.catch((err) => console.log(err))