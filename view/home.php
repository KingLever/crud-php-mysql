<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f4f7fb">
    <title>Gestão de funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>
<body class="app-background">
    <main class="container min-vh-100 d-flex justify-content-center align-items-center py-5">
        <section class="card app-card home-card text-center p-4 p-md-5">
            <div class="brand-mark mx-auto mb-4"><i class="bi bi-people-fill"></i></div>
            <span class="eyebrow mb-2">PAINEL DE CONTROLE</span>
            <h1 class="h2 fw-semibold text-dark mb-2">Gestão de funcionários</h1>
            <p class="text-secondary mb-4">Cadastre e consulte os registros da sua equipe em um só lugar.</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                <a href="index.php?acao=cadastrar" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-person-plus-fill me-2"></i>Cadastrar
                </a>
                <a href="index.php?acao=consultar" class="btn btn-success px-4 py-2">
                    <i class="bi bi-search me-2"></i>Consultar
                </a>
            </div>
            <div class="home-footer mt-4 pt-3">Sistema simples para manter seus registros organizados.</div>
        </section>
    </main>
</body>
</html>
