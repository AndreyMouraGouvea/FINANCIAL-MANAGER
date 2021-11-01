<?php
ini_set('default_charset', 'utf-8');
include("conexao.php");

if($_POST){
    newUser($_POST['nome'], $_POST['email'], $_POST['senha']);    

}
if(isset($_GET['ativar'])){
    //função que 'ativa a conta'
    validar($_GET['ativar']);
}
else{
    ?>
    <meta charset="utf-8">
    <form>
        Digite o código de validação:
        <input type="text" name="ativar">
        <button>Validar</button>
    </form>
    <?php
}
?>


