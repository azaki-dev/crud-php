<html>
<body>
<form method="post" action="incluircliente.php">
<a href="listarcliente.php">Listar Clientes</a>
<a href="index.php">Voltar</a><br/><br/>
<form action="incluircliente.php" method="post">
Nome: <input type="text" name="Nome" maxlength="50"/><br/>
Email: <input type="text" name="Email" maxlength="20"/><br/>
Data do Nascimento: <input type="text" name="data_nascimento" maxlength="20"/><br/>
<input type="submit" name="salvar" value="Salvar" />
</form>
</body>
</html>