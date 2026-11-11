<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f4f7fb">
    <title>Cadastrar funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>
<body class="app-background">
    <main class="container py-5">
        <div class="page-heading mb-4">
            <a href="index.php" class="back-link"><i class="bi bi-arrow-left me-2"></i>Voltar ao painel</a>
            <span class="eyebrow d-block mt-4">NOVO REGISTRO</span>
            <h1 class="h2 mb-2">Cadastrar funcionário</h1>
            <p class="text-secondary mb-0">Preencha os dados para adicionar uma pessoa à equipe.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="card app-card">
                    <div class="card-header app-card-header">
                        <h2 class="h5 mb-0">Informações do funcionário</h2>
                    </div>
                    <div class="card-body p-4">
                        <form action="index.php?acao=cadastrar" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="setor" class="form-label">Setor / cargo</label>
                                <input type="text" class="form-control" id="setor" name="setor" required>
                            </div>
                            <div class="mb-4">
                                <label for="salario" class="form-label">Salário (R$)</label>
                                <input type="number" step="0.01" class="form-control" id="salario" name="salario" required>
                            </div>
                            <div class="d-flex flex-column flex-sm-row justify-content-between gap-2">
                                <a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success"><i class="bi bi-check2 me-2"></i>Salvar funcionário</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
