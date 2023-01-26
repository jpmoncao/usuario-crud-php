<?php
switch ($_REQUEST['action']) {
    case 'cadaster':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $dataNascimento = $_POST['data-nasc'];

        $sql = "INSERT INTO usuário (nome, email, senha, data_nascimento)
        VALUES ('$name', '$email', '$password', '$dataNascimento')";

        $res = $conn->query($sql);

        if ($res) {
            print("<script>alert('Usuário $name foi cadastrado com sucesso!')</script>");
            print("<script>location.href='?page=cadastrar'</script>");
        } else {
            print("<script>alert('Falha ao cadastrar usuário!')</script>");
            print("<script>location.href='?page=cadastrar'</script>");
        }
        break;

    case 'edit';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $dataNascimento = $_POST['data-nasc'];

        $sql = "UPDATE usuário SET
                    nome='{$name}',
                    email='{$email}',
                    senha='{$password}',
                    data_nascimento='{$dataNascimento}'
                WHERE 
                    id=$id;";

        $res = $conn->query($sql);

        if ($res) {
            print("<script>alert('Usuário $name foi alterado com sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        } else {
            print("<script>alert('Falha ao alterar usuário!')</script>");
            print("<script>location.href='?page=editar'</script>");
        }
        break;
    case 'delete';
        $id = $_GET['id'];

        $sql = "DELETE FROM usuário WHERE
                    id=$id;";

        $res = $conn->query($sql);

        if ($res) {
            print("<script>alert('Usuário $name foi excluido com sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        } else {
            print("<script>alert('Falha ao excluir usuário!')</script>");
            print("<script>location.href='?page=listar'</script>");
        }
        break;
}
