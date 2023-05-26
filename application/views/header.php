<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PAPELERIA</title>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
      .fondo{
            background-color:#d3d3d3;
          }
      #barra1{
            background-image: url("<?php echo base_url(); ?>/assets/images/logo3.jpg");
            background-size: 100%;
          }
      #titulo{
            font-weight: bold;
            color:black;
          }
      #cuerpo{
          background-color:#e9967a;
      }
      #subtitulos{
          font-weight: bold;
          color:#FFFFFF;
          font-size:40px;
        }
      #subtitulos2{
          font-weight: bold;
          color:#BA945A;
          font-size:30px;
        }
      #subtitulos3{
          font-weight: bold;
          color:#BA945A;
          font-size:20px;
        }
      #subtitulos4{
          font-weight: bold;
          color:#303240;
          font-size:20px;
        }
    </style>

  </head>
  <body class="fondo">
    <div class="container" id="barra1">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 id="titulo"><img src="<?php echo base_url(); ?>/assets/images/logo1.jpg" height="130px">PAPELERIA"EL BOTITA"</h1>
        </div>
      </div>
    </div>

    </div>
    <div class="container" id="cuerpo" >
      <!-- ingreso el navbar de boostrap -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">INICIO</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo site_url(); ?>/papeleria/productos">PRODUCTOS</a></li>
              <li><a href="<?php echo site_url(); ?>/papeleria/promociones">PROMOCIONES</a></li>
              <li><a href="<?php echo site_url(); ?>/papeleria/nosotros">NOSOTROS</a></li>
              <li><a href="<?php echo site_url(); ?>/papeleria/contactos">CONTACTOS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver mas <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">promociones</a></li>
                  <li><a href="#">productos</a></li>
                  <li><a href="#">contactos</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">nosotros</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
