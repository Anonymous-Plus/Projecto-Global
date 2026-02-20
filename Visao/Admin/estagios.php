<?php
session_start();
require '../config/database.php';
require '../includes/auth.php';

$stmt = $pdo->prepare("SELECT * FROM programas WHERE tipo='estagio'");
$stmt->execute();
$estagios = $stmt->fetchAll();
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid p-4">
    <h2>Estágios</h2>

    <a href="novo_programa.php?tipo=estagio" class="btn btn-success mb-3">
        Novo Estágio
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>País</th>
                <th>Duração</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($estagios as $e): ?>
            <tr>
                <td><?= $e['titulo'] ?></td>
                <td><?= $e['pais'] ?></td>
                <td><?= $e['duracao'] ?></td>
                <td>
                    <a href="../actions/delete.php?id=<?= $e['id'] ?>" 
                       class="btn btn-danger btn-sm">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>