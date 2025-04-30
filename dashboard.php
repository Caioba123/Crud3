<?php
include("conexao.php");
$sql = "SELECT * FROM Cadastro";
$result = mysqli_query($conexao, $sql);
?>


<style>
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}


.table-container, .panel {
    flex: 1 1 48%;
}


@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }


    .table-container, .panel {
        flex: 1 1 100%;
    }
}


.table-container {
    margin-top: 20px;
}


table {
    width: 100%;
    border-collapse: collapse;
}


th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}


th {
    background-color: #f4f4f4;
}


.btn {
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 14px;
    margin-right: 5px;
}


.btn-edit {
    background-color: #ffc107;
    color: #000;
}


.btn-delete {
    background-color: #dc3545;
    color: #fff;
}
</style>


<div class="container">
    <div class="table-container">
        <h2>Lista de Usuários</h2>
        <table>
            <tr>
                <th>Descrição</th>
                <th>Valor Dispesa</th>
                <th>Salário</th>
                <th>Tipo</th>
                <th>Data1</th>
                
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['descricao']; ?></td>
                    <td><?= $row['valor_dispesa']; ?></td>
                    <td><?= $row['salario']; ?></td>
                    <td><?= $row['tipo']; ?></td>
                    <td><?= $row['data1']; ?></td>
                    <td>
                    <td>


            
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>