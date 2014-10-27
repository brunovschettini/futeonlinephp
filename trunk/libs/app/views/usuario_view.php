<?php include('include/head_view.php');?>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Meu perfil</h1>
    </div>
</div> 
<div class="row">
    <div class="large-3 columns">
        <div class="panel radius">
            <div class="row">
                <div class="large-12 columns">
                    <div class="panel radius">
                        <img src="<?=Helpers::baseUrl('css/img/bola_home.png'); ?>" alt="Foto perfil" width="128"/>
                    </div>
                    <form method="post" action="some_action" enctype="multipart/form-data" class="margin-top-max"/>
                        <input type="file" name="foto_perfil" value="Trocar" />
                    </form>
                    <label>Cadastro</label>
                    <p><?php // echo date('d/m/Y', strtotime(Param::get('user')->criacao)); ?></p>
                    <label>Expira</label>
                    <p><?php // echo date('d/m/Y', strtotime(Param::get('user')->criacao) . '+1 year');?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="large-9 columns">
        <div class="panel radius">
            <?php //form_open('home/atualizar_cadastro', array('id'=>'form-cadastro')); ?>
                <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
                <div data-alert id="msg-cadastro"></div>
                <label>Nome</label>
                <?php // form_input(array('name'=>'nome', 'placeholder'=> 'Nome Completo'), $usuario['nome'], 'autofocus'); ?>
                <label>E-mail</label>
                <?php // form_input(array('name'=>'email', 'placeholder'=> 'Endereço de e-mail', 'disabled'=>'disabled'), $usuario['email'])?>
                <label>Senha</label>
                <?php // form_password(array('id'=>'pw', 'name'=>'senha', 'placeholder'=> 'Senha'), ''); ?>
                <label>Confirmar senha</label>
                <?php // form_password(array('name'=>'senha_confirma', 'placeholder'=> 'Confirme a Senha'), ''); ?>
                <?php  //form_submit(array('name'=>'atualizar_cadastro', 'class'=>'button small'), 'Atualizar'); ?>
            <?php //form_close(); ?>
        </div>        
    </div>
</div>
<?php include('include/footer_view.php');