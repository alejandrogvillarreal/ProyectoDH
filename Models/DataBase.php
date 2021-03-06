<?php

require_once("Models/Usuario.php");
  /**
   *
   */
  class DataBase
  {

    protected $conn;

    public function __construct() {
      $dsn = 'mysql:host=localhost;dbname=proyecto_dh_columbus;charset=utf8mb4;';
      $user ="root";
      $pass = "";

      try {
        $this->conn = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      } catch (Exception $e) {
        echo "La conexion a la base de datos falló: " . $e->getMessage();
      }
    }

    function guardarUsuario(Usuario $usuario, $imagen) {
      $query = $this->conn->prepare("INSERT INTO usuarios(nombre,apellido,username,email,password,pais,imagen)
                                            VALUES(:nombre,:apellido,:username,:email,:password,:pais,:imagen)");

      $query->bindValue(":nombre", $usuario->getNombre());
      $query->bindValue(":apellido", $usuario->getApellido());
      $query->bindValue(":username", $usuario->getUsername());
      $query->bindValue(":email", $usuario->getEmail());
      $query->bindValue(":password", $usuario->getPassword());
      $query->bindValue(":pais", $usuario->getPais());
      $query->bindValue(":imagen", $usuario->getImagen());

      $query->execute();

      $id = $this->conn->lastInsertId();
      $usuario->setId($id);

      return $usuario;
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////

    function modificarUsuario(Usuario $usuario, $imagen) {
      $query = $this->conn->prepare("UPDATE usuarios
                                    SET nombre=:nombre, apellido=:apellido, username=:username, password=:password, pais=:pais, imagen=:imagen
                                    WHERE id=:id
                                            ");

      $query->bindValue(":id", $usuario->getId());
      $query->bindValue(":nombre", $usuario->getNombre());
      $query->bindValue(":apellido", $usuario->getApellido());
      //NO LE MANDO EL EMAIL PORQUE NO SE PUEDE CAMBIAR
      $query->bindValue(":username", $usuario->getUsername());
      $query->bindValue(":password", $usuario->getPassword());
      $query->bindValue(":pais", $usuario->getPais());
      $query->bindValue(":imagen", $usuario->getImagen());

      $query->execute();

    }


    function buscarPorMail($email) {
      $query = $this->conn->prepare("Select * from usuarios where email = :email");
      $query->bindValue(":email", $email);

      $query->execute();

      $usuarioFormatoArray = $query->fetch();


      if ($usuarioFormatoArray) {
        //SI TRAE UN RESULTADO CREO UN USUARIO Y LO RETORNA
        $usuario = new Usuario($usuarioFormatoArray["nombre"], $usuarioFormatoArray["apellido"], $usuarioFormatoArray["email"], $usuarioFormatoArray["username"], $usuarioFormatoArray["pais"], $usuarioFormatoArray["password"], $usuarioFormatoArray["id"]);
        $usuario->setImagen($usuarioFormatoArray["imagen"]);
        return $usuario;
      }
      else {
        return NULL;
      }

    }

    /////////////////////////////////////////////////////////////////////////////////



    function generarNuevaPassword(Usuario $usuario) {
      $idUsuario = $usuario->getId();
      //genera un id unico, que es el que le vamos a pasar al usuario por mail
      $aleatorio = uniqid();
      //debo hashear la contraseña para que se guarde hasheada y el password_verify ande
      $nuevaPassword = password_hash($aleatorio, PASSWORD_DEFAULT);

      //actualizo la contraseña
      $query = $this->conn->query("UPDATE usuarios s
                                      SET s.password = '{$nuevaPassword}'
                                      WHERE s.id = {$idUsuario}
                                      ");
      //retorno el id unico
      return $aleatorio;
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
