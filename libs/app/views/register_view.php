<?php include('template/head_view.php'); ?>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Cadastrar</h1>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <form name="Register" class="sweetForm">
            <div class="row margin-top-max">
                <div class="large-6 columns">
                    <label>Nome</label>
                    <input type="text" name="users[people][name]" placeholder="Endereço de e-mail"  />
                    <label>Data de nascimento</label>
                    <input type="date" name="birthdayString" placeholder="Data de nascimento"  />
                    <label>Sexo</label>
                    <select name="idGenre">
                        <option value="Female">Feminino</option>
                        <option value="Male">Masculino</option>
                    </select>
                    <label>Email</label>
                    <input type="email" name="users[mail]" placeholder="Endereço de e-mail"  />
                    <label>Senha</label>
                    <input type="text" name="users[password]" id="repassword" placeholder="Senha - Até 10 caracteres" maxlength="10"  />
                    <label>Confirma senha</label>
                    <input type="text" name="repassword" id="repassword" placeholder="Confirme a senha" maxlength="10"  />
                    <button type="submit" data-action="saveNewUser" value="saveNewUser" style="margin-right: 15px" name="action" class="button radius" data-update="register" data-complete="showAlert('.messages')">Cadastrar</button>
                    <a href="<?php echo Helpers::baseUrl('account/login'); ?>" class="button radius alert">Login</a>
                </div>
                <div class="large-6 columns">
                    <a class="button" href="https://www.facebook.com/dialog/oauth?client_id=1460958564131231&amp;scope=user_status,email,user_birthday,user_location,publish_stream,user_groups&amp;redirect_uri=####">Cadastrar com Facebook</a>
                </div>                
            </div>
        </form>        
    </div>
</div> 
<?php
include('template/footer_view.php');
