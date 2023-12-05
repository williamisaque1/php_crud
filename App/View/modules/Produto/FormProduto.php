<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro de Produto</title>
    <style>
        label { margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Cadastro de Produto</legend>

            <form method="post" action="/produto/form/save" class="row g-3">

                <input type="hidden" value="<?= $model->id ?>" name="id" />
                
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome do produto:</label>
                    <input id="nome" name="nome" value="<?= $model->name ?>" type="text" class="form-control" />
                </div>

                <div class="col-md-6">
                    <label for="quantidade" class="form-label">Quantidade:</label>
                    <input id="quantidade" name="quantidade" value="<?= $model->quantidade ?>" type="number" class="form-control" />
                </div>

                <div class="col-md-6">
                    <label for="preco" class="form-label">Preço:</label>
                    <input id="preco" value="<?= $model->preco ?>" name="preco" type="text" class="form-control" />
                </div>
               
                <div class="col-md-6">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input id="descricao" name="descricao" value="<?= isset($model->descricao) ? $model->descricao : '' ?>" type="text" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input id="descricao" name="descricao" value="<?= isset($model->descricao) ? $model->descricao : '' ?>" type="text" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label for="date_create" class="form-label">Data:</label>
                    <input type="date" class="form-control"  value="<?= $model->date_create ?>" id="date_create" name="date_create">
                </div>
                <div class="col-md-6">
                    <label for="hour_create" class="form-label">Data:</label>
                    <input type="time" class="form-control"  value="<?= $model->hour_create ?>" id="hour_create" name="hour_create">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
