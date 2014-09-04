<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function _base_alert($type, $title, $message = false)
    {
        $CI =& get_instance();
        $alert = json_encode(array('type' => $type, 'head' => $title, 'message' => $message));
        process_alert($alert);
    }

    function process_alert($json)
    {
        $config = json_decode($json);
        $icon   = '';
        switch($config->{'type'})
        {
          case 'success':
          $icon = 'ok';
          $head = 'Success Message';
          break;

          case 'info':
          $icon = 'info-sign';
          $head = 'Info Message';
          break;

          case 'warning':
          $icon = 'record';
          $head = 'Warning Message';
          break;

          case 'danger':
          $icon = 'hand-right';
          $head = 'Danger Message';
          break;
        }

        $head = (!empty($config->{'head'})) ? $config->{'head'} : $head;
        $msg  = (empty($config->{'message'})) ? '' : '<p>'.$config->{'message'}.'</p>';
        
        $resultado = '<div class="alert alert-'.$config->{'type'}.'">'
                        .'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'
                        .'<strong>'.$head.'</strong>'
                        .'<div style="border-top: 1px solid; margin-top:5px; padding-top: 7px;">'
                            .$msg
                        .'</div>'
                    .'</div>';
        
        echo $resultado;
    }

    if (!function_exists('success'))
    {
        function success($title, $message = false)
        {
            _base_alert('success', $title, $message);
        }
    }

    if (!function_exists('warning'))
    {
        function warning($title, $message = false)
        {
            _base_alert('warning', $title, $message);
        }
    }

    if (!function_exists('error'))
    {
        function error($title, $message = false)
        {
            _base_alert('danger', $title, $message);
        }
    }

    if (!function_exists('info'))
    {
      function info($title, $message = false)
      {
        _base_alert('info', $title, $message);
      }
    }

/* End of file alert_helper.php */
/* Location: ./application/helpers/alert_helper.php */