<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cell = filter_input(INPUT_POST, 'cellphone');
$city = filter_input(INPUT_POST, 'city');

if($id && $name && $email && $cell && $city) {
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);
    $usuario->setCellphone($cell);
    $usuario->setCity($city);

    $usuarioDao->update( $usuario );

    header("Location: index.php");
    exit;
    
} else {
    header("Location: editar.php?id=".$id);
    exit;
}