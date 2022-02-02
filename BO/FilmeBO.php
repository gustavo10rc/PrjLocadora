<?php
include '../DAO/FilmeDAO.php';

function  salvarBO($descricao, $genero, $classificacao, $lancamento, $ano, $autores, $valor)
{
	$valorFinal = $valor;
	
	if(lancamento=="sim")
	{
		$valorFinal= $valor * 1.20;
	}

	salvarDAO($descricao, $genero, $classificacao, $lancamento, $ano, $autores, $valorFinal); //estou chamando a funcao salvarDAO  no codigo filmeDAO.


	function consultarBO()
	{
		return consultarDAO();
	}
}
?>