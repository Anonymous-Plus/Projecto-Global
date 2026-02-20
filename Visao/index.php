<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Business Education</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
        }
        .modal-backdrop-custom {
            background: rgba(0,0,0,0.7);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- HERO SECTION -->
<section class="hero-bg text-white py-5">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-4">
            Transforme o seu futuro com oportunidades globais
        </h1>
        <p class="lead mb-4">
            Oferecemos estágios profissionais, intercâmbios, cursos curriculares e experiências académicas para acelerar sua carreira internacional.
        </p>
        <button class="btn btn-warning"
        data-bs-toggle="modal"
        data-bs-target="#inscricaoModal">
    Inscreva-se Já
</button>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nossos Serviços</h2>
            <p class="text-muted">Programas internacionais para o seu crescimento académico e profissional</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 shadow rounded-4 h-100 hover:shadow-xl transition">
                    <h5 class="fw-bold mb-3">Intercâmbio</h5>
                    <p>Experiências internacionais que ampliam sua visão global e académica.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow rounded-4 h-100 hover:shadow-xl transition">
                    <h5 class="fw-bold mb-3">Estágios Profissionais</h5>
                    <p>Programas de estágio em empresas internacionais para desenvolver sua carreira.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow rounded-4 h-100 hover:shadow-xl transition">
                    <h5 class="fw-bold mb-3">Cursos Curriculares</h5>
                    <p>Cursos especializados alinhados com as exigências do mercado global.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 shadow rounded-4 h-100 hover:shadow-xl transition">
                    <h5 class="fw-bold mb-3">Experiências Académicas</h5>
                    <p>Programas educacionais internacionais com certificação reconhecida.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 shadow rounded-4 h-100 hover:shadow-xl transition">
                    <h5 class="fw-bold mb-3">Oportunidades Globais</h5>
                    <p>Conectamos estudantes ao mercado internacional com experiências reais.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="bg-blue-900 text-white py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Pronto para mudar o seu futuro?</h2>
        <p class="mb-4">Inscreva-se agora e comece a sua jornada internacional.</p>
<button class="btn btn-warning btn-lg px-5 fw-bold shadow"
        data-bs-toggle="modal"
        data-bs-target="#inscricaoModal">
    Inscreva-te Já
</button>
<a href="login.php" class="btn btn-outline-light btn-lg px-5 fw-bold">Admin</a>
    </div>
</section>

<!-- MODAL INSCRIÇÃO PROFISSIONAL -->
<div class="modal fade" id="inscricaoModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content shadow-lg">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          <i class="bi bi-pencil-square"></i> Inscrição Oficial - Global Business Education Angola
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form id="formInscricao" enctype="multipart/form-data">

          <div class="row g-3">

            <!-- Nome -->
            <div class="col-md-6">
              <label class="form-label">Nome Completo *</label>
              <input type="text" name="nome" class="form-control" required>
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label class="form-label">Email *</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Telefone com Indicativo -->
            <div class="col-md-6">
              <label class="form-label">Telefone *</label>
              <div class="input-group">
                <span class="input-group-text">+244</span>
                <input type="tel" name="telefone" class="form-control" 
                       pattern="[0-9]{9}" 
                       placeholder="912345678"
                       required>
              </div>
              <small class="text-muted">Digite 9 dígitos sem espaços.</small>
            </div>

            <!-- Programa -->
            <div class="col-md-6">
              <label class="form-label">Programa de Interesse *</label>
              <select name="programa" class="form-select" required>
                <option value="">Selecionar...</option>
                <option>Estágio Profissional</option>
                <option>Intercâmbio</option>
                <option>Curso Internacional</option>
              </select>
            </div>

            <!-- Turma -->
            <div class="col-md-6">
              <label class="form-label">Turma Disponível *</label>
              <select name="turma" class="form-select" required>
                <option value="">Selecionar...</option>
                <option>Segunda - Quinta</option>
                <option>Terça - Sexta</option>
                <option>Quarta - Sábado</option>
              </select>
            </div>

            <!-- Sessão -->
            <div class="col-md-6">
              <label class="form-label">Sessão Horária *</label>
              <select name="sessao" class="form-select" required>
                <option value="">Selecionar...</option>
                <option>08h - 10h</option>
                <option>11h - 13h</option>
                <option>13h15 - 15h</option>
                <option>15h15 - 17h</option>
              </select>
            </div>

            <!-- Carta Motivação -->
            <div class="col-12">
              <label class="form-label">Carta de Motivação *</label>
              <textarea name="motivacao" class="form-control" rows="4" required></textarea>
            </div>

            <!-- Upload BI -->
            <div class="col-md-6">
              <label class="form-label">Documento de Identificação (PDF ou JPG) *</label>
              <input type="file" name="bi" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>

            <!-- Upload Comprovativo -->
            <div class="col-md-6">
              <label class="form-label">Comprovativo de Pagamento *</label>
              <input type="file" name="pagamento" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>

            <div class="col-12 text-center mt-4">
              <button type="submit" class="btn btn-success btn-lg px-5">
                <i class="bi bi-send-check"></i> Submeter Candidatura
              </button>
            </div>

          </div>

         </form>
       </div>
    </div>
  </div>
</div>
<!-- JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

// =============================
// ABRIR MODAL (Bootstrap)
// =============================
function openModal() {
    const modal = new bootstrap.Modal(document.getElementById('inscricaoModal'));
    modal.show();
}

// =============================
// VALIDAÇÃO E SUBMISSÃO
// =============================
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("formInscricao");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (!form.checkValidity()) {
            form.classList.add("was-validated");
            return;
        }

        // =============================
        // FUTURO BACKEND
        // =============================
        // const formData = new FormData(form);
        // fetch('/api/inscricoes', {
        //     method: 'POST',
        //     body: formData
        // })

        alert("Candidatura submetida com sucesso! Aguarde validação.");

        form.reset();
        form.classList.remove("was-validated");

        const modalInstance = bootstrap.Modal.getInstance(document.getElementById('inscricaoModal'));
        modalInstance.hide();
    });

});
</script>

</body>
</html>
