<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPerdi</title>
    <link rel="stylesheet" href="style/css-geral.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="global_header d-flex justify-content-start align-items-center azul_escuro-marca-bg">
    <div class="div_header-elementos">

        <div class="div_header-logo">
            <img class="logo-svg" src="img/logo-branco.svg" alt="">
        </div> <!--Fim div_header-logo-->

        <div>
            <button class="header_botao">
                <a href="login.php">Entre ou Cadastre-se</a>
            </button>
            
        </div>

    </div> <!--Fim div_header-elementos-->
</div> <!-- Fim global_header -->

<section class="section-1">
    
    <div class="container">
        <div class="section-1_div-1">
            <div class="section-1_div-text">
                <h1>Lorem Ipsum</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a augue a arcu tristique tristique. Duis ac nulla a sapien tincidunt fringilla. Duis eu tempor elit. Aliquam eget dui semper libero interdum maximus. Mauris vel turpis id ante congue feugiat. Quisque et ipsum at arcu scelerisque blandit non malesuada enim. Nunc quis risus tortor. Maecenas cursus accumsan libero at
                commodo. Proin elementum, elit vel auctor tincidunt, turpis metus sollicitudin dolor, in finibus odio arcu a augue. 
                </p>
            </div> <!--Fim div section-1_div-text-->

            <div class="section-1_div-svg">
                <img src="img/passaporte.svg" alt="">
            </div> <!--Fim div section-1_div-svg-->
        </div>   
    </div>
</section> <!--Fim da section-1-->

<section class="section-2 bege_marca-bg">
    <div class="container">
        <div class="section-2_div-1 d-flex">
            <div class="section-2_div-svg">
                <img src="img/carteira.svg" alt="">
            </div>
            <div class="section-2_div-2">
                <h1>Conheça nosso sistema</h1>

                <div class="d-flex div-maodoc-svg">
                    <img src="img/mao-documento.svg" alt="">
                    <p>Achou um documento? Cadastre e encontre o dono. Perdeu? Então cadastre-se e procure seu documento em nosso sistema de forma muito simples e rápido</p>
                </div>
                <div class="d-flex div-relogio-svg">
                    <img src="img/relogio.svg" alt="">
                    <p>E você poderá também registrar outros tipos de objetos perdidos, como relógios, bonés, celulares entre tantos outros</p>
                </div>
                <div class="d-flex div-mao-svg">
                    <img src="img/mao.svg" alt="">
                    <p>Nosso sistema possui conversa via chat, onde os usuários poderão se comunicar</p>
                </div>
            </div>
        </div><!--Fim section-2_div1-->
    </div><!--Fim cntainer-->
</section> <!--Fim section-2-->

<section class="section-3 azul_escuro-marca-bg">
    <div class="container">
            <div class="d-flex align-items-center flex-column">
                <h1>Não perca mais tempo!</h1> 
                <h1>Comece agora a usar o iPerdi</h1>
                <h1>Acesse o botão abaixo para fazer login ou criar sua conta</h1>
                <a class="btn-login" href="login.php">iPerdi</a>
            </div>
    </div>
</section>

<?php include "footer.php" ?>

</body>
</html>