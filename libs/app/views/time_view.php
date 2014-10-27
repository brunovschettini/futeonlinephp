<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Times</h1>
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
                    <p><i>Logo</i></p>
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
                <?=form_input(array('name'=>'nome', 'placeholder'=> 'Nome do time'), set_value('nome'), 'autofocus'); ?>
                <?=form_submit(array('name'=>'salvar_time', 'class'=>'button small'), 'Atualizar'); ?>
                <?=form_submit(array('name'=>'excluir_time', 'class'=>'button small'), 'Excluir'); ?>
                <?=form_submit(array('name'=>'pesquisar_time', 'class'=>'button small'), 'Pesquisar'); ?>
            <?=form_close(); ?>
        </div>        
    </div>
</div>
