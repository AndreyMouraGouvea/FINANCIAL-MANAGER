<?php
ini_set('default_charset', 'utf-8');
$a = 'localhost'; //localhost
$b = 'kqprxoca_gestor'; //root
$c = '@senhaForte'; //usbw
$d = 'kqprxoca_gestor'; //gestor
$conn = new mysqli($a, $b, $c, $d);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Escola</title>
    <link rel="shortcut icon" href="img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="css/turma.css">
</head>
<body>
<div class="center">
    <h1>Cadastro Turma</h1>
    <form id="escola" action="" method="POST">
        <div class="txt_field">
            <input type="text" required name="nome">
            <span></span>
            <label>Nome</label>
        </div>
        <div class="txt_field">
            <input type="email" required name="email">
            <span></span>
            <label>E-mail</label>
        </div>
        <div class="txt_field">
            <!--<input type="password" required name="senha">-->
            <!--<span></span>-->
            <!--<label>Senha</label>-->
            <select class="txt_field">
                <option>Turma</option>
            <?php
            $sql = "SELECT * FROM tb_turma";
            // $res = $conn->query($sql);
            $res = $GLOBALS['conn']->query($sql);
            while($user = $res->fetch_array()){
                echo '<option value="'.$user['cd_aluno'].'">'.$user['nome'].'</option>';
            }
            ?>
            </select>
        </div>
        <input type="submit" value="Cadastre-se">
    </form>
    <?php
        if($_POST){
            
        }
    ?>
</div>
</body>
</html>