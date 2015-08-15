<?php

namespace Formulario\Elementos;


class Text extends \Formulario\Elemento implements \Formulario\Interfaces\Text{

    public function __construct($id_nome,$titulo){
        $this->html = "<div class='form-group'>";
        $this->html .= "    <input type='text' name='$id_nome' id='$id_nome' placeholder='{$titulo}' class='form-control' /> ";
        $this->html .= "</div>";
        $this->html;
    }
} 