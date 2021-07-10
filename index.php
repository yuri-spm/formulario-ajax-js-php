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
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<form action="" method="" id="formulario">
    <div class="card">
        <h2 class="card-header">Formulário de cadastro</h2>
    </div>
    <div class="form-group">
        <label id="name" class="align-content-sm-center">Primeiro Nome</label>
        <input type="text" class="form-control" name="first_name">
    </div>
    <div class="form-group">
        <label id="telefone" class="align-content-sm-center">Telefone</label>
        <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label id="email">Email</label>
        <input type="text" class="form-control"  name="email" >
    </div>
    <button   class="align-content-sm-center btn btn-primary">Enviar</button>

    <script>

        $(function() {


            $('#formulario').click(function() {

                $.ajax({
                    url: 'index.php',
                    type: 'post',
                    data: {'first_name' : $('#first_name').val(),
                        'phone' : $('phone').val(),
                        'email' : $('email').val()
                    },

                    success: function(response) {
                        console.log(response);
                        if (response){
                            var json = JSON.parse(response);


                        }

                    },
                    error: function(ex, hre) {
                        console.log()
                    }

                })

            })


    </script>

</form>
</body>
</html>
