<link rel="stylesheet" href="css/editar.css">
<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, 'id');
if($id) {
    $usuario = $usuarioDao->findById($id);
}

if($usuario === false) {
    header("Location: index.php");
    exit;
}
?>
<main class="child">
    <form method="POST" action="editar_action.php">
        <div class="modal" id="modal">
            <div class="modal-content">

                <header class="header">
                    <h1>Editar Usuário</h1>
                </header>

                <input type="hidden" name="id" value="<?=$usuario->getId();?>" />

                <label>
                    Nome:<br/>
                    <input type="text" name="name" class="modal-field" value="<?=$usuario->getNome();?>" />
                </label><br/><br/>

                <label>
                    E-mail:<br/>
                    <input type="email" name="email" class="modal-field" value="<?=$usuario->getEmail();?>" />
                </label><br/><br/>

                <label>
                    Celular:<br/>
                    <input type="tel" pattern="[0-9]{4}-[0-9]{4}" name="cellphone" class="modal-field" value="<?=$usuario->getCellphone();?>"/> </br>
                    <small>Formato do número: 8888-8888</small>
                </label><br/><br/>

                <label>
                    Cidade:<br/>
                    <input type="text" name="city" class="modal-field" value="<?=$usuario->getCity();?>" />
                </label><br/><br/>
                <footer class="modal-footer">
                    <input type="submit" class="buttonAdd" value="Salvar" />
                </footer>
            </div>
        </div>
    </form>
</main>