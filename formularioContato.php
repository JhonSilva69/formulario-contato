<form method="post">
    <label for="nome">Nome</label>
    <input name="nome" id="nome" type="text" value="<?php 
    if (!empty($row['nome'])) {
         echo $row['nome']; 
        }?>">
    <label for="telefone">Telefone</label>
    <input name="telefone" type="tel" value="<?php 
    if (!empty($row['telefone'])) {
         echo $row['telefone']; 
        }?>">
    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" id="mensagem"><?php 
    if (!empty($row['mensagem'])) {
         echo $row['mensagem']; 
        }?></textarea>
    <input type="submit" value="Enviar">
</form>