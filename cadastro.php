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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
*{
    margin: 0;
    font-family: 'Roboto', sans-serif;
}
.esquerda{
    display: grid;
    place-items: center;
    width: 100vw;
    height: 100vh;
    background-color: navy;
    color: white;
    
}
div:hover{
    background-color: black;
    transition-delay: 2s smooth;
}
.esquerda form{
    width: 30vw;

}
#registro label{
    display: block;
    align-items: justify;
    margin-top: 10px;
}
input{
    width: 80%;
    margin-left: 10%;
    margin-top: 15px;
    padding: 5px;
}
button{
    width: 80%;
    margin-left: 10%;
    padding: 10px;
    text-align: center;
    border: 1px solid white;
    border-radius: 5px;
    margin-top: 15px;
}
button:hover{
    border: 1px solid blue;
    cursor: pointer;
}

</style>
    
<meta charset="utf-8">
<div class="esquerda">
    <form>
    <label for="ativar">Digite o código de validação:</label>
    <input type="text" name="ativar">
    <button>Validar</button>
    </form> 
</div>
    
    <?php
}
?>


