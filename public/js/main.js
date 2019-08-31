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

selectPaises.addEventListener('change',function(){
   fetch("https://dev.digitalhouse.com/api/getComisiones")
   .then(function(respuesta){
       return respuesta.json();
   })
   .then(function(datos){
       var posicionOption = selectPaises.selectedIndex;
       var cursoSeleccionado = selectPaises.children[posicionOption].value;

       for(var i=0;i<datos.data.length; i++){
           if(datos.data[i].curso_id == cursoSeleccionado){
               console.log(datos.data[i])
           }
       }
   })
   .catch(function(error){
       console.log(error);
   });
})

}
