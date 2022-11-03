    
    <?php require_once 'cabecalho.php'?>
    
    <br><br><br>

    <div class="cadastro-div">
        <form>
            <form action="#" autocomplete="on" method="get"></form>
            <legend><span class="material-symbols-outlined" style="color: white;">person</span>
                Informe seus dados pessoais</legend>
            <br><br>
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <div>
                    <label for="nome">Nome completo:</label>
                    <br>
                    <input type="text" id="nome" name="nome" value="" placeholder="Nome completo" autofocus>
                    <br>
                    <br>
                </div>
                <div>
                    <label for="cpf">CPF:</label>
                    <br>
                    <input type="text" id="cpf" name="cpf" value="" placeholder="CPF" required>
                    <br>
                    <br>
                </div>
                <div>
                    <label for="aniversario">Data de nascimento:</label>
                    <br>
                    <input type="date" id="aniversario" name="aniversario" placeholder="Data de nascimento"
                        min="2010-02-10">
                    <br>
                    <br>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="E-mail">
                    <br>
                    <br>
                </div>
                <div>
                    <label for="celular">Celular:</label>
                    <br>
                    <input type="tel" id="celular" name="telefone" placeholder="(xx) 9 xxxx-xxxx"
                        pattern="\([0-9]{2}\) 9 [0-9]{4}-[0-9]{4}">
                    <br>
                    <br>
                </div>
                <div>
                    <label for="senha">Senha: </label>
                    <br>
                    <input type="password" id="senha" name="senha" placeholder="senha" required>
                    <br>
                    <br>
                </div>
                <div>
                    <label for="confirme">Confirme sua senha:</label>
                    <br>
                    <input type="password" id="confirme" name="confirme" placeholder="Confirme sua senha" required>
                    <br>
                    <br>
                </div>
            </div>
        </form>
        <br><br><br>
        <hr>
    </div>
    </div>

    <?php require_once 'rodape.php'?>