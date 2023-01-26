<?php
$id = $_GET['id'];
$sql = "SELECT * FROM usuário WHERE id = $id";

$res = $conn->query($sql);
$user = $res->fetch_object();
?>

<h1>Editar usuário</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?= $user->id?>">
    <div class="m-3">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="name" id="name" value="<?= $user->nome?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" id="email" value="<?= $user->email?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data-nasc" id="data-nasc" value="<?= $user->data_nascimento?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite uma nova senha" required class="form-control">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>