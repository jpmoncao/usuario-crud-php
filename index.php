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
            <a class="navbar-brand" href="?page=home">Cadastro</a>
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
    include("src/config.php");

    switch (@$_REQUEST['page']) {
        case 'cadastrar':
            include('screens/cadaster.php');
            break;
        case 'listar':
            include('screens/listusers.php');
            break;
        case 'editar':
            include('screens/edituser.php');
            break;
        case 'salvar':
            include('controller/saveuser.php');
            break;
        default:
            include('screens/home.php');
            break;
    }
    ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>