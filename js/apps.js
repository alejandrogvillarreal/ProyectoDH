
function habilitarPerfil() {                             //Funcion con For para habilitar inputs y deshabilitar boton editar perfil
  var inputs = document.getElementsByTagName('input');  
  for (var i = 0; i < inputs.length; i++) {              // Recorre los inputs y les remueve el atributo disabled
    inputs[i].removeAttribute("disabled");
  }
  botonEditar = document.getElementById("botonEditar"); // Desactivo el boton de editar perfil
  botonEditar.disabled = "disabled";
  botonDescartar = document.getElementById("botonDescartar"); 
  botonDescartar.removeAttribute("hidden");                   // Remueve el atributo hidden del boton descartar
}

// function botonToggle() {
//  for (var i = 0; i < inputs.length; i++) {            //Funcion con For para habilitar/deshabilitar un boton
//    inputs[i].disabled = !inputs[i].disabled;
//  }
// }
