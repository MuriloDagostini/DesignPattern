<?php

namespace Formulario\Elementos;

class TextArea extends \Formulario\Elemento implements \Formulario\Interfaces\TextArea{

    public function __construct($id_nome,$titulo,$rows){
        $this->html = "<div class='form-group'>";
        $this->html .= "    <textarea name='$id_nome' id='$id_nome' placeholder='{$titulo}' class='form-control' rows='$rows' /></textarea> ";
        $this->html .= "</div>";
        $this->html;
    }
} 