<?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 12/01/2023
require_once './core/221120ValidacionFormularios.php'; //Importa libreria de validación
//require_once './model/DB.php';
//require_once './model/UsuarioDB.php';
//require_once './model/Usuario.php';
//require_once './model/UsuarioPDO.php';
//require_once './model/DBPDO.php';
//require_once './model/AppError.php';


$aControladores = [
    'login' => './controller/cLogin.php',
    'inicioPublico' => './controller/cInicioPublico.php',
    'inicioPrivado' => './controller/cInicioPrivado.php'
];

$aControladores = [
    'layout' => './view/Layout.php',
    'inicioPublico' => './view/vInicioPublico.php',
    'inicioPrivado' => './view/vInicioPrivado.php'
];
