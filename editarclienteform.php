<html>
<body>
<?php
include("conexao.php");
$codigo = $_GET["codigo"];
$sql = mysql_query("select * from clientes where codigo='$codigo'");
$exibe = mysql_fetch_assoc($sql);
?>
<form method="post" action="editarcliente.php">
<a href="listarcliente.php">Listar Clientes</a>
<input name="codigo" type="hidden" value="<?php echo $exibe["codigo"]; ?>"/>
<a href="index.php">Voltar</a><br/><br/>
<form action="incluircliente.php" method="post">
Nome: <input type="text" name="Nome" maxlength="50" value="<?php echo $exibe["nome"]; ?>"/>
Email: <input type="text" name="Email" maxlength="20" value="<?php echo $exibe["email"]; ?>"/>
Data do Nascimento: <input type="text" name="data_nascimento" maxlength="20" value="<?php echo $exibe["email"]; ?>"/>
<input type="submit" name="Salvar" value="Salvar" />
</form>
</body>
</html>