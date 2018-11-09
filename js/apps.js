

  var formPerfil = document.querySelector(".perfil-form");
  var elementos = formPerfil.elements;  //tengo una coleccion html
  elementos = Array.from(elementos);//array de elementos html
  elementos.pop()//saco el btn de reset
  elementos.pop()//saco el boton guardar cambios


  function habilitarEdicion(){
    elementos.forEach(function(element){
      element.removeAttribute("disabled");
    });
    botonEditar = document.querySelector("#botonEditar"); // Desactivo el boton de editar perfil
    botonEditar.disabled = "disabled";

    botonDescartar = document.querySelector("#botonDescartar");
    botonDescartar.removeAttribute("hidden");                   // Remueve el atributo hidden del boton descartar

    botonGuardar = document.querySelector("#botonGuardar");
    botonGuardar.removeAttribute("hidden");                   // Remueve el atributo hidden del boton guardar
  }


  function descartarEdicion(){
    elementos.forEach(function(element){
      element.setAttribute("disabled", "disabled");
    });
    botonEditar = document.querySelector("#botonEditar"); // Desactivo el boton de editar perfil
    botonEditar.removeAttribute("disabled");

    botonDescartar = document.querySelector("#botonDescartar");
    botonDescartar.setAttribute("hidden", "hidden");          // Vuelvo a esconder el boton descartar

    botonGuardar = document.querySelector("#botonGuardar");
    botonGuardar.setAttribute("hidden", "hidden");          // Vuelvo a esconder el boton descartar

  }



  var botonEditar = document.querySelector("#botonEditar");
  botonEditar.addEventListener('click',habilitarEdicion);

  var botonDescartar = document.querySelector("#botonDescartar");
  botonDescartar.addEventListener('click',descartarEdicion);


  /// FALTARIA HACER LAS VALIDACIONES DE JAVASCRIPT ANTES DE ENVIAR EL FORM
