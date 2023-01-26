<h1>Cadastrar usuário</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="action" value="cadaster">
    <div class="m-3">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data-nasc" id="data-nasc" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" class="form-control">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>