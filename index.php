<?php
require_once __DIR__ . '/controller/funcionarioController.php';
$acao = $_GET['acao'] ?? 'home';

switch ($acao) {
    case 'cadastrar':
        controller_cadastrar();
        break;
    case 'consultar':
        controller_consultar();
        break;
    default:
        controller_home();
        break;
}