
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

function descartarCambios() {
  var inputs = document.getElementsByTagName('input');
  for (var i = 0; i < inputs.length; i++) {              
    inputs[i].setAttribute("disabled", "disabled");           //En caso de descartar cambios, se bloquean de nuevo los campos
  }
    botonEditar = document.getElementById("botonEditar"); 
    botonEditar.removeAttribute("disabled");                  //Vuelvo a habilitar el boton de editar perfil
    botonDescartar = document.getElementById("botonDescartar");
    botonDescartar.setAttribute("hidden", "hidden");          // Vuelvo a esconder el boton descartar

   //////FALTA CANCELAR LOS CAMBIOS Y RETORNAR LOS CAMPOS A SUS VALORES ANTERIORES!!!!//////

}
