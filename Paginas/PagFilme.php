<!DOCTYPE html>
<html lang="pt-br">
<!--fazer java script para funcionar o carrouse -->
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title >Locadora</title>
	<meta charset="UTF-8">

<script type="module">
  import { Toast } from 'bootstrap.esm.min.js'

  Array.from(document.querySelectorAll('.toast'))
    .forEach(toastNode => new Toast(toastNode))
</script>

</head>
<body>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/imagem1.jpeg" class="d-block w-100" alt="Primeira Imagem">
    </div>
    <div class="carousel-item">
      <img src="image/img2.png" class="d-block w-100" alt="Segunda Imagem">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
<br>
<div class="row">
	<div class="card" style="width: 18rem;">
	  <img src="image/search.png" class="card-img-top" alt="..." style="width: 30%;">
	  <div class="card-body">
	    <h5 class="card-title">Encontre um filme</h5>
	    <p class="card-text">Clique aqui para encontrar algum filme e vericar seu status.</p>
	    <a href="#" class="btn btn-primary">Procurar filme</a>
	  </div>
	</div>

	<div class="card" style="width: 18rem;">
	  <img src="image/cadastro.png" class="card-img-top" alt="..." style="width: 30%;">
	  <div class="card-body">
	    <h5 class="card-title">Cadastrar um filme</h5>
	    <p class="card-text">Faça um novo cadastro de filme na plataforma</p>
	    <a href="#" class="btn btn-primary">Inserir um filme</a>
	  </div>
	</div>

	<div class="card" style="width: 18rem;">
	  <img src="image/atualizar.png" class="card-img-top" alt="..." style="width: 30%;">
	  <div class="card-body">
	    <h5 class="card-title">Atualizar um filme</h5>
	    <p class="card-text">Clique aqui para fazer uma alteração de dados</p>
	    <a href="#" class="btn btn-primary">Atualizar um filme</a>
	  </div>
	</div>

	<div class="card" style="width: 18rem;">
	  <img src="image/deletar.png" class="card-img-top" alt="..." style="width: 30%;">
	  <div class="card-body">
	    <h5 class="card-title">Deletar um filme</h5>
	    <p class="card-text">Essa opção irá deletar o filme escolhido da plataforma.</p>
	    <a href="#" class="btn btn-primary">Deletar</a>
	  </div>
	</div>

	<div class="card" style="width: 18rem;">
	  <img src="image/suporte.png" class="card-img-top" alt="..." style="width: 30%;">
	  <div class="card-body">
	    <h5 class="card-title">Contato</h5>
	    <p class="card-text">Entre em contato com o nosso suporte</p>
	    <a href="#" class="btn btn-primary">Acionar suporte</a>
	  </div>
	</div>

</div>
	<form action="../Forms/FormFilme.php" method="post">

	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">	Nome</label>
	  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Exemplo: Star Wars">
	</div>

	<div class="mb-3">
	  <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
	  <textarea class="form-control" id="exampleFormControlTextarea1" name="txtDescricao" rows="3"></textarea>
	</div>

	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">Genero</label>
	  <input type="text" class="form-control" name="txtGenero" id="exampleFormControlInput1" placeholder="Exemplo: comédia">
	</div>

	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">Classificação</label>
	  <input type="text" class="form-control" name="txtClassificacao" id="exampleFormControlInput1" placeholder="Exemplo: +18">
	</div>

	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">Ano</label>
	  <input type="number" class="form-control" name="txtAno" id="exampleFormControlInput1" placeholder="Exemplo: 1998">
	</div>

	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">Autores</label>
	  <input type="number" class="form-control" name="txtAutores" id="exampleFormControlInput1" placeholder="Exemplo: George Lucas">
	</div> 

	<p>Status de Locação</p>

	<div class="form-check">
	 	<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	  	<label class="form-check-label" for="flexRadioDefault1">
	    Alocado
	  	</label>
	</div>
	
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
	  <label class="form-check-label" for="flexRadioDefault2">
	    Disponivél para locação
	  </label>
	</div>
		
		<input type="submit" class="btn btn-success" value="Enviar" name="acao"/>

		<br>
		<hr1>-------------------consultar-----------------------------</hr1>
		<br>
		consulta por código:
		<br>
		<input type="text" name="txtConsulta"/>
		<br><br>
		<input type="submit" value="Consultar" name="acao"/>

	</form>
</body>
</html>