<!-- HTML Login -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - GBE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex align-items-center vh-100">
<div class="container">
    <div class="col-md-4 mx-auto bg-white p-4 rounded shadow">
        <h4 class="text-center mb-4">Admin Login</h4>
        <?php if(isset($erro)) echo "<div class='alert alert-danger'>$erro</div>"; ?>
        <form method="POST" action="/Visao/Admin/dashboard.php">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" name="senha" class="form-control mb-3" placeholder="Senha" required>
            <button class="btn btn-primary w-100" type="submit">Entrar</button>
        </form>
    </div>
</div>
</body>
</html>