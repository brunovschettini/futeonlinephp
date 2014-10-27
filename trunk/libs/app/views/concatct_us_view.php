<?php include('template/head_view.php');?>
<div class="row">
    <div class="large-12 columns">
        <h1 style="color: #008cba">Fale conosco</h1>
    </div>   
</div>
<div class="row">
    <div class="large-6 columns">
        <div class="panel radius">
            <?php //echo form_open('home/login'); ?>
                <label>Nome</label>
                <?php //echo form_input(array('name'=>'nome', 'placeholder'=> 'Nome'), set_value('nome')); ?>
                <label>E-mail</label>
                <?php //echo form_input(array('name'=>'email', 'placeholder'=> 'E-mail'), set_value('email')); ?>
                <label>Assunto</label>
                <?php //echo form_input(array('name'=>'assunto', 'placeholder'=> 'Assunto'), set_value('assunto')); ?>
                <label>Mensagem</label>
                <?php //echo form_textarea(array('name'=>'mensagem', 'placeholder'=> 'Mensagem', 'cols'=>'50', 'rows'=>'10', 'style'=>'height:100px;', 'class'=>'no-resize', 'maxlength'=>'255'), set_value('mensagem')); ?>
                <?php //echo form_submit(array('name'=>'enviar_mensagem', 'class'=>'button small, margin-top-max'), 'Enviar'); ?>
            <?php //echo form_close(); ?>
        </div>
    </div>
    <div class="large-6 columns" style="marg">
        <p>...</p>
    </div>
</div>
<?php include('template/footer_view.php');
