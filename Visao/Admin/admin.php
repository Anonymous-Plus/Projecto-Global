<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Painel Administrador - Global Business Education Angola</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    overflow-x: hidden;
    background-color: #f1f5f9;
}
.sidebar {
    height: 100vh;
    background: #0f172a;
    color: white;
    position: fixed;
    width: 260px;
}
.sidebar a {
    color: #cbd5e1;
    text-decoration: none;
    display: flex;
    align-items: center;
    padding: 12px 20px;
    transition: 0.3s;
}
.sidebar a i {
    margin-right: 10px;
}
.sidebar a:hover, .sidebar a.active {
    background: #1e293b;
    color: #fff;
}
.content {
    margin-left: 260px;
    padding: 30px;
}
.card-hover:hover {
    transform: translateY(-4px);
    transition: 0.3s;
}
.footer {
    margin-left: 260px;
    padding: 15px;
    background: white;
    border-top: 1px solid #ddd;
}
</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar d-flex flex-column p-3">
    <h4 class="text-center mb-4">GBE Angola</h4>

    <a href="#" onclick="loadPage('dashboard', this)" class="active">
        <i class="bi bi-speedometer2"></i> Dashboard
    </a>
    <a href="#" onclick="loadPage('inscricoes', this)">
        <i class="bi bi-check2-square"></i> Aprovações
    </a>
    <a href="#" onclick="loadPage('utilizadores', this)">
        <i class="bi bi-people"></i> Utilizadores
    </a>
    <a href="#" onclick="loadPage('cursos', this)">
        <i class="bi bi-journal-bookmark"></i> Cursos
    </a>
    <a href="#" onclick="loadPage('intercambios', this)">
        <i class="bi bi-airplane"></i> Intercâmbios
    </a>

    <hr class="bg-light">
    <a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- CONTENT -->
<div class="content" id="mainContent"></div>

<!-- FOOTER -->
<div class="footer text-center">
    © 2026 Global Business Education Angola — Painel Administrativo
</div>

<script>

// ===============================
// ROUTER
// ===============================

function loadPage(page, el) {
    document.querySelectorAll('.sidebar a').forEach(link => link.classList.remove('active'));
    el.classList.add('active');

    if (page === 'dashboard') renderDashboard();
    if (page === 'inscricoes') renderInscricoes();
    if (page === 'utilizadores') renderUtilizadores();
    if (page === 'cursos') renderCursos();
    if (page === 'intercambios') renderIntercambios();
}

// ===============================
// DASHBOARD (dados angolanos simulados)
// ===============================

function renderDashboard() {
    document.getElementById("mainContent").innerHTML = `
        <h2 class="mb-4">Dashboard Geral - Angola</h2>

        <div class="row">

            <div class="col-md-3">
                <div class="card shadow p-3 card-hover">
                    <h6>Total Inscrições (2026)</h6>
                    <h3>482</h3>
                    <small class="text-success">+12% desde 2025</small>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow p-3 card-hover">
                    <h6>Estágios em Portugal</h6>
                    <h3>126</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow p-3 card-hover">
                    <h6>Intercâmbios no Brasil</h6>
                    <h3>89</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow p-3 card-hover">
                    <h6>Cursos Técnicos Internacionais</h6>
                    <h3>14</h3>
                </div>
            </div>

        </div>
    `;
}

// ===============================
// INSCRIÇÕES
// ===============================

function renderInscricoes() {
    document.getElementById("mainContent").innerHTML = `
        <div class="d-flex justify-content-between align-items-center">
            <h2>Aprovação de Inscrições</h2>
        </div>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Província</th>
                    <th>Programa</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ana João</td>
                    <td>Luanda</td>
                    <td>Estágio em Lisboa</td>
                    <td><span class="badge bg-warning">Pendente</span></td>
                    <td>
                        <button class="btn btn-success btn-sm" onclick="aprovar()">Aprovar</button>
                        <button class="btn btn-danger btn-sm">Rejeitar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    `;
}

function aprovar(){
    alert("Inscrição aprovada! (Aqui futuramente vai chamar API PUT /inscricao)");
}

// ===============================
// UTILIZADORES
// ===============================

function renderUtilizadores() {
    document.getElementById("mainContent").innerHTML = `
        <h2>Controle de Utilizadores</h2>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalUser">
            <i class="bi bi-person-plus"></i> Novo Utilizador
        </button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Curso Designado</th>
                    <th>Destino</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Carlos Mendes</td>
                    <td>Gestão Empresarial</td>
                    <td>Portugal</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Remover</button>
                    </td>
                </tr>
            </tbody>
        </table>
    `;
}

// ===============================
// CURSOS
// ===============================

function renderCursos() {
    document.getElementById("mainContent").innerHTML = `
        <h2>Cursos Internacionais</h2>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>País</th>
                    <th>Duração</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gestão Empresarial Internacional</td>
                    <td>Portugal</td>
                    <td>6 Meses</td>
                </tr>
                <tr>
                    <td>Engenharia Industrial</td>
                    <td>Brasil</td>
                    <td>1 Ano</td>
                </tr>
            </tbody>
        </table>
    `;
}

// ===============================
// INTERCÂMBIOS
// ===============================

function renderIntercambios() {
    document.getElementById("mainContent").innerHTML = `
        <h2>Programas de Intercâmbio</h2>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th>Destino</th>
                    <th>Instituição</th>
                    <th>Duração</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Portugal</td>
                    <td>Universidade de Lisboa</td>
                    <td>1 Ano</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>USP</td>
                    <td>6 Meses</td>
                </tr>
            </tbody>
        </table>
    `;
}

// Inicializa
renderDashboard();

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>