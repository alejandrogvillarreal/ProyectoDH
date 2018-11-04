<?php


  /**
   *
   */
  class ValidadorForm
  {

    function validarLogin($post, DataBase $db) {
    $errores = [];

    foreach ($post as $clave => $valor) {
      $post[$clave] = trim($valor);
    }


    if ($post["email"] == "") {
      $errores["email"] = "Por favor ingrese su email";
    }
    else if (filter_var($post["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errores["email"] = "Formato de email inválido";
    } else if ($db->traerPorMail($post["email"]) == NULL) {
      $errores["email"] = "El usuario no está registrado";
    }

    $usuario = $db->traerPorMail($post["email"]);

    if ($post["password"] == "") {
      $errores["password"] = "Por favor ingrese la contraseña";
    } else if ($usuario != NULL) {
      //El usuario existe y puso contraseña
      // Tengo que validar que la contraseño que ingreso sea valida
      ///////////////////////////////////////////////////////////////////////////////////////////////////
                                          //NO FUNCIONA EL PASSWORD_VERIFY
      ///////////////////////////////////////////////////////////////////////////////////////////////////
      if (password_verify($post["password"], $usuario->getPassword())) {
        $errores["password"] = "La contraseña es incorrecta";
      }
    }

    return $errores;
  }





    function validarRegistro($post, DataBase $db) {
      $errores = [];

      foreach ($post as $clave => $valor) {
        $post[$clave] = trim($valor);
      }


      //nombre vacio
      if(!isset($post["nombre"]) ){
          $errores["nombre"] = "El nombre es obligatorio";
      //cantidad de caracteres del nombre
      }else if( strlen($post["nombre"]) < 4 || strlen($post["nombre"]) > 30){
          $errores["nombre"] = "El nombre debe ser de al menos 3 caracteres y menor a 30 caracteres.";
      }else if(!ctype_alpha($post["nombre"])){
          $errores["nombre"] = "El nombre sólo puede contener letras";
      }


      //apellido vacio
      if(!isset($post["apellido"]) ){
          $errores["apellido"] = "El apellido es obligatorio.";
      //cantidad de caracteres del apellido
      }else if( strlen($post["apellido"]) < 4 || strlen($post["apellido"]) > 30){
          $errores["apellido"] = "El apellido debe ser de al menos 3 caracteres y menor a 30 caracteres.";
      }else if(!ctype_alpha($post["apellido"])){
          $errores["apellido"] = "El apellido sólo puede contener letras";
      }


      if(!isset($post["username"]) ){
          $errores["username"] = "El nombre de usuario es obligatorio.";
      //cantidad de caracteres del nombre de usuario
      }else if( strlen($post["username"]) < 4 || strlen($post["username"]) > 20){
          $errores["username"] = "El nombre debe ser de al menos 3 caracteres y menor a 20 caracteres.";
      }else if(!ctype_alpha($post["username"])){
          $errores["username"] = "El nombre sólo puede contener letras";
      }


      //Pais vacio
      if (empty($post["pais"])) {
        $errores["pais"] = "El pais es obligatorio";
      }



      if ($post["email"] == "") {
        $errores["email"] = "Complete el campo email";
      }
      else if (filter_var($post["email"], FILTER_VALIDATE_EMAIL) == false) {
        $errores["mail"] = "Formato de email inválido";
      } else if ($db->traerPorMail($post["email"]) != NULL) {
        $errores["mail"] = "El usuario ya existe!";
      }


      if(empty($post["password"]) || strlen($post["password"]) < 5){
        $errores["password"] = "La contraseña es muy corta";
      }
      elseif (strlen($post["password"]) > 20) {
        $errores["password"] = "La contraseña es muy larga";
      }


      if ($post["passwordR"] == "") {
        $errores["passwordR"] = "Repita la contraseña por favor";
      }

      if ($post["password"] != "" && $post["passwordR"] != "" && $post["password"] != $post["passwordR"]) {
        $errores["password"] = "Las contraseñas no coinciden";
      }

      /*
      if(empty($post["userPhoto"])){
        $errores["userPhoto"] = "La foto es obligatoria";
      }
      */

      return $errores;
    }
  }
