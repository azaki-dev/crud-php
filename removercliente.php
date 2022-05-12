<?php
//Conectando ao banco
include ("conexao.php");
//envia via Get o código a ser removido ao Banco de Dados
$codigo = $_GET["codigo"];
//if para ver se foi removido com sucesso a query
if (mysql_query("delete from clientes where codigo='$codigo'"))
{
//exibe a mensagem de Remoção e volta a tela anterior
echo "Removido! <br> <a href='javascript:history.back(-1);'>voltar<a/>";
exit;
//Se não, será exibido um erro
}else{
echo mysql_error();
exit;
}
?>