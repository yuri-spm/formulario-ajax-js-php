<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario AJAX</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="" method="post" id="formulario">
        <div class="card">
            <h2 class="card-header">Formulário de cadastro</h2>
        </div>
        <div class="form-group">
            <label id="label-nome" class="align-content-sm-center">Nome Completo</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label id="label-telefone" class="align-content-sm-center">Telefone</label>
            <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="form-group">
            <label id="label-email" >Email</label>
            <input type="email" class="form-control"  name="email" required>
        </div>
        <button  id="enviar" class="align-content-sm-center btn btn-primary">Enviar</button>




    <form action="" method="post" id="formulario2">
        <div class="card">
            <h2 class="card-header">Pessoas Cadastradas</h2>
        </div>
        <div class="form-group">
            <label id="label-nome" class="align-content-sm-center">Nome Completo</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label id="label-telefone" class="align-content-sm-center">Telefone</label>
            <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="form-group">
            <label id="label-email" >Email</label>
            <input type="email" class="form-control"  name="email" required>
        </div>
    <script>

        $(function() {
            $('#formulario').submit(function () {
               $.ajax({
                   url: "insert.php",
                   type: 'POST',
                   data: $('#formulario').serialize(),
                   success: function (data) {
                        if ($('#formulario') !== ''){
                            alert("Formulario enviado com sucesso.")
                            return false;
                        } else {
                            alert("Preencha os dados");

                        }
               }
            });
        return false;
    });
});


    </script>

</form>
</body>
</html>
