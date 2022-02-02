<?php
include'../BO/FilmeBO.php';

if($_POST['acao']=="cadastrar")
{
	if(isset($_POST['txtDecricao'])
		&& isset($_POST['txtGenero'])
		&& isset($_POST['txtClassificacao'])
		&& isset($_POST['txtLancamento'])
		&& isset($_POST['txtAno'])
		&& isset($_POST['txtAutores'])
		&& isset($_POST['txtValor']))//isset verifica se o campo esta preenchido
		{

		$descricao = $_POST['txtDecricao'];
		$genero = $_POST['txtGenero'];
		$classificacao = $_POST ['txtClassificacao'];
		$Lancamento=$_POST['txtLancamento'];
		$ano= $_POST['txtAno'];
		$autores= $_POST['txtAutores'];
		$valor= $_POST['txtValor'];	

		salvarBO($descricao, $genero, $classificacao, $lancamento, $ano, $autores, $valor);

		include '../Paginas/PagFilme.php';
		}
		else
		{
				echo "Os campos devem ser preenchidos";
		}	
}
else
{
	if(isset($_POST['txtconsulta']))
	{
		$result= consultarBO();
		if($result)
		{
			while($row = $result -> fetch(PDO::fetch_obj))
			{
				echo $row->descricao.'-'. $row ->ano;

			}
		}
	}
}

?>