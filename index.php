<form method="post">
    <label for="nome">Nome</label>
    <input name="nome" id="nome">
    <label for="telefone">Telefone</label>
    <input name="telefone" type="tel">
    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" id="mensagem"></textarea>
    <input type="submit" value="Enviar">
</form>
<?php
if($_POST) {
    $pdo = new PDO('sqlite:contatos.sqlite3');
    $sth = $pdo->prepare(
        'INSERT INTO contato ' .
        '(nome, mensagem, telefone) ' .
        'VALUES (?, ?, ?)'
    );
    $sth->execute([$_POST['nome'], $_POST['mensagem'], $_POST['telefone']]);
    echo "Em breve entraremos em contato!";
}