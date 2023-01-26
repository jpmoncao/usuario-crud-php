<h1>Listar usuários</h1>

<?php
$sql = "SELECT * FROM usuário;";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print("<table class='table table-hover'>");
    print('<thead>');
    print('<tr>');
    print('<th>#</th>');
    print('<th>Nome</th>');
    print('<th>Email</th>');
    print('<th>Data de nascimento</th>');
    print('<th colspan="2">Ações</th>');
    print('</tr>');

    while ($user = $res->fetch_object()) {
        $id = $user->id;
        print("<tr>");
        print("<td>" . $user->id . "</td>");
        print("<td>" . $user->nome . "</td>");
        print("<td>" . $user->email . "</td>");
        print("<td>" . $user->data_nascimento . "</td>");
        print("<td>");
        print("<button onclick=\"location.href='?page=editar&id=$id'\" class='btn btn-success'>Editar</button>");
        print("</td>");
        print("<td>");
        print("<button onclick=\"if(confirm('Deseja mesmo excluir esse usuário?')){location.href='?page=salvar&action=delete&id=$id'}else{false}\" class='btn btn-danger'>Excluir</button>");
        print("</td>");
        print("</tr>");
    }

    print('</thead>');
    print('</table>');
} else {
    print("<p class'alert alert-danger'>Nenhum usuário encontrado!</p>");
}
