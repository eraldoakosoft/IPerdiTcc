<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPerdi</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css-geral.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
    <!-- <script src="js/scripts.js" defer></script> -->
</head>

<header>
    <div class="div_menu-header">
        <div class="menu-lateral">
            <div class="div_img-logo-menu">
                <a href="home.php">
                    <img src="img/logo.svg" alt="">
                </a>
            </div>
            <div class="div_menu-lateral-links">
                <div class="div_menu-lateral-img-link">
                    <img src="img/clipboard-red.svg" alt="">
                    <a href="cadastrar-documento.php">Cadastrar documento perdido</a>
                </div>

                <div class="div_menu-lateral-img-link">
                    <img src="img/clipboard.svg" alt="">
                    <a href="cadastrar-documento-achado.php">Cadastrar documento achado</a>
                </div>
                
                <div class="div_menu-lateral-img-link">
                    <img src="img/sketch-red.svg" alt="">
                    <a href="cadastrar-item-perdido.php">Cadastrar item perdido</a>
                </div>

                <div class="div_menu-lateral-img-link">
                    <img src="img/sketch-green.svg" alt="">
                    <a href="cadastro-item-achado.php">Cadastrar item achado</a>
                </div>
                
                <div class="div_menu-lateral-img-link">
                    <img src="img/globe.svg" alt="">
                    <a href="#">Feed de itens perdidos</a>
                </div>

                <div class="div_menu-lateral-img-link">
                    <img src="img/chat.svg" alt="">
                    <a href="chat-list.php">Chat</a>
                </div>
                
                <div class="div_menu-lateral-img-link">
                    <img src="img/settings.svg" alt="">
                    <a href="#">Configurações</a>
                </div>

            </div> <!-- Fim div_menu-lateral-links -->
        </div> <!-- Fim menu lateral -->

        <div class="header-sistema">
        <button class="btn_menu-toggle">
                <img src="img/menu.svg" alt="">
            </button>
        <div class="menu-toggle menu-escondido">

            <div class="div_menu-lateral-links">
                    <div class="div_menu-toggle-logo">
                        <img src="img/logo.svg" alt="">
                    </div>
                    <div class="div_menu-lateral-img-link">
                        <img src="img/clipboard-red.svg" alt="">
                        <a href="/cadastrar-documento.php">Cadastrar documento perdido</a>
                    </div>

                    <div class="div_menu-lateral-img-link">
                        <img src="img/clipboard.svg" alt="">
                        <a href="/cadastrar-documento-achado.php">Cadastrar documento achado</a>
                    </div>
                    
                    <div class="div_menu-lateral-img-link">
                        <img src="img/sketch-red.svg" alt="">
                        <a href="/cadastrar-item-perdido.php">Cadastrar item perdido</a>
                    </div>

                    <div class="div_menu-lateral-img-link">
                        <img src="img/sketch-green.svg" alt="">
                        <a href="/cadastrar-item-perdido.php">Cadastrar item achado</a>
                    </div>
                    
                    <div class="div_menu-lateral-img-link">
                        <img src="img/globe.svg" alt="">
                        <a href="#">Feed de itens perdidos</a>
                    </div>

                    <div class="div_menu-lateral-img-link">
                        <img src="img/chat.svg" alt="">
                        <a href="#">Chat</a>
                    </div>
                    
                    <div class="div_menu-lateral-img-link">
                        <img src="img/settings.svg" alt="">
                        <a href="#">Configurações</a>
                    </div>

                    <div class="div_menu-lateral-img-link">
                        <img src="img/information.svg" alt="">
                        <a href="#">Sobre</a>
                    </div>
                </div> <!-- Fim div_menu-lateral-links -->
        </div> <!-- Fim menu toggle -->

            <div class="header_ola-sair container"> 
                <p>Olá, <span>Bruno</span></p>
                <a href="">Sair</a>
            </div>
        </div><!-- Fim header-sistema -->
    </div><!-- Fim div_menu-header -->
    </header>

    <script>
        $('.btn_menu-toggle').click(function(){
            if ($('.menu-toggle').hasClass('menu-escondido')) {
                    $('.menu-toggle').removeClass('menu-escondido');
                    $('.menu-toggle').addClass('menu-visivel');
            } else {
                $('.menu-toggle').addClass('menu-escondido');
                $('.menu-toggle').removeClass('menu-visivel');
            }
        });
    </script>