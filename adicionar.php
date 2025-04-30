<?php
include("conexao.php");
$descricao = $_POST['descricao'];
$valor_dispensa = $_POST['valor_dispesa'];
$salario = $_POST['salario'];
$tipo = $_POST['tipo'];
$data1 = $_POST['data1'];
$sql = "INSERT INTO transacoes (descricao , valor_dispensa , salario , tipo , data1) VALUES ('$descricao','$valor_dispensa', '$salario','$tipo' , '$data1' )";


if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}


mysqli_close($conexao);
?>
<!DOCTYPE html>
             