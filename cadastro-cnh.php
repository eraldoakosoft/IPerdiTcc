<?php include "header-sistema.php" ?>

<section class="section_cadastro-doc">

    <h1 style="padding-left:15px;margin-bottom:50px;">Cadastro da CNH</h1>

    <form action="" method="post" enctype="multipart/form-data" class="form_cadastro-doc">
        <div class="form_cadastro-doc-infos">
            <input type="text" placeholder="Número" style="margin-bottom: 12px;">
            <input type="text" placeholder="Nome completo" style="margin-bottom: 12px;">
            <label for="" class="lbl_horario-time">Data, horário e local onde foi encontrado</label>
            <div class="form_horario-time">
                <input type="date">
                <input type="time">
            </div>
           <textarea name="" id="" cols="30" rows="10" placeholder="Local"></textarea>
        </div>
        <div class="form_div-upload-imagem">
            <label for="">Insira imagens do documento</label>
            <input type="file" name="input_imagem_anexo" placeholder="Selecione uma imagem ...">
        </div>

        <button type="submit" class="btn_cadastro-doc">Cadastrar</button>
    </form>


</section>