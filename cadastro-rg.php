<?php include "header-sistema.php" ?>
<script src="js/cadastrarDocumento.js" defer></script>

<section class="section_cadastro-doc">

    <h1 style="padding-left:15px;margin-bottom:50px;">Cadastro do RG</h1>

    <form action="" method="post" enctype="multipart/form-data" class="form_cadastro-doc">
        <div class="form_cadastro-doc-infos">
            <input type="text" id="post-rg-numero" placeholder="Número" style="margin-bottom: 12px;">
            <input type="text" id="post-rg-nome_completo" placeholder="Nome completo" style="margin-bottom: 12px;">
            <input type="text" id="post-rg-nome_mae" placeholder="Nome da mãe" style="margin-bottom: 12px;">
            <div>
                <label for="">Data de nascimento</label>
                <input type="date" id="post-rg-data_nascimento" placeholder="Data de Nascimento" style="margin-bottom: 12px;">
            </div>
            <label for="" class="lbl_horario-time">Data e local onde foi encontrado</label>
            <div class="form_horario-time">
                <input type="date">
            </div>
            <div class="form_cidade-estado">
                <input id="post-rg-cidade" type="text" placeholder="Cidade">
                <input id="post-rg-estado" type="text" placeholder="Estado">
            </div>
            <input type="text" id="post-rg-logradouro" placeholder="Logradouro" style="margin-bottom: 12px;">
           <textarea name="" id="post-rg-descricao" cols="30" rows="10" placeholder="Descrição"></textarea>
        </div>
        <div class="form_div-upload-imagem">
            <label for="">Insira imagens do documento</label>
            <input type="file" name="input_imagem_anexo" placeholder="Selecione uma imagem ...">
        </div>

        <button type="submit" id="cadastrarRG" class="btn_cadastro-doc">Cadastrar</button>
    </form>


</section>

<?php include "footer-sistema.php" ?>