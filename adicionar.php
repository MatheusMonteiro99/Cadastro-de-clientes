<link rel="stylesheet" href="css/adicionar.css">

<main class="child">
    <form method="POST" action="adicionar_action.php" class="modal-form">
        <div class="modal" id="modal">
            <div class="modal-content">

                <header class="header">
                    <h1>Adicionar Usuário</h1>
                </header>
                
                <label>
                    Nome<br/>
                    <input type="text" id="name" class="modal-field" name="name" required/>
                </label><br/><br/>

                <label>
                    E-mail<br/>
                    <input type="email" id="email" class="modal-field" name="email" required />
                </label><br/><br/>

                <label>
                    Celular<br/>
                    <input type="tel" pattern="[0-9]{4}-[0-9]{4}" id="cellphone" class="modal-field" name="cellphone" required/><br/>
                    <small>Formato do número: 8888-8888</small>
                    
                </label><br/><br/>

                <label>
                    Cidade<br/>
                    <input type="text" id="city" class="modal-field" name="city" required />
                </label><br/><br/>

                <footer class="modal-footer">
                    <input type="submit" class="buttonAdd" value="Adicionar" />
                </footer>

            </div>
        </div>
    </form>
</main>