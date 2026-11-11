<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f4f7fb">
    <title>Consultar funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>
<body class="app-background">
    <main class="container py-5">
        <div class="page-heading mb-4">
            <a href="index.php" class="back-link"><i class="bi bi-arrow-left me-2"></i>Voltar ao painel</a>
            <span class="eyebrow d-block mt-4">REGISTROS</span>
            <h1 class="h2 mb-2">Consultar funcionários</h1>
            <p class="text-secondary mb-0">Pesquise e visualize os funcionários cadastrados.</p>
        </div>
        <form action="index.php" method="GET" class="row g-2 mb-4 search-panel">
            <input type="hidden" name="acao" value="consultar">
            <div class="col-md-8">
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome do funcionário" value="<?= htmlspecialchars($_GET['nome'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search me-2"></i>Buscar</button>
            </div>
            <div class="col-auto">
                <a href="index.php?acao=consultar" class="btn btn-outline-secondary">Limpar</a>
            </div>
        </form>
        <div class="card app-card table-card">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Setor</th>
                            <th>Salário</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($funcionarios) && count($funcionarios) > 0): ?>
                            <?php foreach ($funcionarios as $row): ?>
                                <tr>
                                    <td><?= htmlspecialchars((string) $row['id'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['cargo'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>R$ <?= number_format($row['salario'], 2, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-secondary py-4">Nenhum funcionário encontrado. Utilize a busca para consultar os funcionários.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
