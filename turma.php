<?php
ini_set('default_charset', 'utf-8');
include("conexao.php");


if($_POST){
    newAluno($_POST['nome'], $_POST['email'], $_POST['turma']);
    
}
?>
    
    

