<?php

namespace Formulario\Elementos;

class Select extends \Formulario\Elemento implements \Formulario\Interfaces\Select{

    public function __construct($id_nome,$titulo,$options){

        $this->html =  "<div class='form-group'>";
        $this->html .= "    <div class='input-group'> ";
        $this->html .= "    <div class='input-group-addon'>{$titulo}</div> ";
        $this->html .= "    <select  name='$id_nome' id='$id_nome' class='form-control' /> ";
        $this->html .= "        <option value=''>Selecione...</option>";

        foreach($options as $option){
            $this->html .= "<option value='{$option}'>{$option}</option>";
        }

        $this->html .= "    </select>";
        $this->html .= "    </div>";
        $this->html .= "</div>";
        $this->html;
    }
} 