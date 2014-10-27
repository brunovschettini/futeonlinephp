<div class="site-header">
    <div class="row">
        <a href="<?= Helpers::baseUrl(''); ?>">
            <img src="<?php echo Helpers::baseUrl('webroot/img/logo.png'); ?>" style="margin: 70px;"/>
        </a>
    </div>
    <?php
    $userid = (int) Param::get('user_id');
    if ($userid > 0) {
        Helpers::redirect(array('uri' => 'panel'));
    }
    ?>
</div>
<div class="navbar navbar-inverse" role="navigation" style="border-radius: 0; background: #333333;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Ilines</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Web<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <a href="#">Meu cadastro</a>
                        <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">Voltar</a></h5></li>
                            <li><a href="<?= Helpers::baseUrl('profile'); ?>">Perfil</a></li>
                            <li><a href="<?= Helpers::baseUrl('friends/invite_friends'); ?>">Convidar Amigos</a></li>
                            <li><a href="<?= Helpers::baseUrl('plans/user_plans'); ?>">Plano</a></li>
                            <li><a href="<?= Helpers::baseUrl('friends/pending_invitation'); ?>">Solicitações</a></li>
                            <li><a href="<?= Helpers::baseUrl('notify'); ?>">Notificações</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Branding<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo Helpers::baseUrl('pagina/identidade_visual'); ?>">Identidade Visual</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo Helpers::baseUrl('#pagina/suporte_remoto'); ?>">Suporte Remoto</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo Helpers::baseUrl('pagina/produtos'); ?>">Produtos</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo Helpers::baseUrl(); ?>">Orçamento</a></li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo Helpers::baseUrl('pagina/portifolio'); ?>">Portifólio</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo Helpers::baseUrl('pagina/fale_conosco'); ?>">Fale Conosco</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Pesquisar" disabled="disabled">
                        </div>
                        <button type="submit" class="btn btn-default ui-icon-alert" disabled="disabled">Submit</button>
                    </form>
                </li>
                <li><a href="<?= Helpers::baseUrl(''); ?>">Inicio</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>