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
    <!-- <script src="js/js-geral.js"></script> -->
    <script>
        const socket = io("http://192.168.0.66:3000");
        const login = function () {
            const user = {
                "email": document.getElementById('email').value,
                "senha": document.getElementById('senha').value,
                "socketID": socket.id
            }
            socket.emit('login', user)
        }

        socket.on('connect', function () {
            console.log("Conectado no servidor!");
        })

        socket.on('seu_token', function (token) {
            document.cookie = token
        })

        //função para enviar uma mensagem
        const enviarMensagem = function () {
            var dadosmensagem = {
                token: document.cookie,
                destinatario: document.getElementById('para').value,
                descricao: document.getElementById('mensagem').value
            }
            socket.emit('privatemessage', dadosmensagem)
        }

        //Escuta evento de nova mensagem
        socket.on("new_msg", function (data) {
            console.log("Veio isso => ", data)
            $('#content').prepend(data.descricao)
        });
    
    </script>
</head>

    
