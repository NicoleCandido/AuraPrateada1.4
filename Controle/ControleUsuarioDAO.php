<?php
require_once '../Modelo/ClassLogin.php';
require_once '../Modelo/DAO/ClassUsuarioDAO.php';

$id =@$_POST['idex'];
$nome = @$_POST['email'];
$email = @$_POST['senha'];
$acao = $_GET['ACAO'];


$novoUsuario = new ClassLogin();
$novoUsuario->setEmail($email);
$novoUsuario->setSenha($senha);


$classUsuarioDAO = new ClassUsuarioDAO();
switch ($acao) {
    case "cadastrarUsuario":
        $usuario = $classUsuarioDAO->cadastrar($novoUsuario);
        if($usuario >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;
        
 }
 ?>



