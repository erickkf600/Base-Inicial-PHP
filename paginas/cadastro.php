<a href="http://localhost/ACCIO%202.0">
    <div class="header-cad">
        <img src="http://localhost/ACCIO%202.0/logo.png" alt="Accio">
    </div>
</a>
<section class="background">
    <div class="row">
        <div>
            <form id="msform" method="post" action="">
               <ul id="progressbar">
                    <li class="active">Informações de Contato</li>
                    <li>Informações de Envio e Cobrança</li>
                    <li>Informações do Usuário</li>
                </ul>   
                <fieldset>
                    <h2 class="fs-title">Informações de Contato</h2>
                    <input type="text" placeholder="Nome Completo" name="nome">
                    <input type="email" placeholder="Email" name="email">
                    <input type="number" min='0' placeholder="Telefone Fixo" name="telefoneFixo">
                    <input type="number" min='0' placeholder="Celular" name="telefoneCel">
                    <input type="button" name="next" class="next action-button" value="Próximo" />
                </fieldset>

                <fieldset  method="get" action=".">
                    <h2 class="fs-title">Informações de Envio e Cobrança</h2>
                    <input type="number" min='0' placeholder="CEP" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                    onblur="pesquisacep(this.value);">
                    <input type="text" placeholder="Estado" name="estado" id="estado">
                    <input type="text" placeholder="Endereço" name="endereco" id="endereco">
                    <input type="text" placeholder="Cidade" name="cidade" id="cidade">
                    <input type="text" placeholder="Bairro" name="bairro" id="bairro">
                    <input type="text" placeholder="Número" name="numero" id="numero">
                    <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
                    <input type="button" name="next" class="next action-button" value="Próximo"/>               
                </fieldset>

                <fieldset>
                    <h2 class="fs-title">Informações do Usuário</h2>
                    <input type="date"  placeholder="Data de Nascimento" name="dataNasc">
                    <input type="number" min='0' placeholder="CPF" name="cpf">
                    <input type="text"  placeholder="Nome de Usuário" name="usuario">
                    <input type="password"  placeholder="Senha" id="senha" name="senha">
                    <input type="password"  placeholder="Comfirme sua Senha" onblur="conf()" id="csenha" name="consenha">
                    <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
                    <input type="submit" name="submit" class="submit action-button" value="Cadastrar"/>
                </fieldset>
            </form>
            <div class="dme_link">
                <p><a data-toggle="modal" data-target="#myModal" href="#">Já sou Cadastrado</a></p>
            </div>
        </div>
    </div>
</section>