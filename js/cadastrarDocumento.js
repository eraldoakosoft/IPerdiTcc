if (document.querySelector("#cadastrarCPF")) {
    const btncadastrarCPf = document.querySelector("#cadastrarCPF")
    btncadastrarCPf.addEventListener("click", function (e) {
        e.preventDefault();
        const numero = document.querySelector("#post-cpf-numero").value
        const nome_completo = document.querySelector("#post-cpf-nome_completo").value
        const data = document.querySelector("#post-cpf-data").value
        const cidade = document.querySelector("#post-cpf-cidade").value
        const estado = document.querySelector("#post-cpf-estado").value
        const descricao = document.querySelector("#post-cpf-descricao").value
        const logradouro = document.querySelector("#post-cpf-logradouro").value
        let post = { nome: nome_completo, numero_documento: numero, descricao: descricao, local_encontrado: { logradouro: logradouro, cidade: cidade, uf: estado }, data_encontrado: data, cpf: numero, tipo: "CPF", tipo_postagem: "Achado" }
        cadastrar(post)
    })
}

if (document.querySelector("#cadastrarRG")) {
    const btncadastrarRG = document.querySelector("#cadastrarRG")
    btncadastrarRG.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            numero_documento: document.querySelector("#post-rg-numero").value,
            nome: document.querySelector("#post-rg-nome_completo").value,
            nome_mae: document.querySelector("#post-rg-nome_mae").value,
            data_nascimento: document.querySelector("#post-rg-data_nascimento").value,
            data_encontrado: document.querySelector("#post-rg-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-rg-cidade").value,
                uf: document.querySelector("#post-rg-estado").value,
                logradouro: document.querySelector("#post-rg-logradouro").value,
            },
            descricao: document.querySelector("#post-rg-descricao").value,
            tipo: "RG",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}

if (document.querySelector("#cadastrarCartaoBanco")) {
    const btncadastrarCartaoBanco = document.querySelector("#cadastrarCartaoBanco")
    btncadastrarCartaoBanco.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            nome: document.querySelector("#post-cartao_banco-nome").value,
            emissor: document.querySelector("#post-cartao_banco-emissor").value,
            data_encontrado: document.querySelector("#post-cartao_banco-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-cartao_banco-cidade").value,
                uf: document.querySelector("#post-cartao_banco-estado").value,
                logradouro: document.querySelector("#post-cartao_banco-logradouro").value,
            },
            descricao: document.querySelector("#post-cartao_banco-descricao").value,
            tipo: "Cartão Bancário",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}

if (document.querySelector("#cadastrarCartaoSaude")) {
    const btncadastrarCartaoSaude = document.querySelector("#cadastrarCartaoSaude")
    btncadastrarCartaoSaude.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            nome: document.querySelector("#post-cartao_saude-nome").value,
            numero_documento: document.querySelector("#post-cartao_saude-numero_documento").value,
            data_encontrado: document.querySelector("#post-cartao_saude-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-cartao_saude-cidade").value,
                uf: document.querySelector("#post-cartao_saude-estado").value,
                logradouro: document.querySelector("#post-cartao_saude-logradouro").value,
            },
            descricao: document.querySelector("#post-cartao_saude-descricao").value,
            tipo: "Cartão Saúde",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}


const cadastrar = function (post) {
    fetch('http://192.168.0.66:3003/posts', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + document.cookie,
        },
        body: JSON.stringify(post)
    }).then((response) => response.json()).then((json) => {
        console.log(json)
    }).catch((error) => {
        console.log(error);
    })
}
