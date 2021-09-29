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
    <a class="navbar-brand fuente" href="#"> <i class="fas fa-paw"></i>
	Animalandia
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<li class="nav-item">
          		<a class="nav-link active" aria-current="page" href="#">Home</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="#">Link</a>
        	</li>
      </ul>
     
    </div>
  </div>
</nav>
</header>


<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="foto">
					</div>
					<div class="carousel-item">
					<img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="foto">
					</div>
					<div class="carousel-item">
					<img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="foto">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
				</div>

			</div>
		</div>
	</div>
</section>

<section class= "text">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class= "fuente">
					Hogar de animales ANIMALANDIA
				</h2>
				<p class="fuente2">
					Casa hogar Animalandia, atiende desde 1996 animales y fauna silvestre en estado de abandono, ofreciendo atencion integral, ademas somos fabricantes de comida y accesorios para todo tipo de mascotas				
				</p>
				
			</div>
			<div class="row d-flex justify-content-center mt-5 mx-5">
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/dog-icon.png')?>" alt="iconoperro" class="img-fluid zoom w-100">
					</a>
            		<p class="text">perros</p>
          		</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/cat-icon.png')?>" alt="iconogato" class="img-fluid zoom w-100">
					</a>
					<p class="text-center">gatos</p>
				</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/bird-icon.png')?>" alt="iconoave" class="img-fluid zoom w-100">
					</a>
					<p class="text-center">Aves</p>
				</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/reptile-icon.png')?>" alt="iconoreptiles" class="img-fluid zoom w-100">
					</a>
					<p class="text-center">reptiles</p>
				</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/horse-icon.png')?>" alt="iconocaballos" class="img-fluid zoom w-100">
					</a>
					<p class="text-center">caballos</p>
				</div>
			</div>
		</div>

	</div>
</section>
	

<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>