window.onload = function(){


    var formPerfil = document.querySelector(".perfil-form");
    var elementos = formPerfil.elements;  //tengo una coleccion html
    elementos = Array.from(elementos);//array de elementos html
    elementos.pop();//saco el btn de reset
    elementos.pop();//saco el boton guardar cambios


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
        element.classList.remove("is-invalid");
        element.classList.remove("is-valid");
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


    //antes de hacer enviar el form lo freno y valido
    formPerfil.addEventListener('submit',function(event){
      event.preventDefault();
      elementos.forEach(function(element){
        element.addEventListener('blur',function(){
          if (this.value=="") {
            this.classList.add('is-invalid');
            var div = document.querySelector('div[class="invalid-feedback"]');
            div.innerHTML = 'Campo obligatorio';
          }
        });
      });
    });

    //valido los campos
    var inputNombre = document.querySelector('input[name="nombre"]');
    var inputApellido = document.querySelector('input[name="apellido"]');
    var inputUsername = document.querySelector('input[name="username"]');
    var inputPais = document.querySelector('input[name="pais"]');
    var inputEmail = document.querySelector('input[name="email"]');
    var inputPassword = document.querySelector('input[name="password"]');
    var inputPasswordR = document.querySelector('input[name="passwordR"]');

    //VALIDACION DEL NOMBRE
    inputNombre.addEventListener('keyup',function(event){
      if ((this.value).length < 4) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El nombre es demasiado corto';
      }else if ((this.value).length >30) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El nombre es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DEL APELLIDO
    inputApellido.addEventListener('keyup',function(event){
      if ((this.value).length < 4) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El apellido es demasiado corto';
      }
      else if ((this.value).length >30) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El apellido es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DEL USERNAME
    inputUsername.addEventListener('keyup',function(event){
      if ((this.value).length < 4) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El username es demasiado corto';
      }
      else if ((this.value).length >30) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El username es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DEL EMAIL
    inputEmail.addEventListener('keyup',function(event){
      var regexEmail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      if (!regexEmail.test((this.value))) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El formato de email es invalido';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DEL PASSWORD
    inputPassword.addEventListener('keyup',function(event){
      if ((this.value).length < 4) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El password es demasiado corto';
      }
      else if ((this.value).length >30) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'El password es demasiado largo';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });

    //VALIDACION DE LA REPETICION DE PASSWORD
    inputPasswordR.addEventListener('keyup',function(event){
      if (this.value !== inputPassword.value) {
        this.classList.add('is-invalid');
        var div = document.querySelectorAll('div[class="invalid-feedback"]');
        div.innerHTML = 'Las password no coinciden';
      }
      else {
        this.classList.remove("is-invalid");
        this.classList.add('is-valid');
      }
    });



    /// FALTARIA HACER LAS VALIDACIONES DE JAVASCRIPT ANTES DE ENVIAR EL FORM

}
