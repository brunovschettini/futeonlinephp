<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title><?=Param::get('title'); echo Param::get('description');?></title>
        <link rel="stylesheet" href="<?php echo Helpers::baseUrl("plugins/foundation/css/normalize.css");?>">
        <link rel="stylesheet" href="<?php echo Helpers::baseUrl("plugins/foundation/css/foundation.css");?>">                
        <script src="<?php echo Helpers::baseUrl("plugins/foundation/js/vendor/custom.modernizr.js");?>"></script>        
        <script src="<?php echo Helpers::baseUrl("webroot/js/jquery-1.10.2.min.js");?>"></script>        
        <script src="<?php echo Helpers::baseUrl("webroot/js/jquery-ui-1.10.3.custom.min.js");?>"></script>        
        <script src="<?php echo Helpers::baseUrl("webroot/js/sweet.min.js");?>"></script>
    </head>
    <body>
        <div class="row">
            <div class="columns large-2">
                <img src="<?php echo Helpers::baseUrl("webroot/img/logo.png");?>" style="height: 100px;"/>
            </div>
            <div class="columns large-10">
                <h1 style="color: red;">Sweet PHP - Framework Brazil</h1>
            </div>
        </div>
        <div class="row" style="margin-top: 15px; border-top: 1px solid gray">
            <div class="columns large-12">
                <ul>
                    <li>Desenvolva suas aplicações;</li>
                    <li>Produção otimizada;</li>
                    <li>Colabore;</li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-top: 15px; border-top: 1px solid red">
            <div class="columns large-12">
                <h3>Inicie seu formulário aqui</h3>
                <form class="sweetForm" name="Welcome">
                    <input type="text" name="User[login]" placeholder="Escreva algo aqui"/>
                    <input type="submit" name="action" class="sweetInputSubmit" data-action="contact" value="Contato" data-return=".returnAjax" data-update="idCliqueAqui"/>
                    <input type="submit" name="action" class="sweetInputSubmit" data-action="backIndex" value="Inicio" />
                </form>
                <span class="returnAjax" style="color: red;">Seu retorno do ajax aqui!</span>
                <br />
                <br /> 
                <input type="submit" class="sweetInputSubmit" name="action" value="Clique aqui!!!" onclick="alert('Testado')" id="idCliqueAqui"/>
                <br />
                <br />
                <input class="sweetClick" type="submit" name="action" value="Página 2" data-config="{'request':'Welcome','dataAction':'getpage2'}"/>
            </div>
        </div>
        <script src="<?php echo Helpers::baseUrl("plugins/foundation/js/foundation.min.js");?>"></script>
        <script>
            $(document).foundation();
        </script>        
    </body>
</html>