<div class="container">
    <form class="form-signin" role="form" method="post" action="<?php echo base_url('main/login'); ?>">
        <?php 
            if(isset($error))
            {
                error('Error', $error);
            }
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="<?php echo HTTP_IMAGES_PATH; ?>logo_claro.png" class="col-xs-2">
                <h4>Administrador Portal de Distribuidores</h4>
            </div>
            <div class="panel-body panel-signin">
                <div class="form-group">
                    <input id="usuario" name ="usuario" type="text" class="form-control" placeholder="Usuario" required autofocus value="<?php echo set_value('usuario'); ?>">
                    <input id="contrasena" name ="contrasena" type="password" class="form-control" placeholder="Contrase&ntilde;a" required>
                </div>
                <div>
                    <button class="btn btn-danger btn-block" type="submit">Ingresar</button>
                </div>
            </div>
        </div>
    </form>
</div>