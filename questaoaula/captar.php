<?php

$max = $_POST['max'];
$ordem = $_POST['ordem'];
$dimensao = $_POST['dimensao'];
$inicio = $_POST['txt_inicio'];
$fim = $_POST['txt_fim'];
$pesquisar = $_POST['txt_pesquisar'];

for($i = 0; $i < $dim ; i++) {

	$meuArray[$i] = rand ($inicio, $fim);
	echo $meuArray[$i];

}