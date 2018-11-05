<?php

require_once("Models/DataBase.php");
require_once("Models/Autenticador.php");
require_once("Models/ValidadorForm.php");


$db = new DataBase();
$auth = new Autenticador();
$validator = new ValidadorForm();
