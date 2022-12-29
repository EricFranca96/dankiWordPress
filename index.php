<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danki - Temas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="imagens/logo.png" alt="imagem da logotipo"></div><!--LOGO-->
            </header>
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            <div class="menu-mobile">
                <i class="fa-solid fa-align-right"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul><!--MENU-MOBILE-->
            </div>
            <div class="clear"></div>
            <br>
            <br>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a target="_blank" href="https//dankicode.com">Ver demonstração</a>
            </div><!--w50-->
            <div class="w50 time-imagem">
                <img src="imagens/equipe.png" alt="Equipe">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--CENTER-->
    </section><!--TOPO-->
    <div class="circle"><i class="fa-sharp fa-solid fa-angle-down"></i></div>
    <section class="clientes-slider">
            
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-container">
                <img src="imagens/amazon.jpg">
                <img src="imagens/costco.jpg">
                <img src="imagens/dominos.jpg">
                <img src="imagens/uber.jpg">
                <img src="imagens/walmart.jpg">
            </div>
        </div><!--CENTER-->
    </section>

    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>
            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="imagens/icon1.png">
                        <h3>Ambientes mobile</h3>
                        <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div><!--BOX-SINGLE-DIFERENCIAIS-->
                <div class="box-single-diferenciais">
                    <img src="imagens/icon2.png">
                        <h3>Sites e intranets</h3>
                        <p>Um diálogo só acontece quando ambas as partes falam e escutam, garatem que seu público te entende.</p>
                </div><!--BOX-SINGLE-DIFERENCIAIS-->
                <div class="box-single-diferenciais">
                    <img src="imagens/icon3.png">
                        <h3>Comunicação one-to-one</h3>
                        <p>O digital veio pra ficar, sem duvidas, mas uma comunicação integrada de verdade exige clareza nas decisões.</p>
                </div><!--BOX-SINGLE-DIFERENCIAIS-->

            </div><!--ICONS-DIFERENCIAIS-->
        </div>

    </section>

    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <h2>Um time experiente,<br>comunicador e coeso.</h2>
                <p>A Product Runt que marcas fortes são construidas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                <br><br>
                Comunicar bem, de forma coerente e clara não é algo facil e estamos aqui para ajudar você e seu time. Você escolhe, Remoto ou presencial, para seu cliente ou público interno, você determina como vamos te ajudar.
                </p>
            </div><!--w50-->
            <div class="w50 img-time">
                <img src="imagens/time.png">
            </div><!--w50-->
            <div class="clear">

            </div>
        </div>
    </section>
    <section class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimento-single">
                    <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus vel odio, illo voluptatibus voluptates repellat assumenda sapiente minima rerum, perferendis asperiores et. Consequuntur itaque libero quibusdam, iure dignissimos asperiores incidunt?"</p>
                    <p>Eric França</p>
                    <img src="imagens/eric.jpeg">
                </div><!--DEPOIMENTOS-SINGLE-->
                <div class="depoimento-single">
                    <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus vel odio, illo voluptatibus voluptates repellat assumenda sapiente minima rerum, perferendis asperiores et. Consequuntur itaque libero quibusdam, iure dignissimos asperiores incidunt?"</p>
                    <p>Edmar Miller</p>
                    <img src="imagens/edmar.jpeg">
                </div><!--DEPOIMENTOS-SINGLE-->
            </div><!--DEPOIMENTOS-BOX-->
        </div>
    </section>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script type="text/javascript">
        $('section.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive:
            [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false,
        });
    </script>
    <script>
        // Menu responsivo.
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
        
</body>
</html>