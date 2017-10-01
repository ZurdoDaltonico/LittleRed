<?php
defined('BASEPATH') OR exit('No direct script access allowed');
http://localhost/index.php/js/jquery.min.js
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://localhost/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/js/bootstrap.min.js"></script>
    <link href="http://localhost/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/css/styleE.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Little Red</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="http://localhost:80/index.php">Home</a>
            </li><li class="active">
              <a href="#">Evento</a>
            </li>
            <li>
              <a href="http://localhost:80/index.php/login/clogin">Ingresar</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sectionDatos">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Ingrese sus datos</h1>
            <form action="http://localhost:80/pagina/index.php/cevento/guardar" method="POST" class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">Nombre</label>
                </div>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputNombre" name="inputNombre1" placeholder="Ingreses su nombre">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Apellido</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="inputPassword1" placeholder="Ingrese su apellido">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Teléfono</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputTelefono" name="inputTelefono1" placeholder="Ingrese su teléfono">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Dirección</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputDireccion" name="inputDireccion1" placeholder="Ingrese su dirección">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Correo electrónico</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputEmail" name="inputEmail1" placeholder="Ingrese su correo electronico">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="sectionEvento">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Seleccione los detalles del evento</h1>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">Tipo de evento</label>
                </div>
                <select class="input-sm">
                  <option value="volvo">Cumleaños</option>
                  <option value="saab">Casamiento</option>
                  <option value="mercedes">TU CARA</option>
                  <option value="audi">seeeeee</option>
                </select>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">Fecha</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Ingrese la fecha del evento">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Eleccion</th>
                  <th>Cantidad</th>
                  <th>Precio del Producto</th>
                  <th>Producto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input type="checkbox" name="vehicle" value="Bike">
                  </td>
                  <td>
                    <input type="text" name="vehicle" value="">
                  </td>
                  <td>Mark</td><td>Mark</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="vehicle" value="Bike">
                  </td>
                  <td>
                    <input type="text" name="vehicle" value="">
                  </td>
                  <td>Jacob</td><td>Jacob</td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="vehicle" value="Bike">
                  </td>
                  <td>
                    <input type="text" name="vehicle" value="">
                  </td>
                  <td>Larry</td><td>Larry</td>
                </tr>
              </tbody>
            </table>
            <form class="form-horizontal" role="form"><div class="form-group has-feedback"><div class="col-sm-2"><label for="inputEmail3" class="control-label">Precio Final<br></label></div><div class="col-sm-10"><input type="email" class="form-control" id="inputEmail3" placeholder="Precio Final" disabled="disabled"></div></div></form><a class="btn btn-block btn-danger btn-lg">Reservar Evento</a>
          </div>
        </div>
      </div>
    </div><footer class="section section-danger">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Little Red</h1>
            <p>Primera empresa multi nacional de Argentina, futura dominadora del universo,
              bendecida por los dioses del olimpo, protegida por nuestros hermanos y
              camaradas yihadistas y stalinistas, con maestria 7 con Bardo.&nbsp;
              <br>
              <br>"¿Ves ese rayo de esperanza? Soy yo"</p>
          </div>
          <div class="col-sm-6">
            <p class="text-center">
              <br>© All rights reserved</p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-center">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>