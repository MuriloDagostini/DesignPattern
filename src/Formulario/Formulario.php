<?php

namespace Formulario;

class Formulario{

    protected $html;

    public function __construct($nome,$action){
        $this->html['form']['inicio'] = "<form action='{$action}' method='post' name='{$nome}' id='{$nome}'>";
        $this->html['form']['fim'] = "</form>";
    }

    public function addElemento(Elemento $elemento){
        $this->html['elemento'][] = $elemento->retornaHTML();
    }

    public function render(){
        echo $this->html['form']['inicio'];
        echo implode($this->html['elemento']);
        echo $this->html['form']['fim'];

    }

} 