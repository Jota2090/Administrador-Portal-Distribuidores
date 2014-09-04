<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header active">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('main/inicio'); ?>">Administrador Portal de Distribuidores</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#">
                        Bienvenido, <?php 
                                        $nombres = explode(" ",$nombre);
                                        $apellidos = explode(" ",$apellido);
                                        echo $nombres[0]." ".$apellidos[0];
                                    ?>
                    </a>
                </li>
                <!--<li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>-->
            </ul>
            <!--<form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>-->
        </div>
    </div>
</div>