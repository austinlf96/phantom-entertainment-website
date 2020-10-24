<!DOCTYPE HTML>

<?php

    // GLOBAL PHP VARIABLE DEFINITIONS

    error_reporting(E_ALL ^ E_WARNING);

    $pageTitle = $_GET['title'];
    $pageExtra = $_GET['extra'];
    $loadPage = "data/" . $pageTitle . ".php";

    $page404 = "<h4><span class='fa fa-exclamation-triangle text-danger'></span> Unfortunately it looks like you came across a page that doesn't currently exist... or does it exist in another dimension... far far away? Either way, please try again and if you continue to receive this problem please feel free to let us know about it so we can change that!</h4>";

?>

<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <!-- HTML HEAD -->
    <head>
        <!-- GENERAL META INFORMATION -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width" />
        <meta name="author" content="phantom entertainment"/>
        <meta name="copyright" content="Copyright 2020 Phantom Entertainment"/>
        <meta name="revisit-after" content="7 days" />
        <meta name="robots" content="index,follow"/>
        <link href="https://plus.google.com/100889473177341600834" rel="publisher" />
        <meta name="msvalidate.01" content="FEE49A92EA8AFDE449D778D83CE9A953" />
        <meta name="sitelock-site-verification" content="2455" />	
        <meta name="description" content="Inflatable party rental, mechanical bull rental, mobile zip line rental, mobile escape rooms, moon bounce rental, casino parties, mechanical bulls, and more. Book today!" />
        <meta name="abstract" content=" mechanical bull rentals, inflatable party rental, inflatable games, mobile zip line, party rentals, Casino parties, amusements, inflatables, novelties, parties, events, inflatable games, mobile escape rooms" />

        <!-- CANONICAL INFORMATION FOR PAGE -->
        <!--<link rel="canonical" href="http://www.djphantom.com/" />-->

        <!-- OPEN GRAPH MEDIA SHARING INFORMATION -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Phantom Entertainment Services" />
        <meta property="og:description" content="Inflatable party rental, mechanical bull rental, mobile zip line rental, moon bounce rental, casino parties, mechanical bulls, and more. Book today!" />
        <meta property="og:url" content="http://www.djphantom.com/" />
        <meta property="og:site_name" content="Phantom Entertainment Services" />
        <meta property="og:image" content="http://www.djphantom.com/Buttons/BLACK-BANNER.gif" />

        <!-- TWITTER CARD SHARING INFORMATION -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:description" content="Inflatable party rental, mechanical bull rental, mobile zip line rental, moon bounce rental, casino parties, mechanical bulls, and more. Book today!" />
        <meta name="twitter:title" content="Phantom Entertainment Services" />
        <meta name="twitter:image" content="http://www.djphantom.com/Buttons/BLACK-BANNER.gif" />

        <!-- EXTERNAL STYLESHEETS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- INTERNAL STYLESHEETS -->
        <style type="text/css">
            a:link {text-decoration: none}
            a:visited {text-decoration: none}
            a:active {text-decoration: none}
            a:hover {text-decoration: underline}

            .menu_card {width: 150px; height: 150px;}
            .item_card {width: 175px; height: 200px;}
            .foot_card {padding: 0px;}
            .foot_card:hover {background-color: rgba(62, 195, 200, 0.5);}
            .cat_card {width: 175px;}
            .cat_card:hover {background-color: rgba(62, 195, 200, 0.5);}
            .text_overlay {background-color:rgba(120, 120, 120, 0.75);}
            .unit_card { max-width: 175px;  max-height: 175px;}
        </style>

        <!-- EXTERNAL SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/3023068b43.js" crossorigin="anonymous"></script>
        <script src="phantom.js"></script>

        <!-- INTERNAL SCRIPTS -->
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <!--<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-1103608-1', 'auto', {'allowlinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['inflatableoffice.com'] );
            ga('send', 'pageview');
        </script>-->

        <!-- INFLATABLE OFFICE TRACKER -->
        <!--<img src="//inflatableoffice.com/include/iotracking.php" style="display:none;" />-->

        <!-- FACEBOOK -->
        <!--<script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>-->

        <!-- PAGE TITLE, FAVICON -->
        <title>Phantom Entertainment Services</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    </head>

    <!-- HTML BODY -->
    <body style="background-color: #FFFFFF; margin: 0px;">

        <!-- FACEBOOK PLUGIN -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="02NYMhBL"></script>

        <!-- BODY - HEADER BAR -->
        <div class="container-fluid" style="background-color: #000000; padding: 0px;">
            <div class="row m-0">
                <div class="col-sm-12">
                    <img src="images/banner.png" class="img-fluid mx-auto d-none d-sm-block" />
                    <img src="images/banner_mini.png" class="img-fluid mx-auto d-block d-sm-none" />
                </div>
            </div>
        </div>

        <!-- BODY - HORIZONTAL NAV BAR -->
        <div class="container-fluid shadow-sm mb-4" style="padding: 0px;">
            <?php include "menus/top_nav_bar.php"; ?>   
        </div>

        <!-- BODY - MAIN -->
        <div class="container-fluid mb-4" style="padding: 0px;">
            <div class="row m-0">

                <!-- FILLER -->
                <div class="col-lg-1"></div>

                <!-- BODY - MAIN - LEFT MENU PANEL -->
                <div class="col-lg-2">
                    <?php include "menus/left_menu_bar.php"; ?>
                </div>

                <!-- BODY - MAIN - CENTRAL INFORMATION PANEL -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <?php
                                if($pageExtra == "none")
                                {
                                    $myfile = fopen($loadPage, "r");
                                    $fileContents = fread($myfile,filesize($loadPage));
                                    if(empty($fileContents))
                                    {
                                        echo $page404; 
                                    } else {
                                        echo $fileContents;
                                    }
                                    fclose($myfile);
                                } else {
                                    include $loadPage;
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- BODY - MAIN - RIGHT MENU PANEL -->
                <div class="col-lg-2">
                    <?php include "menus/right_menu_bar.php"; ?>
                </div>

                <!-- FILLER -->
                <div class="col-lg-1"></div>
            </div>
        </div>

        <!-- BODY - FOOTER -->
        <div class="container-fluid shadow-sm" id="page_bottom" style="padding: 0px;">
            <?php include "menus/footer_bar.php"; ?>
        </div>

    </body>
</html>