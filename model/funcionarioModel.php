<?php
require_once __DIR__ . '/../config/database.php';

function inserir_funcionario($nome, $cargo, $salario) {
    global $conexao;
    $sql = "INSERT INTO funcionario (nome, cargo, salario) VALUES ('$nome', '$cargo', '$salario')";
    return mysqli_query($conexao, $sql);
}


function buscar_funcionarios($nome = '') {
    global $conexao;   
    $sql = "SELECT * FROM funcionario WHERE nome LIKE '%$nome%'";
    $resultado = mysqli_query($conexao, $sql);    
    $funcionarios = [];
    if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $funcionarios[] = $row;
        }
    }
    return $funcionarios;
}
