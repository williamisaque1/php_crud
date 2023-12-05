<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Descrição</th>
                    <th>Data da Criação</th>
                    <th>Hora da Criação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model->rows as $item): ?>
                <tr>
                    <td>
                        <a href="/produto/delete?id=<?= $item->id ?>" class="btn btn-danger">X</a>
                    </td>
                    <td>
                        <a href="/produto/form?id=<?= $item->id ?>" class="btn btn-primary"><?= $item->name ?></a>
                    </td>
                    <td><?= $item->preco ?></td>
                    <td><?= $item->quantidade ?></td>
                    <td><?= $item->descricao ?></td>
                    <td><?= $item->date_create ?></td>
                    <td><?= $item->hour_create ?></td>
                </tr>
                <?php endforeach ?>
                <?php if(count($model->rows) == 0): ?>
                    <tr>
                        <td colspan="7" class="text-center">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
