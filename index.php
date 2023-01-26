<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=cadastrar">Novo usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    include("config.php");

    switch (@$_REQUEST['page']) {
        case 'cadastrar':
            include('cadaster.php');
            break;
        case 'listar':
            include('listusers.php');
            break;
        case 'editar':
            include('edituser.php');
            break;
        case 'salvar':
            include('saveuser.php');
            break;
        default:
            print '<h1>Bem vindo!</h1>';
            break;
    }
    ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>