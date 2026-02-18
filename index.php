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
        <button onclick="openModal()" 
            class="btn btn-warning btn-lg shadow-lg px-5 py-3 fw-bold">
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
        <button onclick="openModal()" 
            class="btn btn-warning btn-lg px-5 fw-bold shadow">
            Inscreva-te Já
        </button>
    </div>
</section>

<!-- MODAL -->
<div id="inscricaoModal" 
     class="fixed inset-0 hidden items-center justify-center modal-backdrop-custom z-50">
    
    <div class="bg-white rounded-4 shadow-2xl w-full max-w-2xl p-5 position-relative">
        
        <button onclick="closeModal()" 
            class="btn-close position-absolute top-0 end-0 m-3"></button>

        <h3 class="fw-bold mb-4 text-center text-blue-900">
            Inscrição Online
        </h3>

        <form id="formInscricao">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Telefone</label>
                    <input type="tel" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Programa de Interesse</label>
                    <select class="form-select" required>
                        <option value="">Selecionar...</option>
                        <option>Intercâmbio</option>
                        <option>Estágio Profissional</option>
                        <option>Cursos Curriculares</option>
                        <option>Experiências Académicas</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label">Mensagem</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <div class="col-12 text-center mt-3">
                    <button type="submit" 
                        class="btn btn-primary btn-lg px-5 fw-bold shadow">
                        Enviar Inscrição
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- JS -->
<script>
function openModal() {
    document.getElementById("inscricaoModal").classList.remove("hidden");
    document.getElementById("inscricaoModal").classList.add("flex");
}

function closeModal() {
    document.getElementById("inscricaoModal").classList.add("hidden");
    document.getElementById("inscricaoModal").classList.remove("flex");
}

// Example submit handler
document.getElementById("formInscricao").addEventListener("submit", function(e){
    e.preventDefault();
    alert("Inscrição enviada com sucesso!");
    closeModal();
});
</script>

</body>
</html>
