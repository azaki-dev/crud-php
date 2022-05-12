<?php
$host="localhost"; //nome do servidor
$username="root"; //Login Usuário Mysql
$password="usbw"; //Senha do usuario Mysql
$db_name="test"; //Nome do Banco de Dados
$tabela="cliente"; //Tabela Clientes
//conexão com o servidor
//$conect = mysql_connect("$host", "$username", "$password");
$conect = mysql_connect($host, $username, $password);
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect)
{
Echo "Falha na conexa com o Banco de Dados!";
exit();
}
// Caso a conexão seja aprovada, então conecta o Banco de Dados.
$db = mysql_select_db("db_name");
if(!@mysql_select_db ($db_name))
{
echo "Erro ao conectar ao Banco de dados"; exit();
}
?>