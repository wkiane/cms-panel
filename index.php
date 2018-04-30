<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=projeto_bootstrap', 'root', '80519923',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
	$sobre->execute();
	$sobre = $sobre->fetch()['sobre'];
 ?>
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
	        <ul class="navbar-nav mr-auto" id="menu-principal">
	          <li class="nav-item active">
	            <a ref-sys="sobre" class="nav-link scroll" href="#sobre">Editar Sobre <span class="sr-only"></span></a>
	          </li>
	          <li  class="nav-item">
	            <a ref-sys="cadastrar_equipe" class="nav-link scroll" href="#cadastrar">Cadastrar Equipe</a>
	          </li>
	          <li class="nav-item">
	            <a ref-sys="lista_equipe" class="nav-link scroll" href="#lista_equipe">Lista da Equipe</a>
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

    <header id="header" class="mb-3">
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

   <section class="bread">
   		<div class="container">
   			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			  </ol>
			</nav>
   		</div>
   </section>

   <section class="principal">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-3 mb-4">
   					<ul class="list-group" id="menu-lateral">
					  <li class="list-group-item btn btn-light bg-info"><a ref-sys="sobre" href="#sobre" class="nav-link p-0 scroll text-dark">Sobre</a></li>
					  <li class="list-group-item btn btn-light"><a ref-sys="cadastrar_equipe" href="#cadastrar" class="nav-link p-0 scroll text-dark">Cadastrar Equipe</a></li>
					  <li class="list-group-item btn btn-light"><a ref-sys="lista_equipe" href="#lista_equipe" class="nav-link p-0 scroll text-dark">Lista da Equipe</a></li>
					</ul>
   				</div>

   				<div class="col-md-9">
   					<?php 
   						if(isset($_POST['editar_sobre'])) {
   							$sobre = $_POST['sobre'];
   							$pdo->exec("DELETE FROM `tb_sobre`");
   							$sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES (null,?)");
   							$sql->execute(array($sobre));
   							echo '<div class="alert alert-success" role="alert">Código atualizado!</div>';
   							$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
							$sobre->execute();
							$sobre = $sobre->fetch()['sobre'];
   						} elseif(isset($_POST['cadastrar_equipe'])) {
   							$nome = $_POST['nome_membro'];
   							$cargo = $_POST['cargo_membro'];
   							$descricao = $_POST['desc_membro'];
   							$sql = $pdo->prepare("INSERT INTO `tb_equipe` VALUES (null,?,?,?)");
   							$sql->execute(array($nome, $descricao, $cargo));
   							echo '<div class="alert alert-success" role="alert">Membro cadastrado com sucesso!</div>';
   						}
   					 ?>
   					<div class="card mb-4" id="sobre">
   						<div class="card-header bg-info text-light">Sobre:</div>
   						<div class="card-body">
   							<form method="post">
							  <div class="form-group">
							    <label>Código HTML:</label>
							    <textarea name="sobre" style="height: 100px;" class="form-control"><?php echo $sobre; ?></textarea>
							  </div>
							  <input type="hidden" name="editar_sobre">
							  <button type="submit" name="acao" class="btn btn-default">Atualizar</button>
							</form>
   						</div>
   					</div> <!-- sobre -->

   					<div class="card mb-4" id="cadastrar">
   						<div class="card-header bg-info text-light">Cadastrar Equipe:</div>
   						<div class="card-body">
   							<form method="POST">
							  <div class="form-group">
							  	<label>Nome do membro:</label>
							    <input class="form-control" type="text" name="nome_membro">
							  </div>

							  <div class="form-group">
							  	<label>Cargo do membro:</label>
							    <input class="form-control" type="text" name="cargo_membro">
							  </div>

							  <div class="form-group">
							  	<label>Descrição do membro:</label>
								<textarea name="desc_membro" style="height: 100px;" class="form-control"></textarea>
							  </div>
							  <input type="hidden" name="cadastrar_equipe">
							  <button type="submit" class="btn btn-default">Atualizar</button>
							</form>
   						</div>
   					</div>  <!-- cadastrar equipe -->

					<div class="card mb-4" id="lista_equipe">
   						<div class="card-header bg-info text-light">Membros da equipe:</div>
   						<div class="card-body">
								<table class="table">
								  <thead>
								    <tr>
								    	<th scope="col">ID:</th>
								    	<th>Cargo:</th>
								    	<th scope="col">Nome do membro:</th>
										<th><i class="fas fa-trash-alt pl-4"></i></th>
								    </tr>
								  </thead>
								  <tbody>
								  		<?php 	
								  			$selecionarMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
								  			$selecionarMembros->execute();
								  			$membros = $selecionarMembros->fetchAll();
								  			foreach ($membros as $key => $value) {			 
								  		?>
									    <tr>
									    	<th scope="row"><?php echo $value['id'];?></th>
									   		<td><?php echo $value['nome'];?></td>
									   		<td><?php echo $value['profissao']?></td>
											<td><button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> Excluir</button></td>
									    </tr>
									    <?php 	
									    }
									    ?>
								  </tbody>
								</table>
   						</div>
   					</div>  <!-- membros da equipe -->
   				</div>
   			</div>
   		</div>
   </section>
   
	<script src="js/jquery.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
