
<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $pegar_ip = $_SERVER['REMOTE_ADDR'];
    $dia_visita = date("d-m-Y");
    $horas_visita = date("H:i:s");
    $sobrenome = $_POST['sobrenome'];

    $strcon = mysqli_connect('mysql873.umbler.com','inovacaoadm','ale19020','inovacaodb') or die('Erro ao conectar ao banco de dados');

    $sql = "INSERT INTO leads VALUES ";
    $sql .= "('$nome', '$email', '$area', '$pegar_ip', '$dia_visita', '$horas_visita', '$sobrenome')"; 

    mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($strcon);
?>

    <?php
     
    function validaemail($email){
        //verifica se e-mail esta no formato correto de escrita
        if (!ereg('^([a-zA-Z0-9.-_])*([@])([a-z0-9]).([a-z]{2,3})',$email)){
            $mensagem='E-mail Inv&aacute;lido!';
            return $mensagem;
        }
        else{
            //Valida o dominio
            $dominio=explode('@',$email);
            if(!checkdnsrr($dominio[1],'A')){
                $mensagem='E-mail Inv&aacute;lido!';
                return $mensagem;
            }
            else{return true;} // Retorno true para indicar que o e-mail é valido
        }
    }
     
    ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <!-- /.website title -->
        <title>Inovação Profissional</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.png"/>    

        <!-- Colors -->
        <link href="css/css-index.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

        <!-- GOOGLE ANALYTICS -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-102737318-1', 'auto');
          ga('send', 'pageview');
        </script>
        
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/t-background.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href="http://www.inovacaoprofissional.com.br"><img src="images/logo-home.png" style="width: 134px; height: 50px;" alt="logo"></a></div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Queremos ajudar as pessoas a encontrarem a transformação de suas carreiras.
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <p>Através de conteúdo relevante, queremos ajudar as pessoas a transformarem sua vida profissional.</p>
                            </div>                




                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5">

                            <div class="signup-header wow fadeInUp">
                                <h3 class="form-title text-center">Obrigado por se cadastrar</h3>
                                
                                    <div class="form-group last">
                                        <a href="http://www.inovacaoprofissional.com.br/COMO-O-GAMA-PODE-REVOLUCIONAR-SUA-CARREIRA.pdf" target="_blank">
                                            <input type="submit" class="btn btn-warning btn-block btn-lg" value="BAIXAR E-BOOK">
                                        </a>
                                    </div>

                                    <div class="form-group last">
                                        <a href="http://www.inovacaoprofissional.com.br/blog.html">
                                            <input type="submit" class="btn btn-warning btn-block btn-lg" value="IR PARA O BLOG">
                                        </a>
                                    </div>
                                    <p class="privacy text-center">Não, não vamos compartilhar seu e-mail. Nós <strong>ODIAMOS</strong> spam!</p>
                                </form>
                            </div>              

                        </div>
                    </div>
                </div> 
            </div> 
        </div>
       

        <!-- /.contact section -->
        <div id="contact">
            <div class="contact fullscreen parallax" style="background-image:url('images/transforme.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="row contact-row">

                            <!-- /.address and contact -->
                            <div class="col-sm-5 contact-left wow fadeInUp">.
                                <img src="images/e-book.png" class="img-responsive" alt="E-book Guia para você inovar na sua carreira"></a>
                                <ul class="ul-address">                         
                                    <li><i class="pe-7s-mail"></i><a href="mailto:contato@inovacaoprofissional.com.br">contato@inovacaoprofissional.com.br</a></li>
                                    <li><i class="pe-7s-look"></i><a href="#">www.inovacaoprofissional.com.br</a></li>
                                </ul>   

                            </div>

                            <!-- /.contact form -->
                            <div class="col-sm-7 contact-right">
                                <h2 class="wow fadeInRight" style="padding: 20px; text-align: center;">Indique um amigo que gostaria de receber também!</h2>
                                <form method="POST" id="contact-form" class="form-horizontal" action="thank-you.php" onSubmit="alert( 'Parabéns, seu amigo irá adorar receber!' );">
                                    <div class="form-group">
                                        <input type="text" name="nome" id="Name" class="form-control wow fadeInUp" placeholder="Digite o nome do seu amigo" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="sobrenome" id="Sobrenome" class="form-control wow fadeInUp" placeholder="Digite o sobrenome do seu amigo" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="Email" class="form-control wow fadeInUp" placeholder="Digite o melhor e-mail do seu amigo" required/>

                                    </div> 
                                    <div class="form-group">
                                    <label style="color:#fff;">Qual área de atuação do seu amigo?</label>
                                        <select name="area" size="1" required>
                                          <option value="desenvolvimento">Desenvolvimento</option>
                                          <option value="design">Design</option>
                                          <option value="marketing">Marketing</option>
                                          <option value="vendas">Vendas</option>
                                        </select> 
                                    </div>
                 
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Enviar para amigo!" class="btn btn-success wow fadeInUp" />
                                    </div>
                                </form>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <!-- /.social links -->
                    <div class="social text-center">
                        <ul>
                            <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>  
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">Feito com amor pela <strong>Inovação Profissional</strong></div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>  
            </div>  
        </footer>

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
                                    new WOW().init();
        </script>
    </body>
</html>