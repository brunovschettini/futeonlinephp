<!DOCTYPE html>
<!--[if IE 9]><html class = "lt-ie10" lang = "en" > <![endif] -->
<html class = "no-js" lang = "en">
<head>
<!--HEAD -->
<?php include 'template/head_view.php';
?>
<!--/ HEAD -->
</head>
<body role="document">
    <!-- GOOGLE ANALYTICS -->
<?php // include 'template/google_analytics_view.php'; ?>
    <!--/ GOOGLE ANALYTICS -->
    <div class="wrap">
        <!-- TOP -->
<?php  include 'template/top_view.tpl'; ?>
        <!--/ TOP -->
        <!-- MAIN -->
        <div class="container margin-bottom-max" role="main">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel bg-home">
                        <div class="panel-heading">
                            <h2 style="color: red">Aproveite todas as vantagens com 1 ano de licença Free</h2>
                        </div>
                        <div class="panel-body">
                            <h3>Principais recursos</h3>
                            <ul class="list-unstyled">
                                <li><i>- Cadastre aquele futebol de fim de semana;</i></li>
                                <li><i>- Convide alguns amigos;</i></li>
                                <li><i>- Comente jogos;</i></li>
                                <li><i>- Veja as estatísticas do seu time;</i></li>
                                <li><i>- Compartilhe os resultados;</i></li>
                                <li><i>- A melhor ferramenta para Gestão Esportiva.</i></li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <h5><a href="<?php echo Helpers::baseUrl('account/register'); ?>" class="btn btn-success" title="Cadastre-se agora">Cadastre-se agora</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-home-responsive" style="background: #3e805d; border: 0">
                <div class="row" style="width: 100%;">
                    <div class="col-lg-12">
                        <img src="<?php echo Helpers::baseUrl('css/images/como-funciona-texto.png'); ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="columns large-12 margin-bottom-max">
                        <img src="<?php echo Helpers::baseUrl('css/images/como-funciona.png'); ?>" />
                    </div>
                </div>                
            </section>
            <div class="row" style="margin-top: 20px">
                <div class="col-lg-12 text-center">
                    <h1><?php ?></h1>
                </div>
            </div>
            <div class="row margin-top-med">

                <div class="col-lg-4">
                    <div class="panel sobre border-dotted">
                        <div class="panel-heading">
                            <h2>Sobre</h2>                            
                        </div>
                        <div class="panel-body">
                            <p>Aplicativo para equipes de futebol desenvolvido por Ilines e Publ.</p>
                            <p>Ideal para gerenciar resultados de futebol amador à profissional.</p>
                            <p>Diversão garantida com seus amigos.</p>
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4">
                    <div class="panel como-usar">
                        <div class="panel-heading">
                            <h2>Como usar?</h2>                            
                        </div>
                        <div class="panel-body">
                            <p>Faça seu cadastro clicando no botão <a href="<?php echo Helpers::baseUrl('security/register'); ?>">Cadastro</a>.</p>
                            <p>Após realizar o cadastro receberá um e-mail de confirmação e pronto pode começar a cadastrar seu torneio, equipe e jogadores.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="panel quem-usa">
                        <div class="panel-heading">
                            <h2 class="font-color-white">Quem usa?</h2>                            
                        </div>
                        <div class="panel-body">
                            <p class="font-color-white">Seus amigos, seu patrão, seu time campeão.</p>
                            <p class="font-color-white">Qualquer um pode usar o App gratuitamente, basta realizar o cadastro e aproveitar todos os recursos disponibilizados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN -->
    <!-- FOOTER -->
<?php include 'template/footer_view.php'; ?>
    <!--/ FOOTER -->
</body>
</html>