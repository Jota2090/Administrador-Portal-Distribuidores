<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class main extends CI_Controller
    {
        var $_data = array(
                            "scripts" => "vw_scripts_css_interna",
                            "header" => "vw_header",
                            "izquierda" => "contenido/izquierda/vw_izquierda",
                            "derecha" => "contenido/derecha/vw_derecha",
                            "izquierda_data" => "",
                            "derecha_data" => ""
                        );
        
        function __construct()
        {
            parent::__construct();
            
            if($this->uri->segment(2) != "" && $this->uri->segment(2) != "index" && $this->uri->segment(2) != "login")
            {
                if(!$this->clslogin->check())
                {
                    echo "<script>"
                            ."alert('Hubo mucho tiempo de inactividad, por favor vuelva a loguearse.');"
                            ."window.location.href='../main';"
                        ."</script>";
                }
            }
            
            if(!$this->clslogin->check())
            {
                $this->_data['scripts'] = 'vw_scripts_css_inicio';
                $this->_data['header'] = '';
                $this->_data['header_data']['form_login'] = '';
                
                $this->_data['interna'] = 'contenido/vw_main';
                $this->_data['interna_data'] = '';
            }
            else
            {
                $this->_data['header_data']['auth'] = $this->clslogin->check();
                $this->_data['header_data']['nombre'] = $this->clslogin->getNombre();
                $this->_data['header_data']['apellido'] = $this->clslogin->getApellido();
            }
        }

        
        public function index()
        {
            $this->load->view('vw_plantilla', $this->_data);
        }
        
        
        public function login()
        {
            if ($this->form_validation->run() == FALSE)
            {
                if(!empty($_POST))
                {
                    $this->_data['interna_data']['error'] = validation_errors();
                }
                
                $this->load->view('vw_plantilla', $this->_data);
            }
            else
            {
                if($this->clslogin->login($this->input->post("usuario"), $this->input->post("contrasena")) 
                    && $this->clslogin->check())
                {
                    redirect('main/inicio');
                }
                else
                {
                    $this->_data['interna_data']['error'] = 'Usuario y/o Contrase&ntilde;a incorrectos';
                    $this->load->view('vw_plantilla', $this->_data);
                }
            }
        }
        
        
        public function inicio()
        {
            $this->load->view('vw_plantilla', $this->_data);
        }
    }

/* End of file main.php */
/* Location: ./application/controllers/main.php */