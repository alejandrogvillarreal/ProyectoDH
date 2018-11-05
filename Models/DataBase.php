<?php

require_once("Models/Usuario.php");
  /**
   *
   */
  class DataBase
  {

    protected $conn;

    public function __construct() {
      $dsn = 'mysql:host=localhost;dbname=proyecto_dh;
      charset=utf8mb4;port=3306';
      $user ="root";
      $pass = "";

      try {
        $this->conn = new PDO($dsn, $user, $pass);
      } catch (Exception $e) {
        echo "La conexion a la base de datos falló: " . $e->getMessage();
      }
    }

    function guardarUsuario(Usuario $usuario) {
      $query = $this->conn->prepare("INSERT INTO usuarios(nombre,apellido,username,email,password,pais)
                                            VALUES(:nombre,:apellido,:username,:email,:password,:pais)");

      $query->bindValue(":nombre", $usuario->getNombre());
      $query->bindValue(":apellido", $usuario->getApellido());
      $query->bindValue(":username", $usuario->getUsername());
      $query->bindValue(":email", $usuario->getEmail());
      $query->bindValue(":password", $usuario->getPassword());
      $query->bindValue(":pais", $usuario->getPais());

      $query->execute();

      $id = $this->conn->lastInsertId();
      $usuario->setId($id);

      return $usuario;

    }


    function buscarPorMail($email) {
      $query = $this->conn->prepare("Select * from usuarios where email = :email");
      $query->bindValue(":email", $email);

      $query->execute();

      $usuarioFormatoArray = $query->fetch();


      if ($usuarioFormatoArray) {
        //SI TRAE UN RESULTADO CREO UN USUARIO Y LO RETORNA
        $usuario = new Usuario($usuarioFormatoArray["nombre"], $usuarioFormatoArray["apellido"], $usuarioFormatoArray["email"], $usuarioFormatoArray["username"], $usuarioFormatoArray["pais"], $usuarioFormatoArray["password"], $usuarioFormatoArray["id"]);

        return $usuario;
      }
      else {
        return NULL;
      }

    }

    /*
    function traerTodos() {
      $query = $this->conn->prepare("Select * from usuarios");
      $query->execute();

      $usuariosFormatoArray = $query->fetchAll();

      $usuariosFormatoClase = [];

      foreach ($usuariosFormatoArray as $usuario) {
        $usuariosFormatoClase[] = new Usuario($usuario["email"], $usuario["password"], $usuario["edad"], $usuario["username"], $usuario["pais"], $usuario["id"]);
      }

      return $usuariosFormatoClase;
    }

    */


  }
