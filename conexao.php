<?php
ini_set('default_charset', 'utf-8');
$a = 'localhost'; //localhost
$b = 'kqprxoca_gestor'; //root
$c = '@senhaForte'; //usbw
$d = 'kqprxoca_gestor'; //gestor
$conn = new mysqli($a, $b, $c, $d);

if(!$conn){
    alert("Erro ao Conectar!");
}
/*************************CATEGORIA**********************/
function newCategoria($nome){
    $sql = 'INSERT INTO tb_categoria VALUES (null, "'.$nome.'")';
    $resultado = $GLOBALS['conn']->query($sql);
    $retorno = "";
    if($resultado){
        $retorno['msg'] = "Categoria Adicionada";
    }else{
        $retorno['msg'] = "Erro ao adicionar Categoria";
        $retorno['erro'] = false;
    }
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
        ini_set('default_charset', 'utf-8');//ISO-8859-1
        $msg = 'Para finalizar seu cadastro, ative a sua conta: '; //criando var
        $msg.= $validacao; //concatenando var
        if(mail($email, "Gestor-Financeiro[ativar conta]",$msg)){
            alert("Para ativar sua conta, acesse seu email e resgate o codigo");
        }
        else{
            alert("Falha ao enviar o c��digo de ativa�0�4�0�0o");
        }
    }
    else{
        alert("Erro ao Cadastrar, Tente Novamente!");
    }
}
function alert($msg){
    echo '<script>alert("'.$msg.'");</script>';
}
function vai($pagina){
    echo '<script>window.location = "'.$pagina.'";</script>';
}
function validar($token){
    $sql = 'UPDATE tb_usuario SET ds_status = "ATIVADA" WHERE ds_status= "'.$token.'"';
    $resultado = $GLOBALS['conn']->query($sql);
    if($resultado){
        alert("Conta ativada com sucesso!");
        //header('location: index.html');
        //redirecionando pelo js
        vai("index.html");
    }
    else{
        alert("C��digo inv��lido!");
    }
}

/*************************ALUNO**********************/
function newAluno($nome, $email, $turma){
    $sql = 'INSERT INTO tb_aluno VALUES (null, "'.$nome.'", 
    "'.$email.'",
    "'.$turma.'")';
    
    $resultado = $GLOBALS['conn']->query($sql);
    if($resultado){
        alert("Aluno adicionado com sucesso!");
        vai("home.php");
    }
    else{
        alert("Erro ao Cadastrar, Tente Novamente!");
    }
        
}
?>



