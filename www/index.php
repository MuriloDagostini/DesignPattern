<?php

header('Content-type: text/html; charset=utf-8');

define("ROOT",str_replace(DIRECTORY_SEPARATOR."www",'',__DIR__));
define("CLASS_DIR", ROOT . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR);

spl_autoload_register(function($class) {
    $className = CLASS_DIR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
    include($className);
});

//inicio html
include_once("head.php");

include_once("menu.php");

use Formulario\Formulario;

$form = new Formulario("form1","index.php");
$form->addElemento(new \Formulario\Elementos\Text("nome","Nome:"));
$form->addElemento(new \Formulario\Elementos\Text("email","Email:"));
$form->addElemento(new \Formulario\Elementos\Select("nivel","Nível de Acesso:",array('Admin','Usuário')));
$form->addElemento(new \Formulario\Elementos\TextArea("descricao","Descrição:",'4'));
$form->addElemento(new \Formulario\Elementos\Submit("Enviar"));

?>
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="width: 70%;">
                <!-- Default panel contents -->
                <div class="panel-heading">Formulário de cadastro</div>
                <div class="form_box">
                    <? $form->render() ?>
                </div>
            </div>
        </div>
    </div>

<?

include_once("footer.php");

?>

