<?php
require_once __DIR__ . '/../model/funcionarioModel.php';

function controller_home() {
    require_once __DIR__ . '/../view/home.php';
}

// Para cadastrar
function controller_cadastrar() {    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'] ?? '';
        $cargo = $_POST['setor'] ?? '';
        $salario = $_POST['salario'] ?? 0;
        if (inserir_funcionario($nome, $cargo, $salario)) {           
            echo "<script>alert('Funcionário cadastrado com sucesso!'); window.location.href='index.php?acao=home';</script>";
            exit;
        } else {
            echo "Erro ao cadastrar funcionário.";
        }
    }    
    require_once __DIR__ . '/../view/inserir.php';
}

// Para consultar
function controller_consultar() {
    $nome = $_GET['nome'] ?? '';
   
    $funcionarios = buscar_funcionarios($nome);
     require_once __DIR__ . '/../view/consultar.php';
}