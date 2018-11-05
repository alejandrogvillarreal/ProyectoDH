<?php

require_once("DataBase.php");
  /**
   *
   */
  class Autenticador
  {

    public function __construct() {
      session_start();

      if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
        $_SESSION["logueado"] = $_COOKIE["logueado"];
      }
    }

    //PARA LOGUEARLO LE PIDO UN EMAIL Y GUARDO EN SESSION EL EMAIL
    public function loguear($email) {
      $_SESSION["logueado"] = $email;
    }

    // SI PUSO RECORDARME INICIALIZO LA COOKIE LOGUEADO CON EL VALOR DEL EMAIL
    public function recordame($email) {
      setcookie("logueado", $email, time() + 3600 * 2);
    }

    //PREGUNTO SI LA VARIABLE $_SESSION["logueado"] está inicializada
    public function estaLogueado() {
      return isset($_SESSION["logueado"]);
    }

    //LA FUNCION RETORNA AL USUARIO LOGUEADO
    public function usuarioLogueado(DataBase $db) {
      //PRIMERO PREGUNTO SI EL USUARIO ESTA LOGUEADO
      if ($this->estaLogueado()) {
        //GUARDO EL EMAIL
        $email = $_SESSION["logueado"];
        //EL METODO buscarPorMail($email) RETORNA UN USUARIO, ESE MISMO USUARIO ES EL QUE RETORNA LA FUNCION usuarioLogueado(DataBase $db)
        return $db->buscarPorMail($email);
      } else {
        return NULL;
      }

    }

    //DESTRUYE LA SESSION Y LA COOKIE
    public function logout() {
      session_destroy();
      setcookie("logueado", "", -1);
    }


  }
