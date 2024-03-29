<?php

class Parte1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['content'] = 'parte1';
        $this->load->view('plantilla', $data);
    }

    public function validacion() {
        $string = $this->input->get('string');
        $respuesta = null;
        if ($string != null) {
            if (ctype_alpha($string)) {
                if (ctype_upper($string)) {
                    $respuesta = 'El string contiene solo letras en MAYUSCULA';
                } else if (ctype_lower($string)) {
                    $respuesta = 'El string contiene solo letras en minusculas';
                } else {
                    $respuesta = 'El string contiene solo letras en MAYUSCULAS y minusculas';
                }
            } else if (ctype_digit($string)) {
                $respuesta = 'El string contiene solo numeros';
            } else {
                if (ctype_upper($string)) {
                    $respuesta = 'El string contiene números y letras en MAYUSCULA';
                } else if (ctype_lower($string)) {
                    $respuesta = 'El string contiene números y letras en minusculas';
                } else {
                    $respuesta = 'El string contiene números y letras en MAYUSCULAS y minusculas';
                }                
            }
        } else {
            $respuesta = 'No se digitó string alguno';
        }
        $data['content'] = 'parte1-r';
        $data['respuesta'] = $respuesta;
        $data['string'] = $string;
        $this->load->view('plantilla', $data);
    }

}
