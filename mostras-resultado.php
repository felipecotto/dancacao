<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Festival DancAção 2017</title>
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
        <div class="banner-2 page-4 margin-bottom-25">

        </div>
        
        <section id="home">
            <div class="container">
                <h2 class="title margin-bottom-25">Resultados</h2>
                <div>
                    <ul class="nav nav-tabs nav-tabs-resultados" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#dia1" aria-controls="dia1" role="tab" data-toggle="tab">Dia 17</a>
                        </li>
                        <li role="presentation">
                            <a href="#dia2" aria-controls="dia2" role="tab" data-toggle="tab">Dia 18</a>
                        </li>
                        <li role="presentation">
                            <a href="#dia3" aria-controls="dia3" role="tab" data-toggle="tab">Dia 19</a>
                        </li>
                        <li role="presentation">
                            <a href="#dia4" aria-controls="dia4" role="tab" data-toggle="tab">Dia 20</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="dia1">
                    <?php include 'layouts/_dia1.php';?>
                </div>
                <div role="tabpanel" class="tab-pane" id="dia2">
                    <?php include 'layouts/_dia2.php';?>
                </div>
                <div role="tabpanel" class="tab-pane" id="dia3">
                    <?php include 'layouts/_dia3.php';?>
                </div>
                <div role="tabpanel" class="tab-pane" id="dia4">
                    <?php include 'layouts/_dia4.php';?>
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

            // $(function() {
            //   $('a[href*="#"]:not([href="#"])').click(function() {
            //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            //       var target = $(this.hash);
            //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            //       if (target.length) {
            //         $('html, body').animate({
            //           scrollTop: target.offset().top
            //         }, 1000);
            //         return false;
            //       }
            //     }
            //   });
            // });
        </script>
    </body>
</html>
