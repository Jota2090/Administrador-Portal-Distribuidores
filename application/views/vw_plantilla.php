<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Administrador del Portal de Distribuidores</title>
        <?php $this->load->view($scripts); ?>
    </head>
   
    <body>
        <div id="header">
            <?php 
                if(!empty($header))
                {
                    $this->load->view($header, $header_data);
                }
            ?>
        </div>
        <div id="main">
            <?php 
                if(!isset($interna))
                {
            ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-md-2 sidebar">
                            <?php
                                $this->load->view($izquierda, $izquierda_data);
                            ?>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                            <?php
                                $this->load->view($derecha, $derecha_data); 
                            ?>
                        </div>
                    </div>
                </div>
            <?php
                }
                else
                {
                    $this->load->view($interna, $interna_data);
                }
            ?>
        </div>
        <div id="footer">&nbsp;</div>
    </body>

</html>
