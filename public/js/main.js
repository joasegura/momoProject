window.onload = function(){

var selectPaises = document.querySelector('#paises');


fetch("https://restcountries.eu/rest/v2/all")
.then(function(respuesta){
   return respuesta.json();
})
.then(function(datos){
 datos.forEach(function (unDato) {
   //creo un option
   var nuevoPais = document.createElement('option');
   //seteo el id como value
   nuevoPais.setAttribute('value', unDato.name);
   //seteo el texto con el nombre del curso
   nuevoPais.innerText = unDato.name;
   //agrego el option al select
   selectPaises.append(nuevoPais);

 });
})
.catch(function(error){
   console.log(error);
});



var provincia = document.getElementById('provincias')
provincia.style.display = "none";
var selectProv = document.querySelector('select[id=prov]');
fetch('https://dev.digitalhouse.com/api/getProvincias')
   .then(function(respuesta){
     return respuesta.json();
   })
   .then(function(provincias){
     for (var i = 0; i < provincias.data.length; i++) {
       var nuevaProv = document.createElement('option');
       nuevaProv.setAttribute('value', provincias.data[i].state);
       nuevaProv.innerText = provincias.data[i].state;
       selectProv.append(nuevaProv);
     }
   })
   .catch(function(error){
     console.log(error)
   })

     selectPaises.onchange = function() {
   if (this.value === "Argentina") {
     var provincia = document.getElementById('provincias')
     var hdosProv = document.getElementById('hdosProv');
     hdosProv.innerText = "Provincias:";
     provincia.style.display = "block";
     } else {
       var provincia = document.getElementById('provincias')
       provincia.style.display = "none";
   }
 };


var campoNombre = document.getElementById('divName');
var campoEmail = document.getElementById('divEmail');
var campoPass = document.getElementById('divPass');
var campoPassConfirm = document.getElementById('divPassConfirm');
var inputName = document.querySelector('input[name=name]');
var inputEmail = document.querySelector('input[name=email]');
var inputPass = document.querySelector('input[name=password]');
var inputPassConfirm = document.querySelector('input[name=password_confirmation]');
var regexMail = /^[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var regexPass = /^[^DH]*DH[^DH]*$/;
// var formulario = document.querySelector('.form');
inputName.onblur = function(){
  if (this.value.trim() =='') {
    var errorNombre = document.getElementById("errorNombre");
    errorNombre.innerText = "el campo esta vacio";
    errorNombre.setAttribute("style", "color:red");
    inputName.setAttribute("style", "border: solid 1px red");
  }else{
    if (!this.value.trim() =='') {
    var errorNombre = document.getElementById("errorNombre");
    errorNombre.setAttribute("style", "display:none");
    inputName.setAttribute("style", "border: solid 1.3px green");
 }
}
}
inputEmail.onblur = function(){
  if (this.value.trim() =='') {
    var errorEmail = document.getElementById('errorEmail');
    errorEmail.innerText = "el campo esta vacio";
    campoEmail.append(errorEmail);
    errorEmail.setAttribute("style", "color:red");
    inputEmail.setAttribute("style", "border: solid 1px red");
  } else if (!regexMail.test(this.value)) {
    var errorEmailFormato = document.getElementById('errorEmail');
    errorEmailFormato.innerText = "el formato de email no es valido";
    errorEmailFormato.setAttribute("style", "color:red");
    inputEmail.setAttribute("style", "border: solid 1px red");
  }else if (!this.value.trim() =='') {
    var errorEmail = document.getElementById("errorEmail");
    errorEmail.setAttribute("style", "display:none");
    inputEmail.setAttribute("style", "border: solid 1.3px green");
  } else if (regexMail.test(this.value)) {
    var errorEmail = document.getElementById("errorEmail");
    errorEmail.setAttribute("style", "display:none");
    inputEmail.setAttribute("style", "border: solid 1.3px green");
  }
}
inputPass.onblur = function(){
  if (this.value.trim() =='') {
    var errorPass = document.getElementById('errorPass');
    errorPass.innerText = "el campo esta vacio";
    errorPass.setAttribute("style", "color:red");
    inputPass.setAttribute("style", "border: solid 1px red");
  } else if (this.value.length < 8) {
    var errorMinPass = document.getElementById('errorPass');
    errorMinPass.innerText = "la contraseña debe tener un min de 8 caracteres";
    errorMinPass.setAttribute("style", "color:red");
    inputPass.setAttribute("style", "border: solid 1px red");
  } else if (!regexPass.test(this.value)) {
    var errorDhPass = document.getElementById('errorPass');
    errorDhPass.innerText = "la contraseña debe contener DH";
    errorDhPass.setAttribute("style", "color:red");
    inputPass.setAttribute("style", "border: solid 1px red");
  } else if (!this.value.trim() =='') {
    var errorPass = document.getElementById("errorPass");
    errorPass.setAttribute("style", "display:none");
    inputPass.setAttribute("style", "border: solid 1.3px green");
  } else if (!this.value.length < 8) {
    var errorPass = document.getElementById("errorPass");
    errorPass.setAttribute("style", "display:none");
    inputPass.setAttribute("style", "border: solid 1.3px green");
  } else if (regexPass.test(this.value)) {
    var errorPass = document.getElementById("errorPass");
    errorPass.setAttribute("style", "display:none");
    inputPass.setAttribute("style", "border: solid 1.3px green");
  }
 }
   inputPassConfirm.onblur = function(){
     if (this.value != inputPass.value  ) {
        var errorPassConf = document.getElementById('errorPassConf');
        errorPassConf.innerText = "las contraseñas no coinciden";
        errorPassConf.setAttribute("style", "color:red");
        inputPassConfirm.setAttribute("style", "border: solid 1px red");
   } else {
     if (this.value = inputPass.value  ) {
        var errorPassConf = document.getElementById('errorPassConf');
        errorPassConf.setAttribute("style", "display:none");
        inputPassConfirm.setAttribute("style", "border: solid 1.3px green");
   }
 }
}
// formulario.onsubmit = function(event){
//   if (this.value =='') {
//     alert('el campo esta vacio');
//     event.preventDefault();
//   }
// }

}
