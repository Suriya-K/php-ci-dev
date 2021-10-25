<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calculator extends CI_Controller
{

    public function cal($first = null, $second = null, $opera = null)
    {
        $result = null;
        switch ($opera) {
            case 'add':
                $result = $first + $second;
                break;
            case 'minus':
                $result = $first - $second;
                break;
            case 'multi':
                $result = $first * $second;
                break;
            case 'divine':
                $result = $first / $second;
                break;
            default:
                $result = 0;
                break;
        }
        $this->load->view('v_result', ['result' => $result]);
    }

    public function looper($round = null)
    {
        $this->load->view('v_loop', ['round' => $round]);
    }
}

/* End of file Controllername.php */
