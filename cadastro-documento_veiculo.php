<?php include "header-sistema.php" ?>
<script src="js/cadastrarDocumento.js" defer></script>

<section class="section_cadastro-doc">

    <h1 style="padding-left:15px;margin-bottom:50px;">Cadastro do Documento do veículo</h1>

    <form action="" method="post" enctype="multipart/form-data" class="form_cadastro-doc">
        <div class="form_cadastro-doc-infos">
            <input type="text" placeholder="Nome completo" style="margin-bottom: 12px;">
            <input type="text" placeholder="CPF" style="margin-bottom: 12px;">
            <label for="" class="lbl_horario-time">Data e local onde foi encontrado</label>
            <div class="form_horario-time">
                <input type="date">
            </div>
            <div class="form_cidade-estado">
                <input type="text" id="post-documento_veiculo-cidade" placeholder="Cidade">
                <input type="text" id="post-documento_veiculo-estado" placeholder="Estado">
            </div>
            <input type="text" id="post-documento_veiculo-logradouro" placeholder="Logradouro" style="margin-bottom: 12px;">
           <textarea name="" id="post-documento_veiculo-descricao" cols="30" rows="10" placeholder="Descrição"></textarea>
        </div>
        <div class="form_div-upload-imagem">
            <label for="">Insira imagens do documento</label>
            <input type="file" name="input_imagem_anexo" placeholder="Selecione uma imagem ...">
        </div>

        <button type="submit" id="cadastrarDocumentoVeiculo" class="btn_cadastro-doc">Cadastrar</button>
    </form>


</section>

<?php include "footer-sistema.php" ?>