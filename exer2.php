<!DOCTYPE html>
<html>
<body bgcolor="#87CEFA">
	<CENTER> <font face="arial" size="6" >
<?php
function  soma()
{
     $n1  = 36;
     $n2 = -15;
     $resp = $n1 + $n2;	
     echo " Resultado da soma de $n1 e $n2 = $resp";
}
function  subtrai()
{
     $n1  = 36;
     $n2 = -15;
     $resp = $n1 - $n2;  
     echo " Resultado da subtrai de $n1 e $n2 = $resp";
}
function  multiplica()
{
     $n1  = 36;
     $n2 = -15;
     $resp = $n1 * $n2;  
     echo " Resultado da multiplca de $n1 e $n2 = $resp";
}
function  divisao()
{
     $n1  = 36;
     $n2 = -15;
     $resp = $n1 / $n2;  
     echo " Resultado da divisao de $n1 e $n2 = $resp";
}
$opcao = 4;
if ($opcao == 1){
     soma();
}
elseif ($opcao == 2){
     subtrai();
}
elseif ($opcao == 3){
     multiplica();
}
elseif ($opcao == 4){
     divisao();
}
?>


</body>
</html>