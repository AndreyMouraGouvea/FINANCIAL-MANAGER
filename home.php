<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>GestorFinanceiro</title>
  <link rel="shortcut icon" href="img/logo.jpg">
  <script src="js/jquery-3.6.0.slim.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>
  <h2>Gestor Financeiro</h2>

  <div class="container">
    <h4>Saldo atual <span>Referência</span></h4>

    <h1 id="balance" class="balance">R$ 0.00</h1>
    <select id="mes">
    		<option value="1">Janeiro</option>
    		<option value="2">Fevereiro</option>
    		<option value="3">Março</option>
    		<option value="4">Abril</option>
    		<option value="5">Maio</option>
    		<option value="6">Junho</option>
    		<option value="7">Julho</option>
    		<option value="8">Agosto</option>
    		<option value="9">Setembro</option>
    		<option value="10">Outubro</option>
    		<option value="11">Novembro</option>
    		<option value="12">Dezembro</option>
    	</select>
    <div class="inc-exp-container">
      <div>
        <h4>Receitas</h4>
        <p id="receitas" class="money plus">+ R$0.00</p>
      </div>

      <div>
        <h4>Despesas</h4>
        <p id="despesas" class="money minus">- R$0.00</p>
      </div>
    </div>

     <button class="btn  btn-modal">Novo Registro</button>

    <h3>Registros:</h3>

    <ul id="contas" class="transactions"></ul>

    <div class="modal hide" id="modal">
    <button class="btn-three btn-close btn-modal">x</button>
    <form id="addRegistro" style="margin-top: 30px;">
   	<h3>Adicionar registro</h3>

      <div class="form-control">
        <label for="nome">Nome</label>
        <input autofocus type="text" id="nome" name="nome" placeholder="Nome da transação" />
      </div>

      <div class="form-control left">
        <label for="categoria">Categoria</label><br>
        <select id="categoria" name="categoria">
        	
        </select>
      </div>

      <div class="form-control right">
        <label for=""></label><br>
        <button class="btn" id="addCategoria">+ Categoria</button>
      </div>

      <div class="form-control">
        <label for="valor">Valor <br />
          <small>(- Despesas, + Receitas)</small>
        </label>
        <input type="number" id="valor" name="valor" placeholder="Valor da transação" step="0.01"/>
      </div>

      <button class="btn" id="adicionar">Adicionar</button>
    </form>
    </div>
  </div>
</body>

</html>