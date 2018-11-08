
function habilitarPerfil() {                             //Funcion con For para habilitar inputs y deshabilitar boton editar perfil
  var inputs = document.getElementsByTagName('input');  
  for (var i = 0; i < inputs.length; i++) {              // Recorre los inputs y retorna los inputs desactivados como falso
    inputs[i].disabled = false;
  }
  botonEditar = document.getElementById("botonEditar"); // Desactivo el boton de editar perfil
  botonEditar.disabled = "disabled";
}

// function botonToggle() {
//  for (var i = 0; i < inputs.length; i++) {            //Funcion con For para habilitar/deshabilitar un boton
//    inputs[i].disabled = !inputs[i].disabled;
//  }
// }
