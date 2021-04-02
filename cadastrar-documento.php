<?php include "header-sistema.php" ?>

<section class="section-1_cadastrar-doc">
    <h1 style="padding-left:15px;margin-bottom:50px;">Selecione o tipo de documento</h1>
    <div class="div_tipos-doc">

        <div class="div_tipo-cpf">
            <p style="text-align:center;">CPF</p>
            <div class="card-cpf">
                <a href="">
                    <p style="font-size:10px;margin-bottom:0px;">Ministério da Fazenda</p>
                    <p style="font-size:8px;margin-bottom:4px;">Secretária da Receita Federal</p>
                    <p class="card_p-cpf">CPF</p>
                    <p style="font-size:10px;margin-bottom:0px;">000.000.000-00</p>
                    <p style="font-size:10px;margin-bottom:0px;">Nome</p>
                    <p style="font-size:10px;margin-bottom:0px;">01/01/1990</p>
                </a>
            </div> <!--Fim card-cpf-->
        </div> <!-- div_tipo-cpf-->

        <div class="div_global-rg">
            <p style="text-align:center;">RG</p>
            <div class="div_tipo-rg">
                <div class="card-rg">
                    <div class="div_rg-elementos">
                        <p>Estado de São Paulo</p>
                        <div class="div_rg-imgs">
                            <div class="div_rg-img">
                                <img src="img/fingerprint.svg" alt="">
                            </div>
                            <div class="div_rg-img">
                                <img src="img/man.svg" alt="">
                            </div>
                        </div>
                    </div> <!-- Fim div_rg-elementos -->
                </div> <!-- Fim card-rg -->
            </div> <!-- Fim div_tipo-rg -->       
        </div> <!-- Fim div_global-rg -->

        <div class="div_tipo-cnh">
        <p style="text-align:center;">CNH</p>
            <div class="card-cnh">
                <div>
                    <p>REPÚBLICA FEDERATIVA DO BRASIL</p>
                    <p>DEPARTAMENTO NACIONAL DE TRÂNSITO</p>
                </div>
                <div class="nome">
                    <p>Bruno Henrique Pigatto</p>
                </div>
                <div class="img-dados">
                    <div>
                        <img src="img/man-2.svg" alt="">
                    </div>
                    <div class="dados-cnh">
                    <div class="doc-numero">
                        <p>12345670 SSP/SP</p>
                    </div>
                    
                        <div>
                            <p>123.123.123-12</p>
                        </div>
                        <div>
                            <p>18/03/1992</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div> <!-- Fim div_tipo-cnh -->

        <div class="div_tipo-ctps">
            <p style="text-align:center;">Carteira de Trabalho</p>
            <div class="card-ctps">
                <div class="img-dados">
                    <div class="p-ministerio">
                        <p>Ministério do trabalho e emprego</p>
                    </div>
                    <div style="text-align:center;">
                        <img src="img/brasao.png" alt="">
                    </div>
                    <div class="p-carteira">
                        <p>CARTEIRA DE TRABALHO E PREVIDÊNCIA SOCIAL</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="div_global-rg div_global-ctps">
            <p style="text-align:center;">Título de eleitor</p>
            <div class="div_tipo-rg">
                <div class="card-rg">
                    <div class="div_rg-elementos">
                        <p style="color:#000;">Título eleitoral</p>
                        <div class="div-eleitoral">
                           <div class="eleitoral-nome">
                               <p>Bruno Hernrique Pigatto</p>
                           </div>
                           <div class="d-flex">
                                <div class="eleitoral-dt">
                                        <p>01/01/20</p>
                                </div>
                                <div class="eleitoral-inscricao">
                                    <p>1234.1234.1234</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="eleitoral-cidade">
                                    <p>Americana - SP</p>
                                </div>
                                <div class="eleitoral-emissao">
                                    <p>02/02/2015</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Fim div_rg-elementos -->
                </div> <!-- Fim card-rg -->
            </div> <!-- Fim div_tipo-rg -->       
        </div> <!-- Fim div_global-rg -->

        <div class="div_tipo-cartao">
            <p style="text-align:center;">Cartão de banco</p> 
            <div class="card-cartao">
                <div>
                    <p>Banco</p>
                </div>
                <div>
                    <p>1234 1234 1234 1234</p>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="cartao-nome">
                        <p>Bruno Pigatto</p>
                        <p>1234 12345678-9</p>
                    </div>
                    <div class="cartao-master">
                        <span class="cartao-bolav"></span>
                        <span class="cartao-bolaa"></span>
                    </div>
                </div>
            </div> 
        </div>

        <div class="div_tipo-carteira-escolar">
            <p style="text-align:center;">Carteira escolar</p>
            <div class="card-carteira_escolar">
                <div class="estudante-titulo">
                    <p>Documento do estudante</p>
                </div>
                <div class="estudante-img-dados">
                    <div class="estudante-img">
                        <img src="img/woman.svg" alt="">
                    </div>
                    <div class="estudante-dados">
                        <p>Roberta Fernandes</p>
                        <p>Insituição de ensino</p>
                        <p>Curso/Série/Ensino</p>
                        <p>Matrícula</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="div_tipo-sus">
            <p style="text-align:center;">Cartão de Saúde</p>
            <div class="card-sus">
                <div>
                    <p style="text-align:center;">Cartão de saúde</p>
                </div>
                <div class="sus-cruz">
                        <img src="img/hospital.svg" alt="">
                    </div>
            </div>
        </div>

        <div class="div_tipo-escolar">
            <p style="text-align:center;">Passe de ônibus</p>
            <div class="card-escolar">
                <div>
                    <p style="text-align:center;">Passe de ônibus</p>
                </div>
                <div class="escolar-bus">
                    <img src="img/bus.svg" alt="">
                </div>
            </div>
        </div>

        <div class="div_tipo-reservista">
            <p style="text-align:center;">Reservista</p>
            <div class="card-reservista-pai">
                <div class="card-reservista">
                    <div class="reservista-img-dados">
                        <div class="reservista-img">
                            <img src="img/boy.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- Fim div_tipos-doc -->
</section>
