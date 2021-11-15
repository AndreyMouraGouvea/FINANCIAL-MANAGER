<?php
ini_set('default_charset', 'utf-8');
include("conexao.php");


if($_POST){
    newUser($_POST['nome'], $_POST['email'], $_POST['senha']);    

}
if(isset($_GET['ativar'])){
    validar($_GET['ativar']);
}
else{
    ?>
 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/validacao.css">

<body>
<div class="center">
    <h1>Validação</h1>
    <form>
        <div class="txt_field">
            <input type="text" required name="ativar">
            <span></span>
            <label for="ativar">Digite o código de validação:</label>
        </div>
        <input type="submit" value="Validar">
    </form>
</div>
    
    <?php
}
?>


