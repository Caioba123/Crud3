<?php
include("conexao.php");

$id = $_GET['id'];
$sql = "SELECT * FROM Cadastro WHERE id = $id";
$result = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($result);
?>

<h2>Editar Usuário</h2>
<form action="atualizar.php" method="POST">

  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
  Decrição: <input type="text" name="decrição" value="<?php echo $dados['decricao']; ?>"><br>
  Valor Dispesa: <input type="text" name="valor_dispesa" value="<?php echo $dados['valor_dispesa']; ?>"><br>
  Salário: <input type="text" name="salário" value="<?php echo $dados['salario']; ?>"><br>
  Tipo: <input type="text" name="tipo" value="<?php echo $dados['tipo']; ?>"><br>
  Data1: <input type="text" name="data1" value="<?php echo $dados['data1']; ?>"><br>

  <button type="submit">Atualizar</button>
</form>