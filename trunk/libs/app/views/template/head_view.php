<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title><?php
            echo Param::get('title');
            echo Param::get('description');
            ?>
        </title>
        <link rel="stylesheet" href="<?php echo Helpers::baseUrl('plugins/bootstrap/3.2.0/css/bootstrap.min.css"'); ?>" />
        <link rel="stylesheet" href="<?php echo Helpers::baseUrl('plugins/bootstrap/3.2.0/css/bootstrap-theme.min.css'); ?>" />      
        <script src="<?php echo Helpers::baseUrl("webroot/js/jquery-1.11.0.js"); ?>"></script>        
        <script src="<?php echo Helpers::baseUrl("webroot/js/jquery-ui-1.10.3.custom.min.js"); ?>"></script>        
        <link rel="stylesheet" href="<?php echo Helpers::baseUrl("/css/estilo.css"); ?>">
        <script src="<?php echo Helpers::baseUrl("webroot/js/sweet.min.js"); ?>"></script>
        <script src="<?php echo Helpers::baseUrl("js/script.js"); ?>"></script>
    </head>
    <body>
<?php // include 'google_analytics_view.php'; ?>
        <!-- <div class="wrapx">
            <div class="mainx">

                <div class="off-canvas-wrap">
                    <div class="inner-wrap">
                        <aside class="left-off-canvas-menu">

                            <ul class="off-canvas-list">
                                <li><label class="first">HOME</label></li>
                                <li><a href="<?php echo Helpers::baseUrl(''); ?> ">Página Inicial</a></li>
                            </ul>

                            <hr>

                            <ul class="off-canvas-list">
                                <li><label class="first">Minha Conta</label></li>
                                <li><a href="#">Meu Cadastro</a></li>
                            </ul>

                            <hr>

                            <ul class="off-canvas-list">
                                <li><label>Acesse</label></li>
                                <li class="gs"><p><a href="<?php echo Helpers::baseUrl('account/login'); ?>">Login</a></p></li>    
                            </ul>

                        </aside>
                        < ! - - MENU VISIVEL PARA TABLETS E CELULARES -- >    
                        <nav class="tab-bar show-for-small">
                            <a class="left-off-canvas-toggle menu-icon ">
                                <span>
                                    FuteONLINE
                                </span>
                            </a>  
                        </nav>

                        < ! - - MENU VISIVEL PARA PCS -- >    
                        <nav class="top-bar hide-for-small" data-topbar="">
                            <ul class="title-area">
                                <li class="name">
                                    <h1>
                                        <a href="<?php echo Helpers::baseUrl(''); ?>">
                                            <img src="<?php echo Helpers::baseUrl('css/img/logo.png'); ?>" width="120" alt="Gerenciado de equipes" title="FuteONLINE - Gerenciado de equipes"/>
                                        </a>
                                    </h1>
                                </li>
                            </ul>

                            <section class="top-bar-section">
                                <ul class="right">
                                    <li class="divider"></li>                    
                                <?php if (Param::get('users') != null) { ?>
                                    <li><a href="#">Agendar jogo</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= Helpers::baseUrl('friends'); ?>">Amigos</a></li>
                                    <li class="divider"></li>
                                    <li class="has-dropdown">
                                        <a href="#">Meu cadastro</a>
                                        <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">Voltar</a></h5></li>
                                            <li><a href="<?= Helpers::baseUrl('profile'); ?>">Perfil</a></li>
                                            <li><a href="<?= Helpers::baseUrl('friends/invite_friends'); ?>">Convidar Amigos</a></li>
                                            <li><a href="<?= Helpers::baseUrl('plans/user_plans'); ?>">Plano</a></li>
                                            <li><a href="<?= Helpers::baseUrl('friends/pending_invitation'); ?>">Solicitações</a></li>
                                            <li><a href="<?= Helpers::baseUrl('notify'); ?>">Notificações</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="has-dropdown">
                                        <a href="#">Gerenciar</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= Helpers::baseUrl('security/group_profile'); ?>">Grupo</a></li>
                                            <li><a href="<?= Helpers::baseUrl('security/group_moderator'); ?>">Moderadores</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="has-dropdown">
                                        <a href="#">Futebol</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Agendar jogo</a></li>
                                            <li><a href="<?= Helpers::baseUrl('sport/soccer_team'); ?>">Times</a></li>
                                            <li><a href="<?= Helpers::baseUrl('sport/players'); ?>">Players</a></li>
                                        </ul>                                                
                                    </li>                 
                                <?php } ?>
                                <?php if (Param::get('user') == null) { ?>
                                    <li>
                                        <a href="<?php echo Helpers::baseUrl('account/login'); ?>">Login</a>
                                    </li>
                                <?php } ?>
                                </ul>
                            </section>
                        </nav>



-->