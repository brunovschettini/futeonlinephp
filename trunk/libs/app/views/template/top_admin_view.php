<div class="site-header">
    <div class="row">
        <a href="<?= Helpers::baseUrl(''); ?>">
            <img src="<?php echo Helpers::baseUrl('webroot/img/logo.png'); ?>" style="margin: 70px;"/>
        </a>
    </div>
    <?php
    $userid = -1;
    if (Session::exists('sessionUser')) {
        $userid = Session::get('sessionUser');
    }
    if ($userid > 0) {
        ?><div class="position-absolute" style="top: 0; right: 15px; width: 300px; text-align: right">
            <div class="row">
                <div class="columns large-6" style="margin-bottom: 15px!important">
                    <p>
                        <?php
                        $em = new EntityManager();
                        $users = new users();
                        $users = $em->find(new users(), $userid);
                        echo "Ola " ;//. $users->people->name;
                        ?>
                    </p>
                </div>
                <div class="columns large-6" style="margin-bottom: 15px!important">
                    <form name="Pagina" class="sweetForm">
                        <a href="<?= Helpers::baseUrl('pagina/logout_admin'); ?>">Sair</a> 
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div class="navbar navbar-default" role="navigation" style="border-radius: 0;">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edição<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo Helpers::baseUrl('editions/page'); ?>">Página</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Suporte</li>
                        <li><a href="<?php echo Helpers::baseUrl('panel/group_category'); ?>">Grupo Categoria</a></li>
                        <li><a href="<?php echo Helpers::baseUrl('panel/category'); ?>">Categoria</a></li>
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