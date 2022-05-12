<?php
//Conectando
include("conexao.php");
//Fazendo uma busca no Banco de Dados
$sql = mysql_query("SELECT codigo, nome, email, data_nascimento FROM clientes");
echo "--------->Codigo | Nome | E-mail | Data do Nascimento <br>";
//Retorna uma matriz associativa dos dados
while($exibe = mysql_fetch_assoc($sql)){
echo"<a href='editarclienteform.php?&codigo=".$exibe['codigo']."'>Editar</a>";
echo $exibe["codigo"]." | ";
echo $exibe["nome"]." | ";
echo $exibe["email"]." | ";
echo $exibe["data_nascimento"]." | ";
//Passa por parâmetro a linha a ser removida
echo "<a href='removercliente.php?&codigo=".$exibe['codigo']."'>Remover</a> <br>";
}
?>