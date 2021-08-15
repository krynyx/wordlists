<?php
//gerar telefones claro

$inicio = 91000000;
$fim = 95999999;
$ddd = ""; //coloque o ddd aqui

while ($inicio < $fim) {
        echo $inicio."\r\n";
	if ($ddd != "")
        	echo $ddd.$inicio."\r\n";//com ddd
        $inicio++;
}
