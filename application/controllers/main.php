<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class main extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->view('main');
        }
    }

/* End of file main.php */
/* Location: ./application/controllers/main.php */