<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>

<body> 
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SOBRE MI</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">TRABAJOS</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">EXTRAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACTO</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <div class="content">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="">
  </div>
</div>
  <!-- banner -->
</body>  
