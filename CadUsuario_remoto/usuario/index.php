<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Cadastro de usuário</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="_css/formulario.css">
		<script type="text/javascript">
			function confirmaCad(){
				alert("Cadastro Realizado com sucesso. Confira as informações a seguir");
				}
			}
		</script>
	</head>
	<body>
		<main class="container">
		<h4>Cadastro de Usuário</h4>
		<form method="post" action="cadastrar.php">
			<div>
				<label>Nome</label>
				<input type="text" id="nome" name="nome" placeholder="Nome aqui"required/>
			</div></br>
			<div>
				<label for="">Email</label>
				<input type="email" id="email" name="email" placeholder="usuario@mail.com" required/>
			</div></br>
			<div>
				<label>senha</label>
				<input type="password" id="senha" name="senha" placeholder="senha" required></textarea>
			</div></br>
			<div>
				<label>Opinião/Sugestão</label>
				<textarea type="text" name="opina" placeholder="Deixe sua opinião ou sugestão para melhorarmos as aulas" id="mensagem" rows="5" cols=30></textarea>
			</div>
			<div id="botao">
				<input type="submit" class="btn_enviar" name="cadastrar" value="Cadastrar" onclick="confirmaCad()">
			</div>
		</form>
		</main>
	</body>
</html>
