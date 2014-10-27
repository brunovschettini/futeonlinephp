<?php include('template/head_view.php'); ?>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Login</h1>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <form name="Login" class="sweetForm"  >
            <div class="messages"></div>
            <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
            <div class="email-field">
                <label>E-mail</label> 
                <input type="email" name="users[mail]" placeholder="Endereço de e-mail"  />
                 <!-- <small class="error">Informar e-mail / válido</small> -->
            </div>
            <div class="passaword-field">
                <label>Senha</label> 
                <input type="text" name="users[password]" id="password" placeholder="Senha"   maxlength="10"  />
                 <!-- <small class="error">Senha</small> -->
            </div>
            <div class="passaword-remember">
                <input type="checkbox" name="rememberme" disabled="disabled" checked="checked"/> Lembrar
                 <!-- <small class="error">Senha</small> -->
            </div>
            <button type="submit" data-action="login" value="login" name="action" class="button" data-update="login" data-complete="showAlert('.messages')">Acessar</button>
            <a href="<?php echo Helpers::baseUrl('account/register'); ?>" class="button radius alert">Cadastrar</a>
        </form>
    </div>
</div> 
<?php
include('template/footer_view.php');
