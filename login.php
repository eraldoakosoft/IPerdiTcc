<?php include "header.php" ?>
<script src="js/scripts.js" defer></script>
<section class="bege_marca-bg" style="height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
        <div class="div_login-global" style="height: 100vh;">
            <div class="logo-login">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="div_form-login">
                <form action="" class="d-flex">
                    <input type="email" id="email" placeholder="Email">
                    <input type="password" id="senha" placeholder="Senha">
                    <a class="link_esqueceu-senha" href="#">Esqueceu a senha?</a>
                    <a class="btn-login-2" id="entrar" onclick="" >Entrar</a>
                </form>
                <div class="divisor"></div>
                <a href="#" class="btn_criar-conta" data-bs-toggle="modal" data-bs-target="#modal-conta" >Criar conta</a>
            </div> <!-- Fim div_form-login -->
        </div> <!-- Fim div_login-global -->
    </div> <!-- Fim container -->

    <!--Modal-->
    <div class="modal fade" id="modal-conta" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-center flex-column">
                        <h1 class="modal-title">Cadastre-se</h1>
                        <h4 class="modal-subtitle">É rápido e fácil.</h4>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
                        <span>
                            <img src="img/icon-fechar.png" alt="">
                        </span>
                    </button>                  
                </div> <!-- Fim modal-header -->

                <div class="modal-body">
                    <div class="d-flex justify-content-between div_cadastrar-nome">
                        <input class="input-50" type="text" placeholder="Nome">
                        <input class="input-50" type="text" placeholder="Sobrenome">
                    </div>
                    <input class="input-100" type="text" placeholder="Email">
                    <input class="input-100" type="password" placeholder="Senha">
                    <p class="p_dt-nasc">Data de nascimento</p>
                    <div class="criar-conta_dt-nasc">
                        <select id="dia" class="select-dia">                        
                        </select>
                        <select name="" id="mes" class="select-mes">
                            <option value="Janeiro">Janeiro</option>
                            <option value="Fevereiro">Fevereiro</option>
                            <option value="Março">Março</option>
                            <option value="Abril">Abril</option>
                            <option value="Maio">Maio</option>
                            <option value="Junho">Junho</option>
                            <option value="Julho">Julho</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Setembro">Setembro</option>
                            <option value="Outubro">Outubro</option>
                            <option value="Novembro">Novembro</option>
                            <option value="Dezembro">Dezembro</option>
                        </select>
                        <select name="" id="ano" class="select-ano">
                        </select>
                    </div><!-- Fim criar-conta-dt-nasc -->
                    <div class="d-flex justify-content-center">
                        <a href="">Cadastrar-se</a>
                    </div>     
                </div> <!-- Fim modal-body -->
            </div> <!-- Fim modal-content -->
        </div> <!-- Fim modal-dialog -->
    </div> <!-- Fim modal -->


</section>

<script>
    /* Adiciona 100 anos no select da data de nascimento */
$(function() {

var max = new Date().getFullYear(),
min = max - 100,
select = document.getElementById('ano');

for (var i=max; i>=min; i--){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
});

/* Adiciona 31 dias no select da data de nascimento */

$(function() {

var max = 31,
min = max - 30,
select = document.getElementById('dia');

for(var i=min; i<=max; i++) {
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

});

</script>