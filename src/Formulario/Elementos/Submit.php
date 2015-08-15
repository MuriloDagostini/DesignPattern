<?php

namespace Formulario\Elementos;

class Submit extends \Formulario\Elemento implements \Formulario\Interfaces\Submit{

    public function __construct($titulo){
        $this->html = "<button type='submit' class='btn btn-default'>{$titulo}</button> ";
        $this->html;
    }
} 