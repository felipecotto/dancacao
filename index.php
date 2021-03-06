<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Festival DançAção 2017</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'layouts/_banner.php';?>
        <?php include 'layouts/_header.php';?>
        <div class="banner-2 page-1 margin-bottom-25">

        </div>
        
        <section id="home">
            <div class="container">
                <h2 class="title margin-bottom-25">O Festival</h2>
                <p class="text-justify margin-bottom-25">O 2ºFestival de Dança de Sorocaba - DançAção é um projeto desenvolvido para sensibilização, educação, produção e formação prática da dança voltado à população de Sorocaba e região. Promovido pela ASPD (Associação Sorocabana Pró-Dança), com o apoio da SECULTUR (Secretaria da Cultura e do Turismo de Sorocaba) e do FSS (Fundo Social de Solidariedade), o Festival de Dança, além de promover a dança, contribuir para a difusão cultural e sensibilizar a sociedade, também, será um polo de incentivo e de valorização dessa arte, de aperfeiçoamento não só de bailarinos, mas também de professores, de coreógrafos, de pesquisadores, arte-educadores, acadêmicos, produtores de arte e daqueles que estejam dispostos a trocar experiências e conhecimento.</p>
                <div class="text-center">
                    <h3 class="title">Regulamento</h3>
                    <a href="docs/regulamento_dancacao_2017.pdf" download class="btn-pad">Baixar versão PDF</a>

                    <h3 class="title"> Autorização para menores</h3>
                    <a href="docs/AUTORIZAÇÃO-MENORES_DANÇAÇÃO-2017.doc" download class="btn-pad">Baixar documento</a>
                </div>
            </div>
        </section>

        <?php include 'layouts/_footer.php';?>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function(){
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                }
            }

            $(function() {
              $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html, body').animate({
                      scrollTop: target.offset().top
                    }, 1000);
                    return false;
                  }
                }
              });
            });
        </script>
    </body>
</html>
