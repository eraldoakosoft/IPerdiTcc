const socket = io("http://192.168.0.66:3003");
const loginSocket = function (email, senha) {
    const user = {
        "email": email,
        "senha": senha,
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
