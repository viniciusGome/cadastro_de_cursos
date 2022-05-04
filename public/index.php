<?php
require __DIR__ . '/../vendor/autoload.php';

use \Alura\Cursos\Controller\ListarCursos ;
use \Alura\Cursos\Controller\FormularioInsercao ;

$mensagem = "digitou na url uma das opções abaixo 1./listar-curso 2./novocurso";

switch ($_SERVER['PATH_INFO']) {
    case '/listar-curso':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    
    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;

    default:
        echo $mensagem;
        break;
}



/*
if ($_SERVER['PATH_INFO'] === '/listar-curso') {
    require "listar-cursos.php";
}elseif ($_SERVER['PATH_INFO'] === '/novo-curso'){
    require 'formulario-novo-curso.php';
}else{
    echo "Erro 404";
}
----------------------------------------------------------------
switch ($_SERVER['PATH_INFO']) {
    case '/listar-curso':
        require "listar-cursos.php";
        break;
    
    case '/novo-curso':
        require 'formulario-novo-curso.php';
        break;

    default:
        echo "Erro 404";
        break;
}
*/

