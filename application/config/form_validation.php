<?php
    $config = array(
        'main/login'=>array(
            array('field'=>'usuario', 'label'=>"Usuario", 'rules'=>'required|trim|xss_clean'),
            array('field'=>'contrasena', 'label'=>"Contrase&ntilde;a", 'rules'=>'required|trim|xss_clean')
        )
    );
?>