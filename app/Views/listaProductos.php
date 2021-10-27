<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ANIMALANDIA</title>
	<link rel="stylesheet" href="<?php echo(base_url('public/styles/estilos.css')) ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark fondo">
  <div class="container-fluid">
    <a class="navbar-brand fuente" href="<?= site_url('/')?>"> <i class="fas fa-paw"></i>
	Animalandia
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
	aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<li class="nav-item">
          		<a class="nav-link active" aria-current="page" href="<?= site_url('/')?>">Inicio</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="<?= site_url('/productos/registro')?>">Registro Productos</a>
        	</li>
			<li class="nav-item">
          		<a class="nav-link" href="<?= site_url('/Animales/registro')?>">Registro Animales</a>
        	</li>
      </ul>
     
    </div>
  </div>
</nav>
</header>

<main>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-5 g-4">
            <?php foreach($productos as $producto): ?>
                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="<?= $producto["fotografia"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $producto["producto"]?></h5>
                            <p class="card-text"> <?= $producto["precio"]?></p>
                            <p class="card-text"> <?= $producto["descripcion"]?></p>
                            <a data-bs-toggle="modal" data-bs-target="#confirmacion<?=$producto["id"] ?>" href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            <a href="#" class="btn btn-success"><i class="fas fa-pen-square"></i></a>
                        </div>
                    </div>
                    <section>
                        
                        <div class="modal fade" id="confirmacion<?=$producto["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo fuente text-white">
                                        <h5 class="modal-title" id="exampleModalLabel">CASA HOGAR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Estas seguro de elimiar este producto?</p>
                                        <?= $producto["id"] ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="<?=site_url('/productos/eliminar/'.$producto["id"]) ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            <?php endforeach?>
        </div>

    </div>


</main>

<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>