<?php



  /**
   *
   */
  class Usuario
  {

    protected $id;
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $username;
    protected $pais;
    protected $password;
    protected $foto;

    public function __construct($nombre, $apellido, $email, $username, $pais, $password, $id = null) {
      if ($id == null) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
      }
      else {
        $this->password = $password;
      }

      $this->id = $id;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->username = $username;
      $this->pais = $pais;
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function getApellido() {
      return $this->apellido;
    }

    public function setApellido($apellido) {
      $this->apellido = $apellido;
    }

    public function getUsername() {
      return $this->username;
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function getPais() {
      return $this->pais;
    }

    public function setPais($pais) {
      $this->pais = $pais;
    }

    public function guardarImagen($mail) {

      if ($_FILES["userPhoto"]["error"] == UPLOAD_ERR_OK)
      {

        $nombre=$_FILES["userPhoto"]["name"];
        $desde=$_FILES["userPhoto"]["tmp_name"];

        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
          return "Error";
        }
        $hasta = "images/avatars/";
        $miArchivo = $hasta . $this->getEmail() . "." . $ext;
        $this->setFoto($miArchivo);

        move_uploaded_file($desde, $miArchivo);

      }
    }
  }
