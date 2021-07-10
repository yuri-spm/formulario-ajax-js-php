<?php
    var_dump($_GET);
?>

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
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
</head>

<body>
    <form action="index.php" method="get">
        <div class="card">
            <h2 class="card-header">Formulário de cadastro</h2>
        </div>
            <div class="form-group">
                <label id="name" class="align-content-sm-center">Primeiro Nome</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label id="name" class="align-content-sm-center">Telefone</label>
                <input type="text" class="form-control" name="phone">
             </div>
            <div class="form-group">
                <label id="email">Email</label>
                <input type="text" style="width:15% " name="email" class="form-group">
            </div>
            <button  class="align-content-sm-center">Enviar</button>


    </form>
</body>

</html>
