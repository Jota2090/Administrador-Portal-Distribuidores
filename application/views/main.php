<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo HTTP_IMAGES_PATH; ?>favicon.ico">
    <title>Administrador del Portal de Distribuidores</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo HTTP_CSS_PATH; ?>signin.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo HTTP_JS_PATH; ?>ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo HTTP_JS_PATH; ?>ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo HTTP_JS_PATH; ?>ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.min.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
        <form class="form-signin" role="form">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="<?php echo HTTP_IMAGES_PATH; ?>logo_claro.png" class="col-xs-2">
                    <h4>Administrador Portal de Distribuidores</h4>
                </div>
                <div class="panel-body panel-signin">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuario" required autofocus>
                        <input type="password" class="form-control" placeholder="Contrase&ntilde;a" required>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-block" type="submit">Ingresar</button>
                    </div>
                </div>
            </div>
        </form>
    </div> <!-- /container -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
