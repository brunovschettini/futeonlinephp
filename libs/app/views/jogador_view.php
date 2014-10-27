<div id="modal-convidar-jogadores" class="reveal-modal" data-reveal>
    <div class="row">
        <div class="large-12 columns">
            <h3>Convidar amigos</h3>  
            <?php echo form_open('home/cadastro', array('id'=>'form-convidar-jogadores')); ?>

                <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
                <div data-alert id="msg-cadastro"></div>
                <label>E-mail</label>
                <div class="row">
                    <div class="columns large-11 add-input-jogadores">
                        <?php echo form_input(array('name'=>'email_convidar_jogador[]', 'placeholder'=> 'Endereço de e-mail'), set_value('email')); ?>
                    </div>
                    <div class="columns large-1">
                        <button type="button" class="button [tiny small large]" onclick="$('.add-input-jogadores').append('<input type=text name=email_convidar_jogador[] placeholder=E-mail/>');" title="Adicionar mais amigos">+</button>
                    </div>
                </div>
                <?php echo form_submit(array('name'=>'convidar_amigos', 'class'=>'button small'), 'Enviar convite'); ?>
            <?php echo form_close(); ?>
        </div>
    </div>                                                
</div>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Jogadores</h1>
    </div>
</div> 
<div class="row">
    <div class="large-3 columns">
        <div class="panel radius">
            <div class="row">
                <div class="large-12 columns">
                    <div class="panel radius">
                        <img src="<?=base_url('css/img/bola_home.png'); ?>" alt="Foto perfil" width="128"/>
                    </div>
                    <p><i>Foto</i></p>
                    <form method="post" action="some_action" enctype="multipart/form-data" class="margin-top-max"/>
                        <input type="file" name="foto_perfil" value="Trocar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="large-9 columns">
        <div class="panel radius">
            <?=form_open('home/atualizar_cadastro', array('id'=>'form-cadastro')); ?>
                <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
                <div data-alert id="msg-cadastro"></div>
                <label>Nome</label>
                <?=form_input(array('name'=>'nome', 'placeholder'=> 'Nome do Jogador'), set_value('nome'), 'autofocus'); ?>
                <?=form_submit(array('name'=>'salvar_time', 'class'=>'button small'), 'Atualizar'); ?>
                <?=form_submit(array('name'=>'excluir_time', 'class'=>'button small'), 'Excluir'); ?>
                <?=form_submit(array('name'=>'pesquisar_time', 'class'=>'button small'), 'Pesquisar'); ?>
                <?=form_submit(array('name'=>'pesquisar_time', 'class'=>'button small', 'data-reveal-id'=>'modal-convidar-jogadores'), 'Convidar'); ?>
            <?=form_close(); ?>
        </div>        
    </div>
</div>
