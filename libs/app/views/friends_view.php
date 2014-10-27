<?php include('template/head_view.php'); ?>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Meus Amigos</h1>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <form name="Perfil" class="sweetForm"  >
            <div class="messages"></div>
            <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
            <div class="row">
                <?php ?>
                <div class="large-12 columns">
                    <p>Nenhum amigo encontrado.</p>
                    <a href="<?php echo Helpers::baseUrl('friends/invite_friends'); ?>" class="button">Convide seus primeiros</a>
                </div>
                <? ?>
                <?php ?>
                <div class="large-12 columns">
                    <a href="<?php echo Helpers::baseUrl('friends/invite_friends'); ?>" class="button">+ Convidar Amigos</a>
                    <a href="<?php echo Helpers::baseUrl('friends/pending_invitation'); ?>" class="button">Ver convites pendentes</a>
                </div>
                <? ?>
            </div>
            <div class="row">
                <?php ?>
                <div class="large-4 columns">
                    <div class="panel">
                        <h5><a href="<?php echo Helpers::baseUrl('friends/1'); ?>" title="Ver perfil">Nome</a></h5>
                        <p>Nascimento: </p>
                        <p></p>
                    </div>
                </div>
                <div class="large-4 columns">
                    <div class="panel">
                        <h5><a href="<?php echo Helpers::baseUrl('friends/1'); ?>" title="Ver perfil">Nome</a></h5>
                        <p>Nascimento: </p>
                        <p></p>
                    </div>
                </div>
                <div class="large-4 columns">
                    <div class="panel">
                        <h5><a href="<?php echo Helpers::baseUrl('friends/1'); ?>" title="Ver perfil">Nome</a></h5>
                        <p>Nascimento: </p>
                        <p></p>
                    </div>
                </div>
                <? ?>
            </div>
        </form>
    </div>
</div> 
<?php
include('template/footer_view.php');
