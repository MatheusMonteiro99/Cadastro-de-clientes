<link rel="stylesheet" href="css/records.css"/>
<link rel="stylesheet" href="css/buttons.css"/>
<link rel="stylesheet" href="css/style.css"/>

<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>
<header class="header">
    CADASTRO DE CLIENTES
</header>

<main>
<a href="adicionar.php"><button type="button" class="button blue mobile" id="cadastrarCliente">Cadastrar Cliente</button></a>
<table id="tableClient" class="records">
<div class="child">
<thead>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>CELULAR</th>
        <th>CIDADE</th>
        <th>AÇÕES</th>
    </tr>
</thead>
    <?php foreach($lista as $usuario): ?>
    <tbody>
        <tr>
            <td><?=$usuario->getId();?></td>
            <td><?=$usuario->getNome();?></td>
            <td><?=$usuario->getEmail();?></td>
            <td><?=$usuario->getCellphone();?></td>
            <td><?=$usuario->getCity();?></td>
            <td>
            <a href="editar.php?id=<?=$usuario->getId();?>"><button id="salvar" class="button green">Editar</button></a>
            <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')"><button id="cancelar" class="button red">Excluir</button></a>
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
</main