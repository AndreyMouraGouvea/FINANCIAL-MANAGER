<?php
$a = 'localhost'; //localhost
$b = 'kqprxoca_gestor'; //root
$c = '@senhaForte'; //usbw
$d = 'kqprxoca_gestor'; //gestor
$conn = new mysqli($a, $b, $c, $d);
if(!$conn){
    alert("Erro ao Conectar!");
}
function newUser($nome, $email, $senha){
    $validacao = md5($nome.date('d'));
    $sql = 'INSERT INTO tb_usuario VALUES (null, "'.$nome.'",
    "'.$email.'",
    "'.$senha.'",
    "img/semfoto.png",
    "'.$validacao.'")';
    
    $resultado = $GLOBALS['conn']->query($sql);
    if($resultado){
        $msg = 'Para finalizar seu cadastro, ative a sua conta: '; //criando var
        $msg.= $validacao; //concatenando var
        if(mail($email, "Gestor-Financeiro[ativar conta]",$msg)){
            alert("Para ativar sua conta, acesse seu email e resgate o código");
        }
        else{
            alert("Falha ao enviar o código de ativação");
        }
    }
    else{
        alert("Erro ao Cadastrar, Tente Novamente!");
    }
}
function alert($msg){
    echo '<script>alert("'.$msg.'");</script>';
}

?>



