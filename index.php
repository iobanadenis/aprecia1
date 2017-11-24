<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="view/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="view/css/estilofont.css">
      <script src="vista/js/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="vista/js/code.js"></script>
     <!--<script language="JavaScript">
        javascript:window.history.forward(1); //Esto es para cuando le pulse al botón de Atrás
        javascript:window.history.back(1); //Esto para cuando le pulse al botón de Adelante
      </script>-->
  
</head>

    <nav class="nav-extended">
    <div class="nav-wrapper ea80fc purple darken-3">
      <a  href="index.php" class="brand-logo right"><img  class="responsive-img right" src="view/img/apre.png" width="50" height="550"> Aprecia Financiera</a>      
    </div>
    </nav>
<body>

  <div class="contenedor center-align" >

      <div class="row"> 
<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <br>
        
            <div class="panel-body">
                <form id="form" class="form-signin form-login col s12" role="form" method="post" action="view/validar.php">
                  
                  <div class="center">
            <img src="view/img/aprecia-financiera-logo-morado.png" class="responsive-img" width="250" height="250" align="center">
          </div>
          <h5 >Inicia sesión</h5>

                <div class="row">          
            <div class="input-field ">
                      <i class="material-icons prefix" style="color: #ffc107 ">perm_identity</i>
                        <label for="usuario" class="control-label">Usuario:</label>
                        <input type="email" id="usuario" name="usuario" class="form-control" placeholder="usuario" required autofocus>
                   </div>          
          </div>

                     <div class="row">
                     <div class="input-field col s12">   
                        <i class="material-icons prefix" style="color: #ffc107">vpn_key</i>
                       <label for="pass" class="control-label">Contraseña:</label>
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="contraseña" required>
                       </div>
                       </div>

                    <div class="form-group">
                        <button id="enviar" type="submit" class="btn waves-effect waves-light amber">ingresar
                         <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<div class="container" id="resultado">

</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="view/js/materialize.min.js"></script>
      <script type="text/javascript" src="view/js/navMobile.js"></script>

</body>
</html>