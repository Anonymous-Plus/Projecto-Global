

<div class="container-fluid p-4">
    <h2>Dashboard</h2>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5>Total Programas</h5>
                <h3><?= $totalProgramas ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5>Total Inscrições</h5>
                <h3><?= $totalInscricoes ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5>Pendentes</h5>
                <h3><?= $pendentes ?></h3>
            </div>
        </div>
    </div>

    <canvas id="chart" class="mt-5"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chart');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Programas', 'Inscrições', 'Pendentes'],
        datasets: [{
            label: 'Resumo Geral',
            data: [<?= $totalProgramas ?>, <?= $totalInscricoes ?>, <?= $pendentes ?>],
        }]
    }
});
</script>

<?php include '../includes/footer.php'; ?>