<?php include('template/head_view.php'); ?>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Cadastro / Login</h1>
    </div>
</div>
<div class="row">
    <div class="large-4 columns" style="border-right: 1px dashed gray">
        <h3>Cadastrar</h3>  
        <form name="Perfil" class="sweetForm"  >
            <div class="messages"></div>
            <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
            <div class="name-field">
                <label>Nome</label> 
                <input type="text" name="User[people][name]" placeholder="Nome Completo" />
                <!-- <small class="error">Informar nome de usuário</small> -->
            </div>
            <div class="email-field">
                <label>E-mail</label> 
                <input type="email" name="User[mail]" placeholder="Endereço de e-mail"  />
                 <!-- <small class="error">Informar e-mail / válido</small> -->
            </div>
            <div class="passaword-field">
                <label>Senha</label> 
                <input type="text" name="User[password]" id="password" placeholder="Senha"   maxlength="10"  />
                 <!-- <small class="error">Senha</small> -->
            </div>
            <div class="password-confirmation-field">
                <label>Confirmar senha</label> 
                <input type="text" name="passwordConfirm"  placeholder="Confirmar senha"  size="15" maxlength="10" />
                 <!-- <small class="error">Confirmar Senha</small> -->
            </div>
            <button type="submit" data-action="enviar_cadastro" value="enviar_cadastro" name="action" class="button" data-update="perfil" data-complete="showAlert('.messages')">Salvar</button>
        </form>
    </div>

    <div class="large-4 columns" style="border-left: 1px dashed gray;">
        <h3>Login</h3>
        <form name="Cadastro" method="POST" action="<?php echo Helpers::baseUrl('pagina/cadastro'); ?>">

            <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
            <div data-alert id="msg-login"></div>
            <label>E-mail</label>
            <input type="text" name="User[mail]" placeholder="Email" autofocus/>

            <label>Senha</label>
            <input type="text" name="User[passaword]" placeholder="Senha" />
            <input type="submit" data-action="login_entrar" value="Entrar" name="Entrar" class="button"/>
            <label for="chk">Sempre Conectado</label>
            <input type="checkbox" name="conectAllways" />
        </form>
    </div>
    <div class="large-4 columns" style="border-left: 1px dashed gray;">
        <h3>Acessar minha conta</h3>
        <form name="Login" method="POST" action="<?php echo Helpers::baseUrl('pagina/cadastro'); ?>">
            <label>Facebook</label>
            <a href="https://www.facebook.com/dialog/oauth?client_id=1460958564131231&redirect_uri=<?php echo Helpers::baseUrl(); ?>&scope=email,user_website,user_location" style="<?php echo (Param::get('user') != NULL) ? 'display: none' : ''; ?>">
                <span class="btn_login_facebook"></span>
            </a> 
            <label>Google</label>
            <span id="signinButton">
                <span
                    class="g-signin"
                    data-callback="signinCallback"
                    data-clientid="1004559124864-lf2uj8g0q0hct3vkntv6ldtviet6timh.apps.googleusercontent.com"
                    data-cookiepolicy="single_host_origin"
                    data-requestvisibleactions="http://schemas.google.com/AddActivity"
                    data-scope="https://www.googleapis.com/auth/plus.login">
                </span>
            </span> 

            <label>Twitter</label>
            <span class="btn_login_twitter"></span>
        </form>
        <a href="<?php echo Helpers::baseUrl('pagina/termos_aplicativo'); ?>">Termos do aplicativo</a> / 
        <a href="<?php echo Helpers::baseUrl('pagina/privacidade'); ?>">Privacidade</a>
    </div>
</div> 
<?php
include('template/footer_view.php');
