const btnEntrar = document.querySelector("#entrar");

btnEntrar.addEventListener("click", function (e) {
    e.preventDefault();
    const email = document.querySelector("#email").value
    const senha = document.querySelector("#senha").value
    fetch('http://192.168.0.66:3003/login', {
        method: 'POST',
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: email,
            senha: senha
        })
    }).then((response) => response.json()).then((json) => {
        console.log(json);
        document.cookie = json.token
        window.location.href = "home.php"
    }).catch((error) => {
        console.log(error);
    })
});