<?php
//Conectando ao banco
include ("conexao.php");
//traz as variáveis do formulário
//$codcliente = $_POST["codcliente"];
$Nome = $_POST["Nome"];
$Email = $_POST["Email"];
$data_nascimento = $_POST["data_nascimento"];
//if para ver se foi executado com sucesso a query
if (mysql_query("insert into clientes (Nome, Email, data_nascimento) values ('$Nome','$Email','$data_nascimento')"))
{
//exibe a mensagem de Cadastrado e a de voltar a tela anterior
echo "Cadastrado! <br> <a href='javascript:history.back(-1);'>voltar<a/>";
exit;
//Se não, é exibido um erro
}else{
echo mysql_error();
exit;
}
?>