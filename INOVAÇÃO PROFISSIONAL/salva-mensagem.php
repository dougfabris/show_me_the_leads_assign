<?php 
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$area = $_POST['area'];

	$result_leads = "INSERT INTO leads(nome, email, area) VALUES ($nome, $email, $area)";

	$resultado_leads = mysqli_query($conn, $result_leads);
?> 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- /.website title -->
        <title>Blog da Inovação Profissional</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/css-index.css" rel="stylesheet" media="screen">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1325" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="images/logo.png" alt="logo"></a></div>
                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Blog da Inovação Profissional
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInLeft">
                                <p>Aqui você encontra vários conteúdos que vão ajudar você à transformar sua carreira   .</p>
                            </div>				  
                        </div> 
                    </div>
                </div> 
            </div> 
        </div>


        <!-- /.feature section -->
        <div id="policy">
            <div class="container">
                <div class="row">
                    <!-- /.apple devices image -->
                    <div class="col-md-10 col-md-offset-1">
                        
                        <ul>
                            <a href="#">
                            <li><h3>Novidades Tecnologicas: Como impactam na minha carreira?</h3></li>
                            </a>
                            <li>Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        </ul>
                        <p>
                            Epsum factorial non deposit quid pro quo hic escorol. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras augue lorem, convallis in fringilla in, gravida eu leo. Donec porta commodo elit, id tincidunt nunc vestibulum vel. Cras ante leo, tincidunt eu lacus eget, malesuada dictum enim. 
                        </p>	
                        <div class="text-center"><a href="index.html">Voltar para página principal</a></div>
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
                        <ul class="wow fadeInUp">
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>	
                    <div class="text-center wow fadeInUp">Feito com amor pela <strong>Inovação Profissional</strong></div>
                </div>	
            </div>	
        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>