<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8"/>
		<link rel = "stylesheet" href = "style.css"/>
	</head>
	<body>
		<h2> Pessoa Física  </h2>
		<form  class = "pessoaFisica" method = "POST" action = "PessoaFisicaController.php">
			<input type = "text" placeholder = "Nome" name = "nome" id = "nome" required/><br/>
			<input type = "date" name = "dataNascimento" id = "data" required/><br/>
			<input type = "text" placeholder = "CPF" name = "CPF" id = "CPF" required/><br/>
			<button href = "#" name = "pessoaFisica"  type = "submit">CADASTRE-SE</button>
		</form>
		<br/>
		<h2 class = "pessoaJuridica" > Pessoa Jurídica </h2>
		<form  class = "pessoaJuridica" method = "post" action = "PessoaJuridica.class.php">
			<input type = "text" placeholder = "Nome Fantasia" name = "nome" id = "nome" required/><br/>
			<input type = "text" placeholder = "Inscrição Estadual" name = "inscricao_estadual" id = "inscricaoEstadual" required/><br/>
			<input type = "text" placeholder = "CNPJ" name = "CNPJ" id = "CNPJ" required /><br/>
			<button href = "#" name = "pessoaJuridica"  type = "submit">CADASTRE-SE</button>
		</form>
	</body>
</html>
