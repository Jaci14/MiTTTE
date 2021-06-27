<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inicio de sesion MiTTE</title>
  <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">    
  <script src="<?php echo constant('URL');?>bootstrapd/js/bootstrap.min.js"></script>  
  <script src="<?php echo constant('URL');?>js/validar.js"></script>   
  <style>
    .bg{
      background-image: url(<?php echo constant('URL');?>Fondo.jpeg);
      background-position: center center;
    }
  </style>
</head>

<body> 
  <?php require 'views/header.php';?>
  <br>
  <h1 class="text-muted"  style="text-align: center;">BIENVENIDO A MITTE</h1>
  <div class="container w-75 bg-secondary mt-5 rounded shadow">   
    <div class="row">
    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
      <div class="col bg-white p-5 rounded-end">      
      <form id="form" action="<?php echo constant('URL'); ?>login/authenticate" enctype="multipart/form-data" method="POST">
        <div class="mb-4">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="correo">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" id="pass"> 
          
          <div class="alert alert-danger align-items-start alert-dismissible d-none &nbsp&<?php echo $this->alerta;?> fade show" role="alert">
  <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg-->    
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>  
    <?php echo $this->mensaje;?><tab><tab><tab> &nbsp <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>    
       </div>
        </div>     
        <div class="d-grid">
          <button type=submit onclick=" if(valida()==true){return true}else {return false}" class="btn btn-danger">Iniciar Sesion</button>
        </div>
        <div class="my-3">
        <span>No tienes cuenta? <a href="<?php echo constant('URL');?>signup">Registrate</a></span><br>
        <span><a href="#">Recuperar contraseña</a></span><br>
        </div>
      </form>
      </div>
      </div>
      </div>          
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/popper.min.js"></script>
      <br>      
      <?php require 'views/footer.php'; ?>   
</body>
</html>