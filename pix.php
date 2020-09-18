<?php
/*  
Template Name: PIX 
*/

    // $home = get_template_directory_uri();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://bpp.com.br/wp-content/uploads/2018/06/cropped-favicon-1-32x32.png" sizes="32x32">
    <link rel="icon" href="https://bpp.com.br/wp-content/uploads/2018/06/cropped-favicon-1-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="https://bpp.com.br/wp-content/uploads/2018/06/cropped-favicon-1-180x180.png">
    <title>BPP. A primeira em PIX</title>

    <meta name="description" content="Seja você também o primeiro.
    Implemente a API da BPP para pagamentos instantâneos. 100% digital e super seguro.
    Muito mais econômico, com menos fricção e mais dados.
    Mais inteligência para seu negócio.
    Saia na frente com a API PIX da BPP." />

    <link rel="canonical" href="https://bpp.com.br/pix-pagamentos-instantaneos/" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bpp.com.br/wp-content/themes/site-bpp/assets/corp/css/main.css">
    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/css/custom.css"> -->
    <link rel="stylesheet" href="assets/pix/css/custom.css">
   

    <style>
        @font-face {
            font-family: Uni-Sans; 
            src: url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_bold-webfont.woff2) format("woff2"), url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_bold-webfont.woff) format("woff");
            font-weight: 900;
            font-style: normal
        }
        
        @font-face {
            font-family: Uni-Sans;
            src: url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_thin-webfont.woff2) format("woff2"), url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_thin-webfont.woff) format("woff");
            font-weight: 300;
            font-style: normal
        }
        
        @font-face {
            font-family: Uni-Sans;
            src: url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_regular-webfont.woff2) format("woff2"), url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_regular-webfont.woff) format("woff");
            font-weight: 500;
            font-style: normal
        }
        
        @font-face {
            font-family: Uni-Sans;
            src: url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_semi_bold-webfont.woff2) format("woff2"), url(<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/fonts/uni_sans_semi_bold-webfont.woff) format("woff");
            font-weight: 700;
            font-style: normal
        }
    </style>

    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5ZCPDPG');</script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZCPDPG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav id="menu-mae">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <a class="navbar-brand" href="">
                <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/logo.svg" alt="">
            </a>
            <div class="d-flex align-items-center">
                <div class="nav-item d-none d-lg-block pr-lg-3">

                </div>
                <div class="nav-item">
                    <legend class="c-white text-right mb-0">FALE COM UM ESPECIALISTA.</legend>
                    <a href="tel:+551135880301">
                        <h2 class="c-white bold">(011) 3588-0301</h2>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <section id="header-corp">
        <div class="container">
            <div class="row flex-column align-items-start pt-3">
                <h1 class="w-100 c-white">BPP. A primeira em PIX.</h1>
                <div class="col-12 col-lg-5 pb-0">
                    <p class="text-center text-md-right c-white mb-3 pb-0">
                        Seja você também o primeiro.<br class="d-none d-lg-block">
                        Implemente a API da BPP<br class="d-none d-lg-block"> para pagamentos instantâneos.<br class="d-none d-lg-block"> 100% digital e super seguro.<br class="d-none d-lg-block"> Muito mais econômico, com<br class="d-none d-lg-block"> menos fricção e mais dados.<br class="d-none d-lg-block"> Mais inteligência para seu negócio.<br class="d-none d-lg-block"> Saia na frente com a API PIX da BPP. 
                </div>
            </div>
        </div>
    </section>

    <section id="first-box-corp" class="pb-5 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-wrap col-12 col-lg-6 order-1 order-lg-1 pt-5 pt-lg-0 text-center text-lg-left">
                    <div class="topo">
                        <p class="c-blue">A BPP é a primeira a desenvolver uma API do PIX para fintechs, provedores de soluções financeiras e grandes varejistas. Empresas que pensam à frente do mercado e precisam de um sistema de pagamento veloz, confiável, sem fricção e com foco no cliente, com informações do comprador para uso em BI.</p>
                        <h5>Nada se compara à solução PIX da BPP:</h5>
                    </div>

                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start pb-4 pt-5 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './img'  ?>/assets/pix/ultra-rapido_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Ultra rápido </h4>
                        <p>Pagamentos instantâneos onde quem paga e recebe tem a informação em real time.</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/revolucionarios_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Revolucionário </h4>
                        <p>Imagine o efeito da QR Code Economy. É isso que o PIX pode fazer em seus negócios.</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 pt-md-3 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/economico_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Econômico </h4>
                        <p>Operações 80% mais baratas que a TED</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 pt-md-3 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/agil_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Ágil </h4>
                        <p>Recurso disponíveis imediatamente na conta do recebedor</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 pt-md-3 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/seguro_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Seguro </h4>
                        <p>Ambiente de segurança similar ao SPB (Sistema de Pagamentos Brasileiro)</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 pt-md-3 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/rastreavel_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Rastreável </h4>
                        <p>A transação pode conter informações agregadas que auxiliam na conciliação e no cruzamento de informações com ERPs e CRMs</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 pt-md-3 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/integracao_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Integração simples </h4>
                        <p>API já homologada e de fácil integração com seus sistemas</p>
                    </div>
                    <div class="col-12 col-md-6 flex-column align-items-center align-items-md-start py-4 pt-5 pt-md-3 w-100 w-md-50 text-center text-lg-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/sem-intermediarios_.svg" alt="" class="mx-auto mx-lg-0">
                        <h4 class="py-3 w-100"> Comunicação P2P </h4>
                        <p>Da conta do pagador direto para a do recebedor</p>
                    </div>
                </div>

                <div class="section-301-img order-2"></div>

                <div class="section__301-mobile col-12 order-2">
                    <h2 class="section__301-title">Bank AS A Service</h2>
                    <h3 class="section__301-subtitle">BPP 301</h3>
                    <p class="section__301-info">Única plataforma de Open-Banking já pronta para o futuro</p>
                    <p class="section__301-text">Conheça o conceito Easy-Banking. Uma solução completa envolvendo tecnologia, conta de liquidação no SPB e regulatório para plugar e usar. Em vez de gastar milhares de horas e recursos desenvolvendo, unindo pontas e buscando regularizações, com BPP 301, você resolve tudo em um só lugar.</p>
                    <a href="https://bpp.com.br/bank-as-a-service/">
                        <button class="section__301-btn">Inove Agora</button>
                    </a>
                </div>

                <div class="col-12 col-lg-6 order-3 order-lg-2 box-content-form">
                    <h2>O PIX representa a abertura de novas possibilidades para os negócios.</h2>
                    <p class="subtitle c-blue">
                        Coloque sua organização à frente da QR Code Economy e da maior revolução em meios de pagamentos dos últimos 100 anos.
                    </p>
                    <div class="box-form pt-lg-5 px-lg-5 pb-lg-3">
                        <h3 class="pt-5 pt-lg-0 c-dark-blue text-center pb-1">Implemente já o PIX.<br class="d-block d-md-none"> O futuro do pagamento.</h3>
                        <h5 class="text-center c-grey pb-3">Preencha o formulário abaixo que<br class="d-block d-md-none"> entraremos em contato</h5>
                        <form id="contato-form-m" action="/pix-obrigado">
                            <div class="form-group">
                                <input class="form-control mb-2" name="nome" id="nome" placeholder="Nome*">
                                <input class="form-control mb-2" name="email" id="email" type="e-mail" placeholder="E-mail*">
                                <input class="form-control mb-2" name="telefone" id="telefone" placeholder="Telefone*">
                                <input class="form-control mb-2" name="empresa" id="empresa" placeholder="Empresa*">  
                                <input class="form-control mb-2" name="cargo" id="cargo" placeholder="Cargo">
                            </div>
                            <h6 class="c-grey text-left mb-4">* Campos obrigatórios</h6>
                            <div id="texto-obrigado" class="col-12 align-items-center justify-content-center d-flex pb-5">
                                <button class="btn btn-primary w-100" type="submit">FALE COM A BPP</button>
                            </div>
                        </form>
                        <p id="error_msg" style="color:red;"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section__301-desktop col-12 order-2">
        <h2 class="section__301-title">Bank AS A Service</h2>
        <h3 class="section__301-subtitle">BPP 301</h3>
        <p class="section__301-info">Única plataforma de Open-Banking já pronta para o futuro</p>
        <p class="section__301-text">Conheça o conceito Easy-Banking. Uma solução completa envolvendo tecnologia, conta de liquidação no SPB e regulatório para plugar e usar. Em vez de gastar milhares de horas e recursos desenvolvendo, unindo pontas e buscando regularizações, com BPP 301, você resolve tudo em um só lugar.</p>
        <a href="https://bpp.com.br/bank-as-a-service/">
            <button class="section__301-btn">Inove Agora</button>
        </a>
    </div>
    <footer>
        <div class="container">
            <div class="row py-4 align-items-center">
                <div class="col-12 col-lg-9 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-start">
                    <p class="c-steel-grey">© BPP 2020. Todos os direitos reservados.</p>
                </div>
                <div class="offset-1 offset-lg-0 pb-4 py-lg-0 col-10 d-flex justify-content-center col-lg-3 media-box order-1 order-lg-2">
                    <a href="https://www.instagram.com/oficialbpp/" class="media-link"></a>
                    <a href="https://www.linkedin.com/company/oficialbpp/" class="media-link"></a>
                    <a href="https://twitter.com/oficialbpp" class="media-link"></a>
                    <a href="https://www.facebook.com/oficialbpp" class="media-link"></a>
                    <a href="https://www.youtube.com/c/bppoficial" class="media-link"></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script> -->
    <script src="https://bpp.com.br/wp-content/themes/site-bpp/assets/js/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://bpp.com.br/wp-content/themes/site-bpp/assets/corp/vendor/jquery-key-restrictions.min.js"></script>
    <!-- <script src="https://bpp.com.br/wp-content/themes/site-bpp/assets/promo/js/form.js"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri(); './'  ?>/assets/pix/js/form.js"></script>
    <script src="https://bpp.com.br/wp-content/themes/site-bpp/assets/corp/js/main.js"></script>
    <script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
    <script>
        CamposForm('PIX');
    </script>


</body>



</html>