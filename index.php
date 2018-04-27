<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel de controle</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-info">
	<div class="container">
	      <a class="navbar-brand" href="#">Sua Marca</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="#">Cadastrar Equipe <span class="sr-only">(current)</span></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Editar sobre</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Gerenciar equipe</a>
	          </li>
	        </ul>
	        <ul class="navbar-nav">
	        	<li>
	        		<a href="?sair" class="nav-link">Sair<i class="pl-2 fas fa-power-off fa-sm"></i></a>
	        	</li>
	        </ul>
	      </div>
      </div>
    </nav>

    <header id="header">
    	<div class="container">
    		<div class="row py-3">
    			<div class="col-md-6">
    				<h3 class="text-left h3"><i class="fas fa-cogs fa-sm"></i> Painel de Controle</h3>
    			</div>
    			<div class="col-md-6">
    				<p class="text-right"><i class="fas fa-clock fa-sm pr-1"></i> Seu último login foi em: 12/06/2019</p>
    			</div>
    		</div>
    	</div>
    </header>	
	
	<script src="js/jquery.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>