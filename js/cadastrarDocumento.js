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
if (document.querySelector("#cadastrarDocumentoVeiculo")) {
    const btncadastrarDocumentoVeiculo = document.querySelector("#cadastrarDocumentoVeiculo")
    btncadastrarDocumentoVeiculo.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            numero_documento: document.querySelector("#post-documento_veiculo-cpf").value,
            cpf: document.querySelector("#post-documento_veiculo-cpf").value,
            nome: document.querySelector("#post-documento_veiculo-nome_completo").value,
            data_encontrado: document.querySelector("#post-documento_veiculo-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-documento_veiculo-cidade").value,
                uf: document.querySelector("#post-documento_veiculo-estado").value,
                logradouro: document.querySelector("#post-documento_veiculo-logradouro").value,
            },
            descricao: document.querySelector("#post-documento_veiculo-descricao").value,
            tipo: "CRLV",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}
if (document.querySelector("#cadastrarTituloDeEleitor")) {
    const btncadastrarTituloDeEleitor = document.querySelector("#cadastrarTituloDeEleitor")
    btncadastrarTituloDeEleitor.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            numero_documento: document.querySelector("#post-titulo-numero").value,
            nome: document.querySelector("#post-titulo-nome_completo").value,
            nome_mae: document.querySelector("#post-titulo-nome_mae").value,
            data_nascimento: document.querySelector("#post-titulo-data_nascimento").value,
            data_encontrado: document.querySelector("#post-titulo-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-titulo-cidade").value,
                uf: document.querySelector("#post-titulo-estado").value,
                logradouro: document.querySelector("#post-titulo-logradouro").value,
            },
            descricao: document.querySelector("#post-titulo-descricao").value,
            tipo: "Título de Eleitor",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}
if (document.querySelector("#cadastrarCarteiraDeTrabalho")) {
    const btncadastrarCarteiraDeTrabalho = document.querySelector("#cadastrarCarteiraDeTrabalho")
    btncadastrarCarteiraDeTrabalho.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            numero_documento: document.querySelector("#post-ctps-numero").value,
            nome: document.querySelector("#post-ctps-nome_completo").value,
            nome_mae: document.querySelector("#post-ctps-nome_mae").value,
            data_encontrado: document.querySelector("#post-ctps-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-ctps-cidade").value,
                uf: document.querySelector("#post-ctps-estado").value,
                logradouro: document.querySelector("#post-ctps-logradouro").value,
            },
            descricao: document.querySelector("#post-ctps-descricao").value,
            tipo: "Carteira Nacional de Trabalho",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}
if (document.querySelector("#cadastrarCarteiraNacionalDeTransito")) {
    const btncadastrarCNH = document.querySelector("#cadastrarCarteiraNacionalDeTransito")
    btncadastrarCNH.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            numero_documento: document.querySelector("#post-cnh-numero").value,
            cpf: document.querySelector("#post-cnh-numero").value,
            nome: document.querySelector("#post-cnh-nome").value,
            data_encontrado: document.querySelector("#post-cnh-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-cnh-cidade").value,
                uf: document.querySelector("#post-cnh-estado").value,
                logradouro: document.querySelector("#post-cnh-logradouro").value,
            },
            descricao: document.querySelector("#post-cnh-descricao").value,
            tipo: "CNH",
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
if (document.querySelector("#cadastroPasseOnibus")) {
    const btncadastroPasseOnibus = document.querySelector("#cadastroPasseOnibus")
    btncadastroPasseOnibus.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            nome: document.querySelector("#post-passe_onibus-nome_completo").value,
            emissor: document.querySelector("#post-passe_onibus-emissor").value,
            data_encontrado: document.querySelector("#post-passe_onibus-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-passe_onibus-cidade").value,
                uf: document.querySelector("#post-passe_onibus-estado").value,
                logradouro: document.querySelector("#post-passe_onibus-logradouro").value,
            },
            descricao: document.querySelector("#post-passe_onibus-descricao").value,
            tipo: "Passe de Ônibus",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}
if (document.querySelector("#cadastrarPassaporte")) {
    const btncadastrarPassaporte = document.querySelector("#cadastrarPassaporte")
    btncadastrarPassaporte.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            nome: document.querySelector("#post-passaporte-nome_completo").value,
            numero_documento: document.querySelector("#post-passaporte-cpf").value,
            cpf: document.querySelector("#post-passaporte-cpf").value,
            data_encontrado: document.querySelector("#post-passaporte-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-passaporte-cidade").value,
                uf: document.querySelector("#post-passaporte-estado").value,
                logradouro: document.querySelector("#post-passaporte-logradouro").value,
            },
            descricao: document.querySelector("#post-passaporte-descricao").value,
            tipo: "Passaporte",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}
if (document.querySelector("#cadastroReservista")) {
    const btncadastroReservista = document.querySelector("#cadastroReservista")
    btncadastroReservista.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            nome: document.querySelector("#post-reservista-nome_completo").value,
            numero_documento: document.querySelector("#post-reservista-numero_documento").value,
            data_encontrado: document.querySelector("#post-reservista-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-reservista-cidade").value,
                uf: document.querySelector("#post-reservista-estado").value,
                logradouro: document.querySelector("#post-reservista-logradouro").value,
            },
            descricao: document.querySelector("#post-reservista-descricao").value,
            tipo: "Reservista",
            tipo_postagem: "Achado"
        }
        cadastrar(post)
    })
}
if (document.querySelector("#cadastrarCarteiraEscolar")) {
    const btncadastrarCarteiraEscolar = document.querySelector("#cadastrarCarteiraEscolar")
    btncadastrarCarteiraEscolar.addEventListener("click", function (e) {
        e.preventDefault();
        let post = {
            nome: document.querySelector("#post-carteira_escolar-nome_completo").value,
            emissor: document.querySelector("#post-carteira_escolar-emissor").value,
            data_encontrado: document.querySelector("#post-carteira_escolar-data_encontrado").value,
            local_encontrado: {
                cidade: document.querySelector("#post-carteira_escolar-cidade").value,
                uf: document.querySelector("#post-carteira_escolar-estado").value,
                logradouro: document.querySelector("#post-carteira_escolar-logradouro").value,
            },
            descricao: document.querySelector("#post-carteira_escolar-descricao").value,
            tipo: "Carteira Escolar",
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
