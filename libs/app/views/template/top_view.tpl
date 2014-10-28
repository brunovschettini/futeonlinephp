<div class="navbar navbar-inverse" role="navigation" style="border-radius: 0; background: #333333;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">FuteONLINE</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?= Helpers::baseUrl(''); ?>">
                        <img src="<?php echo Helpers::baseUrl('css/img/logo.png'); ?>" style="width: 80px;"/>
                    </a>
                <li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Web<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="#">Meu cadastro</a></li>
                        <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">Voltar</a></h5></li>
                            <li><a href="<?= Helpers::baseUrl('account/profile'); ?>">Perfil</a></li>
                            <li><a href="<?= Helpers::baseUrl('friends/invite_friends'); ?>">Convidar Amigos</a></li>
                            <li><a href="<?= Helpers::baseUrl('plans/user_plans'); ?>">Plano</a></li>
                            <li><a href="<?= Helpers::baseUrl('friends/pending_invitation'); ?>">Solicitações</a></li>
                            <li><a href="<?= Helpers::baseUrl('notify'); ?>">Notificações</a></li>
                        </ul>
                    </ul>
                    <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="#">Segurança</a></li>
                        <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">Voltar</a></h5></li>
                            <li><a href="<?= Helpers::baseUrl('security/group_profile'); ?>">Grupo</a></li>
                            <li><a href="<?= Helpers::baseUrl('security/group_moderator'); ?>">Moderadores</a></li>
                        </ul>
                    </ul>
                    <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="#">Gerenciar</a></li>
                        <ul class="dropdown">
                            <li class="title js-generated"></li>
                            <li><a href="#">Agendar jogo</a></li>
                            <li><a href="<?= Helpers::baseUrl('sport/soccer_team'); ?>">Times</a></li>
                            <li><a href="<?= Helpers::baseUrl('sport/players'); ?>">Players</a></li>
                        </ul>
                    </ul>
                </li>
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