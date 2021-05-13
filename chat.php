
<div class="conversa-body">
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

        <div class="header-sistema">
            <div class="container">
    
                <a class="btn_menu-toggle" href="home.php">
                    <img src="img/menu.svg" alt="">
                </a>

                <div class="header_ola-sair container"> 
                    <p>Olá, <span>Bruno</span></p>
                    <a href="">Sair</a>
                </div>
            </div>    
        </div><!-- Fim header-sistema -->
    </div><!-- Fim div_menu-header -->
    </header>

<section class="section_chat">
    <h1 style="padding-left:15px;margin-bottom:50px;">Chat</h1>

    <div class="div_chat-box">
    <div class="chat_list-body">

<div class="chat_list-lateral">
    <div class="pesquisar_chat">
        <img src="img/search.svg" alt="">
        <input type="text" placeholder="Pesquisar...">
    </div>
</div> <!-- chat_list-lateral -->

<div class="chat_list-conversas">

<div class="chat_list-item">
        <a href="chat.php">
        <div class="elementos">
            <div class="avatar">
                <img src="img/boy.svg" alt="">
            </div>
            <div class="infos">
                <h5>Eraldo</h5>
                <p>Combinado. Nos vemos amanhã!</p>
            </div>
        </div> <!-- fim elementos -->
        </a>
    </div> <!-- fim chat_list-item -->


    <div class="chat_list-item">
        <a href="">
        <div class="elementos">
            <div class="avatar">
                <img src="img/programmer.svg" alt="">
            </div>
            <div class="infos">
                <h5>Bruno</h5>
                <p>Bom dia. Encontrei o seu documento...</p>
            </div>
        </div> <!-- fim elementos -->
        </a>
    </div> <!-- fim chat_list-item -->

    <div class="chat_list-item">
        <a href="">
        <div class="elementos">
            <div class="avatar">
                <img src="img/profile.svg" alt="">
            </div>
            <div class="infos">
                <h5>Cláudio</h5>
                <p>Olá, tudo bem?</p>
            </div>
        </div> <!-- fim elementos -->
        </a>
    </div> <!-- fim chat_list-item -->

    <div class="chat_list-item">
        <a href="">
        <div class="elementos">
            <div class="avatar">
                <img src="img/woman.svg" alt="">
            </div>
            <div class="infos">
                <h5>Amanda</h5>
                <p>Muito obrigada por ter encontrado...</p>
            </div>
        </div> <!-- fim elementos -->
        </a>
    </div> <!-- fim chat_list-item -->


</div>
</div> <!-- fim chat_list-body -->
    <div class="chatbox">
        <div class="chatbox-top">
        <div class="chat_nome-usuario">
        <img src="img/boy.svg" alt="">
            <p>Eraldo</p>
            <span class="online"></span>
        </div>   
        </div>
        
        <div class="chat-messages">
        <div class="message-box-holder">
            <div class="message-box">
                <p>Oi</p>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message_recebida-usuario">
                <h5>Eraldo</h5>
            </div>
            <div class="message-box message_recebida">
            <p>Olá</p>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message-box">
                <p>Beleza?</p>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message_recebida-usuario">
                <h5>Eraldo</h5>
            </div>
            <div class="message-box message_recebida">
                <p>Tudo certo. Você achou meu rg?</p>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message-box">
                <p>Aí sim</p>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message-box">
                <p>Achei sim, estava la no laboratório de redes da FATEC</p>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message-box">
                <P>Amanhã podemos nos encontrar na biblioteca para eu te devolver?</P>
            </div>
        </div>
        
        <div class="message-box-holder">
            <div class="message_recebida-usuario">
                <h5>Eraldo</h5>
            </div>
            <div class="message-box message_recebida">
                <p>Combinado. Nos vemos amanhã!</p>
            </div>
        </div>
    
    
    <div class="chat-input-holder">
      <textarea class="chat-input" placeholder="Escreva uma mensagem..."></textarea>
      <input type="submit" value="Enviar" class="message-send" />
    </div>

  </div>

</div>
</section>

</div>

<?php include "footer-sistema.php" ?>