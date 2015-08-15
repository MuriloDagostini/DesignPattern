<?php

namespace Formulario;

abstract class Elemento{

    protected $html;

    public function retornaHTML(){
        return $this->html;
    }

} 