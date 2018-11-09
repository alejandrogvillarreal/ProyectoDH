var inputsFormulario = document.getElementById('registrationForm').querySelectorAll('input'); // Selecciono todos los inputs con el id del formulario
var guardarCampos = {};                                   //Creo un array vacio

function persistirCampos() {                              // Debo crear una funcion para persistir los datos
  for (var i = 0; i < inputsFormulario.length; i++) {     // Recorro los inputs
    var campo = inputsFormulario[i];                      // los inputs que recorro los guardo en una variable
    guardarCampos[campo.name] = campo.value;              // Al ser un objeto HTML puedo acceder a su name y guardo el value de ese campo 
  }
  // return null;
}

function habilitarPerfil() {                              //Funcion con For para habilitar inputs y deshabilitar boton editar perfil
  var inputs = inputsFormulario  
  for (var i = 0; i < inputs.length; i++) {               // Recorre los inputs y les remueve el atributo disabled
    inputs[i].removeAttribute("disabled");
  }
  var botonEditar = document.getElementById("botonEditar"); // Desactivo el boton de editar perfil
  botonEditar.disabled = "disabled";
  var botonDescartar = document.getElementById("botonDescartar"); 
  botonDescartar.removeAttribute("hidden");                   // Remueve el atributo hidden del boton descartar
  var botonCambios = document.getElementById('botonCambios'); // Se habilita el boton de guardar cambios
  botonCambios.removeAttribute("disabled");
  persistirCampos();                                          // Cada vez que habilito el boton de editar perfil guardo los datos
}

// function botonToggle() {
//  for (var i = 0; i < inputs.length; i++) {             //Funcion con For para habilitar/deshabilitar un boton
//    inputs[i].disabled = !inputs[i].disabled;
//  }
// }

function descartarCambios() {                             // Deshabilita los campos y vuelve a dejar los valores anteriores
  var inputs = inputsFormulario
  for (var i = 0; i < inputs.length; i++) {               
    var campo = inputs[i];                                
    campo.value = guardarCampos[campo.name];              // Retorno los values de los campos
    campo.setAttribute("disabled", "disabled");           // Se bloquean de nuevo los campos
  }
    var botonEditar = document.getElementById("botonEditar"); 
    botonEditar.removeAttribute("disabled");                  //Vuelvo a habilitar el boton de editar perfil
    var botonDescartar = document.getElementById("botonDescartar");
    botonDescartar.setAttribute("hidden", "hidden");          // Vuelvo a esconder el boton descartar  
    var botonCambios = document.getElementById('botonCambios');
    botonCambios.setAttribute("disabled", "disabled");        // Se inhabilita el boton de guardar cambios
}