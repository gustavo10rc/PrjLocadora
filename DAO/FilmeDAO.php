<?PHP
include'../Util/Conexao.php';
$conn = conectar();
function salvarDAO ($descricao, $genero, $classificacao, $lancamento, $ano, $autores, $valor)
{
	global $conn;

	try
	{
		$query = "INSERT INTO filme(descricao,genero,classificacao,lancamento, ano, autores, valor) values('$descricao','$genero','$classificacao','$lancamento', $ano, '$autores', $valor)";

		$conn ->query($query);
	}
	catch(Exception $e)
	{
		echo "erro: ".$e; 
	}
}

function consultarDAO()
{
global $conn;

	try {
			return $conn->query("SELECT *FROM filme");
		} 

	catch (Exception $e)
		{
		echo "erro: ".$e;	
		}	
}

?>