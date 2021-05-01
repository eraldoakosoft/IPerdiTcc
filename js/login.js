const btnEntrar = document.querySelector("#entrar");
const btnCadastrar = document.querySelector("#cadastrar");

btnEntrar.addEventListener("click", function (e) {
    e.preventDefault();
    const email = document.querySelector("#email").value
    const senha = document.querySelector("#senha").value
    fetch('http://192.168.0.66:3003/login', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: email,
            senha: senha
        })
    }).then((response) => response.json()).then((json) => {
        console.log(json);
        document.cookie = json.token
        if (json.token == undefined) {
            return
        } else {
            window.location.href = "home.php"
        }
    }).catch((error) => {
        console.log(error);
    })
});

btnCadastrar.addEventListener("click", function (e) {
    e.preventDefault();
    const nick_name = document.querySelector("#cadnome").value
    const sobrenome = document.querySelector("#cadsobrenome").value
    const email = document.querySelector("#cademail").value
    const senha = document.querySelector("#cadsenha").value
    const ano = document.querySelector("#ano").value
    const mes = document.querySelector("#mes").value
    const dia = document.querySelector("#dia").value
    const data_nascimento = formatarDataNascimento(ano, mes, dia)
    const nomecompleto = nick_name + ' ' + sobrenome
    var user = { nick_name: nick_name, nome: nomecompleto, email: email, senha: senha, data_nascimento: data_nascimento, id_endereco: {} }
    console.log(user);
    fetch('http://192.168.0.66:3003/cadastro', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(user)
    }).then((response) => response.json()).then((json) => {
        window.location.href = "login.php"
    }).catch((error) => {
        console.log(error);
    })
})

const formatarDataNascimento = function (ano, mes, dia) {
    if (dia < 10) {
        dia = '0' + dia
        return data_nascimento = ano + '-' + mes + '-' + dia
    } else {
        return data_nascimento = ano + '-' + mes + '-' + dia
    }
}