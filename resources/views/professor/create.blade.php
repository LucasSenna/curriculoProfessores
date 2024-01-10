<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administração de Imóveis</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body { padding-top: 20px; }
    </style>
    <script src="js/app.js"></script>
</head>
<body>

    <div class="container">
    <div class="panel panel-default">

        <div class="panel-heading"><h3>Cadastro de Currículo de Professor</h3></div>
        <div class="panel-body">
{{--
    <form method="post" action="{{route ('imoveis.store')}}">
        {{ csrf_field() }} --}}
        <h4><strong>Dados Pessoais</strong></h4>
        <hr>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" placeholder="Digite o seu nome completo" name="nome" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" maxlength="14" class="form-control" placeholder="Digite o seu CPF" name="cpf" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" maxlength="15" placeholder="Digite o seu Telefone com DDD" required name="telefone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite o seu E-mail" required name="email">
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">Finalidade do imóvel</label>
                    <select class="form-control" name="finalidade" required>
                        <option>Venda</option>
                        <option>Locação</option>
                    </select>
                </div>
            </div> --}}
        </div><br>
        <h4><strong>Profissional</strong></h4>
        <hr>
            <div class="form-group">
                <label for="logradouroEndereco">Mini Currículo</label>
                <textarea class="form-control form-control" style="min-height: 150px" name="curriculo" id="curriculo"
                        placeholder="Digite aqui o mini currículo do professor" required></textarea>
            </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group"><label class="" for="title">Vínculo do Professor</label><br />
                    <input name="vinculo" id="vinculo" type="radio" value="Servidor" />&nbsp;
                    <label for="vinculo" class="form-check-label">
                        Servidor&nbsp;&nbsp;&nbsp;
                    </label>
                    <input name="vinculo" id="vinculo" type="radio" value="Comissionado" required />
                    <label for="vinculo" class="form-check-label">
                        Comissionado
                    </label>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group"><label class="text-center" for="title">Escolaridade</label><br />
                    <input name="escolaridade" id="escolaridade" type="radio" value="Superior(Graduação)" required />
                    <label for="escolaridade" class="form-check-label">
                        Superior (Graduação)&nbsp;&nbsp;&nbsp;
                    </label>

                    <input name="escolaridade" id="escolaridade" type="radio" value="Especialização / MBA" />&nbsp;
                    <label for="escolaridade" class="form-check-label">
                        Especialização / MBA&nbsp;&nbsp;&nbsp;
                    </label>

                    <input name="escolaridade" id="escolaridade" type="radio" value="Mestrado" required />
                    <label for="escolaridade" class="form-check-label">
                        Mestrado&nbsp;&nbsp;&nbsp;
                    </label>

                    <input name="escolaridade" id="escolaridade" type="radio" value="Doutorado" required />
                    <label for="escolaridade" class="form-check-label">
                        Doutorado&nbsp;&nbsp;&nbsp;
                    </label>

                    <input name="escolaridade" id="escolaridade" type="radio" value="Pós Doutorado" required />
                    <label for="escolaridade" class="form-check-label">
                        Pós-Doutorado&nbsp;&nbsp;&nbsp;
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="orgao">Órgão</label>
                    <select class="form-control" name="orgao" required>
                        <option value="">Selecione o órgão em que você trabalha</option>
                        <option value="ACADEMIA ESTADUAL DE SEGURANÇA PÚBLICA DO CEARÁ (AESP/CE)">ACADEMIA
                            ESTADUAL DE SEGURANÇA PÚBLICA DO CEARÁ (AESP/CE)</option>
                        <option value="AGÊNCIA DE DEFESA AGROPECUÁRIA DO ESTADO DO CEARÁ (ADAGRI)">AGÊNCIA
                            DE DEFESA AGROPECUÁRIA DO ESTADO DO CEARÁ (ADAGRI)</option>
                        <option value="AGÊNCIA DE DESENVOLVIMENTO DO CEARÁ S/A (ADECE)">AGÊNCIA DE
                            DESENVOLVIMENTO DO CEARÁ S/A (ADECE)</option>
                        <option value="AGÊNCIA REGULADORA DE SERVIÇOS PÚBLICOS DELEGADOS DO ESTADO DO CEARÁ (ARCE)">
                            AGÊNCIA REGULADORA DE SERVIÇOS PÚBLICOS DELEGADOS DO ESTADO DO CEARÁ (ARCE)
                        </option>
                        <option value="ASSESSORIA ESPECIAL DA VICE-GOVERNADORIA (VICEGOV)">ASSESSORIA
                            ESPECIAL DA VICE-GOVERNADORIA (VICEGOV)</option>
                        <option value="CASA CIVIL (CC)">CASA CIVIL (CC)</option>
                        <option value="CENTEC - INSTITUTO CENTRO DE ENSINO TECNOLÓGICO">CENTEC - INSTITUTO
                            CENTRO DE ENSINO TECNOLÓGICO</option>
                        <option value="CENTRAIS DE ABASTECIMENTO DO CEARÁ S.A. (CEASA)">CENTRAIS DE
                            ABASTECIMENTO DO CEARÁ S.A. (CEASA)</option>
                        <option value="CIDH - CENTRO INTEGRADO DE DIABETES E HIPERTENSÃO">CIDH - CENTRO
                            INTEGRADO DE DIABETES E HIPERTENSÃO</option>
                        <option value="CODECE - COMPANHIA DE DESENVOLVIMENTO DO CEARÁ">CODECE - COMPANHIA
                            DE DESENVOLVIMENTO DO CEARÁ</option>
                        <option
                            value="COMPANHIA ADMINISTRADORA DA ZONA DE PROCESSAMENTO DE EXPORTAÇÃO DO CEARÁ (ZPE CEARÁ)">
                            COMPANHIA ADMINISTRADORA DA ZONA DE PROCESSAMENTO DE EXPORTAÇÃO DO CEARÁ (ZPE
                            CEARÁ)</option>
                        <option value="COMPANHIA CEARENSE DE TRANSPORTES METROPOLITANOS (METROFOR)">
                            COMPANHIA CEARENSE DE TRANSPORTES METROPOLITANOS (METROFOR)</option>
                        <option value="COMPANHIA DA GESTÃO DOS RECURSOS HÍDRICOS DO ESTADO DO CEARÁ (COGERH)">
                            COMPANHIA DA GESTÃO DOS RECURSOS HÍDRICOS DO ESTADO DO CEARÁ (COGERH)</option>
                        <option value="COMPANHIA DE ÁGUA E ESGOTO DO CEARÁ (CAGECE)">COMPANHIA DE ÁGUA E
                            ESGOTO DO CEARÁ (CAGECE)</option>
                        <option
                            value="COMPANHIA DE DESENVOLVIMENTO DO COMPLEXO INDUSTRIAL E PORTUÁRIO DO PECÉM (CIPP S/A)">
                            COMPANHIA DE DESENVOLVIMENTO DO COMPLEXO INDUSTRIAL E PORTUÁRIO DO PECÉM (CIPP
                            S/A)</option>
                        <option value="COMPANHIA DE GÁS DO CEARÁ (CEGÁS)">COMPANHIA DE GÁS DO CEARÁ (CEGÁS)
                        </option>
                        <option value="COMPANHIA DE PARTICIPAÇÃO E GESTÃO DE ATIVOS DO CEARÁ (CEARAPAR)">
                            COMPANHIA DE PARTICIPAÇÃO E GESTÃO DE ATIVOS DO CEARÁ (CEARAPAR)</option>
                        <option value="CONSELHO ESTADUAL DE EDUCAÇÃO (CEE)">CONSELHO ESTADUAL DE EDUCAÇÃO
                            (CEE)</option>
                        <option value="CONTROLADORIA E OUVIDORIA GERAL DO ESTADO (CGE)">CONTROLADORIA E
                            OUVIDORIA GERAL DO ESTADO (CGE)</option>
                        <option
                            value="CONTROLADORIA-GERAL DE DISCIPLINA DOS ÓRGÃOS DE SEGURANÇA PÚBLICA E SISTEMA PENITENCIÁRIO DO ESTADO DO CEARÁ (CGD)">
                            CONTROLADORIA-GERAL DE DISCIPLINA DOS ÓRGÃOS DE SEGURANÇA PÚBLICA E SISTEMA
                            PENITENCIÁRIO DO ESTADO DO CEARÁ (CGD)</option>
                        <option value="CORPO DE BOMBEIROS MILITAR DO CEARÁ (CBMCE)">CORPO DE BOMBEIROS
                            MILITAR DO CEARÁ (CBMCE)</option>
                        <option value="DEFENSORIA PÚBLICA DO ESTADO DO CEARÁ">DEFENSORIA PÚBLICA DO ESTADO
                            DO CEARÁ</option>
                        <option value="DEPARTAMENTO ESTADUAL DE TRÂNSITO (DETRAN)">DEPARTAMENTO ESTADUAL DE
                            TRÂNSITO (DETRAN)</option>
                        <option value="DPGE - DEFENSORIA PÚBLICA GERAL DO ESTADO DO CEARÁ">DPGE -
                            DEFENSORIA PÚBLICA GERAL DO ESTADO DO CEARÁ</option>
                        <option value="EMPRESA DE ASSISTÊNCIA TÉCNICA E EXTENSÃO RURAL DO CEARÁ (EMATERCE)">
                            EMPRESA DE ASSISTÊNCIA TÉCNICA E EXTENSÃO RURAL DO CEARÁ (EMATERCE)</option>
                        <option value="EMPRESA DE TECNOLOGIA DA INFORMAÇÃO DO CEARÁ (ETICE)">EMPRESA DE
                            TECNOLOGIA DA INFORMAÇÃO DO CEARÁ (ETICE)</option>
                        <option value="ESCOLA DE GESTÃO PÚBLICA DO ESTADO DO CEARÁ (EGPCE)">ESCOLA DE
                            GESTÃO PÚBLICA DO ESTADO DO CEARÁ (EGPCE)</option>
                        <option value="ESCOLA DE SAÚDE PÚBLICA (ESP/CE)">ESCOLA DE SAÚDE PÚBLICA (ESP/CE)
                        </option>
                        <option value="FUNDAÇÃO CEARENSE DE APOIO AO DESENVOLVIMENTO CIENTÍFICO E TECNOLÓGICO (FUNCAP)">
                            FUNDAÇÃO CEARENSE DE APOIO AO DESENVOLVIMENTO CIENTÍFICO E TECNOLÓGICO (FUNCAP)
                        </option>
                        <option value="FUNDAÇÃO CEARENSE DE METEOROLOGIA E RECURSOS HÍDRICOS (FUNCEME)">
                            FUNDAÇÃO CEARENSE DE METEOROLOGIA E RECURSOS HÍDRICOS (FUNCEME)</option>
                        <option value="FUNDAÇÃO DE PREVIDÊNCIA COMPLEMENTAR DO ESTADO DO CEARÁ (CE-PREVCOM)">
                            FUNDAÇÃO DE PREVIDÊNCIA COMPLEMENTAR DO ESTADO DO CEARÁ (CE-PREVCOM)</option>
                        <option value="FUNDAÇÃO DE PREVIDÊNCIA SOCIAL DOS SERVIDORES DO ESTADO DO CEARÁ (CEARAPREV)">
                            FUNDAÇÃO DE PREVIDÊNCIA SOCIAL DOS SERVIDORES DO ESTADO DO CEARÁ (CEARAPREV)
                        </option>
                        <option value="FUNDAÇÃO DE TELEDUCAÇÃO DO CEARÁ (FUNTELC)">FUNDAÇÃO DE TELEDUCAÇÃO
                            DO CEARÁ (FUNTELC)</option>
                        <option value="FUNDAÇÃO REGIONAL DE SAÚDE (FUNSAUDE)">FUNDAÇÃO REGIONAL DE SAÚDE
                            (FUNSAUDE)</option>
                        <option value="FUNDAÇÃO UNIVERSIDADE ESTADUAL DO CEARÁ (FUNECE)">FUNDAÇÃO
                            UNIVERSIDADE ESTADUAL DO CEARÁ (FUNECE)</option>
                        <option value="FUNDAÇÃO UNIVERSIDADE ESTADUAL VALE DO ACARAÚ (UVA)">FUNDAÇÃO
                            UNIVERSIDADE ESTADUAL VALE DO ACARAÚ (UVA)</option>
                        <option value="FUNDAÇÃO UNIVERSIDADE REGIONAL DO CARIRI (URCA)">FUNDAÇÃO
                            UNIVERSIDADE REGIONAL DO CARIRI (URCA)</option>
                        <option value="HEMOCE - CENTRO DE HEMATOLOGIA E HEMOTERAPIA DO CEARÁ">HEMOCE -
                            CENTRO DE HEMATOLOGIA E HEMOTERAPIA DO CEARÁ</option>
                        <option value="IDM - INSTITUTO DRAGAO DO MAR">IDM - INSTITUTO DRAGAO DO MAR
                        </option>
                        <option value="IDT - INSTITUTO DE DESENVOLVIMENTO DO TRABALHO">IDT - INSTITUTO DE
                            DESENVOLVIMENTO DO TRABALHO</option>
                        <option value="INSTITUTO AGROPOLOS DO CEARÁ ">INSTITUTO AGROPOLOS DO CEARÁ
                        </option>
                        <option value="INSTITUTO DE PESQUISA E ESTRATÉGIA ECONÔMICA DO CEARÁ (IPECE)">
                            INSTITUTO DE PESQUISA E ESTRATÉGIA ECONÔMICA DO CEARÁ (IPECE)</option>
                        <option value="INSTITUTO DE SAÚDE DOS SERVIDORES DO ESTADO DO CEARÁ (ISSEC)">
                            INSTITUTO DE SAÚDE DOS SERVIDORES DO ESTADO DO CEARÁ (ISSEC)</option>
                        <option value="INSTITUTO DO DESENVOLVIMENTO AGRÁRIO DO CEARÁ (IDACE)">INSTITUTO DO
                            DESENVOLVIMENTO AGRÁRIO DO CEARÁ (IDACE)</option>
                        <option value="INSTITUTO MIRANTE DE CULTURA E ARTE">INSTITUTO MIRANTE DE CULTURA E
                            ARTE</option>
                        <option value="IPCC - INSTITUTO DE PREVENÇÃO DO CÂNCER DO ESTADO DO CEARÁ">IPCC -
                            INSTITUTO DE PREVENÇÃO DO CÂNCER DO ESTADO DO CEARÁ</option>
                        <option value="ISGH - INSTITUTO DE SAÚDE E GESTÃO HOSPITALAR">ISGH - INSTITUTO DE
                            SAÚDE E GESTÃO HOSPITALAR</option>
                        <option value="JUNTA COMERCIAL DO ESTADO DO CEARÁ (JUCEC)">JUNTA COMERCIAL DO
                            ESTADO DO CEARÁ (JUCEC)</option>
                        <option value="MPCE - MINISTÉRIO PÚBLICO DO ESTADO DO CEARÁ">MPCE - MINISTÉRIO
                            PÚBLICO DO ESTADO DO CEARÁ</option>
                        <option value="NÚCLEO DE TECNOLOGIA E QUALIDADE INDUSTRIAL DO CEARÁ (NUTEC)">NÚCLEO
                            DE TECNOLOGIA E QUALIDADE INDUSTRIAL DO CEARÁ (NUTEC)</option>
                        <option value="PERÍCIA FORENSE DO ESTADO DO CEARÁ (PEFOCE)">PERÍCIA FORENSE DO
                            ESTADO DO CEARÁ (PEFOCE)</option>
                        <option value="POLÍCIA MILITAR DO CEARÁ (PMCE)">POLÍCIA MILITAR DO CEARÁ (PMCE)
                        </option>
                        <option value="PROCURADORIA GERAL DE JUSTIÇA">PROCURADORIA GERAL DE JUSTIÇA
                        </option>
                        <option value="SECRETARIA DA ARTICULAÇÃO POLÍTICA">SECRETARIA DA ARTICULAÇÃO
                            POLÍTICA</option>
                        <option value="SECRETARIA DA CIÊNCIA, TECNOLOGIA E EDUCAÇÃO SUPERIOR (SECITECE)">
                            SECRETARIA DA CIÊNCIA, TECNOLOGIA E EDUCAÇÃO SUPERIOR (SECITECE)</option>
                        <option value="SECRETARIA DA CULTURA (SECULT)">SECRETARIA DA CULTURA (SECULT)
                        </option>
                        <option value="SECRETARIA DA DIVERSIDADE">SECRETARIA DA DIVERSIDADE</option>
                        <option value="SECRETARIA DA EDUCAÇÃO (SEDUC)">SECRETARIA DA EDUCAÇÃO (SEDUC)
                        </option>
                        <option value="SECRETARIA DA FAZENDA (SEFAZ)">SECRETARIA DA FAZENDA (SEFAZ)
                        </option>
                        <option value="SECRETARIA DA IGUALDADE RACIAL">SECRETARIA DA IGUALDADE RACIAL
                        </option>
                        <option value="SECRETARIA DA INFRAESTRUTURA (SEINFRA)">SECRETARIA DA INFRAESTRUTURA
                            (SEINFRA)</option>
                        <option value="SECRETARIA DA JUVENTUDE (SEJUV)">SECRETARIA DA JUVENTUDE (SEJUV)
                        </option>
                        <option value="SECRETARIA DA PESCA E AQUICULTURA">SECRETARIA DA PESCA E AQUICULTURA
                        </option>
                        <option value="SECRETARIA DA PROTEÇÃO ANIMAL (SEPA)">SECRETARIA DA PROTEÇÃO ANIMAL
                            (SEPA)</option>
                        <option value="SECRETARIA DA PROTEÇÃO SOCIAL">SECRETARIA DA PROTEÇÃO SOCIAL
                        </option>
                        <option value="SECRETARIA DA SAÚDE (SESA)">SECRETARIA DA SAÚDE (SESA)</option>
                        <option value="SECRETARIA DA SEGURANÇA PÚBLICA E DEFESA SOCIAL (SSPDS)">SECRETARIA
                            DA SEGURANÇA PÚBLICA E DEFESA SOCIAL (SSPDS)</option>
                        <option value="SECRETARIA DAS CIDADES (SCIDADES)">SECRETARIA DAS CIDADES (SCIDADES)
                        </option>
                        <option value="SECRETARIA DAS MULHERES">SECRETARIA DAS MULHERES</option>
                        <option value="SECRETARIA DAS RELAÇÕES INTERNACIONAIS">SECRETARIA DAS RELAÇÕES
                            INTERNACIONAIS</option>
                        <option value="SECRETARIA DE ADMINISTRAÇÃO PENITENCIÁRIA E RESSOCIALIZAÇÃO (SAP)">
                            SECRETARIA DE ADMINISTRAÇÃO PENITENCIÁRIA E RESSOCIALIZAÇÃO (SAP)</option>
                        <option value="SECRETARIA DO DESENVOLVIMENTO AGRÁRIO (SDA)">SECRETARIA DO
                            DESENVOLVIMENTO AGRÁRIO (SDA)</option>
                        <option value="SECRETARIA DO DESENVOLVIMENTO ECONÔMICO (SDE)">SECRETARIA DO
                            DESENVOLVIMENTO ECONÔMICO (SDE)</option>
                        <option value="SECRETARIA DO ESPORTE (SESPORTE)">SECRETARIA DO ESPORTE (SESPORTE)
                        </option>
                        <option value="SECRETARIA DO MEIO AMBIENTE E MUDANÇA DO CLIMA (SEMA)">SECRETARIA DO
                            MEIO AMBIENTE E MUDANÇA DO CLIMA (SEMA)</option>
                        <option value="SECRETARIA DO PLANEJAMENTO E GESTÃO (SEPLAG)">SECRETARIA DO
                            PLANEJAMENTO E GESTÃO (SEPLAG)</option>
                        <option value="SECRETARIA DO TRABALHO">SECRETARIA DO TRABALHO</option>
                        <option value="SECRETARIA DO TURISMO (SETUR)">SECRETARIA DO TURISMO (SETUR)
                        </option>
                        <option value="SECRETARIA DOS DIREITOS HUMANOS">SECRETARIA DOS DIREITOS HUMANOS
                        </option>
                        <option value="SECRETARIA DOS POVOS INDÍGENAS">SECRETARIA DOS POVOS INDÍGENAS
                        </option>
                        <option value="SECRETARIA DOS RECURSOS HÍDRICOS (SRH)">SECRETARIA DOS RECURSOS
                            HÍDRICOS (SRH)</option>
                        <option value="SUPERINTENDÊNCIA DA POLÍCIA CIVIL (PCCE)">SUPERINTENDÊNCIA DA
                            POLÍCIA CIVIL (PCCE)</option>
                        <option value="SUPERINTENDÊNCIA DE OBRAS HIDRÁULICAS (SOHIDRA)">SUPERINTENDÊNCIA DE
                            OBRAS HIDRÁULICAS (SOHIDRA)</option>
                        <option value="SUPERINTENDÊNCIA DE OBRAS PÚBLICAS (SOP)">SUPERINTENDÊNCIA DE OBRAS
                            PÚBLICAS (SOP)</option>
                        <option value="SUPERINTENDÊNCIA DE PESQUISA E ESTRATÉGIA DE SEGURANÇA PÚBLICA (SUPESP)">
                            SUPERINTENDÊNCIA DE PESQUISA E ESTRATÉGIA DE SEGURANÇA PÚBLICA (SUPESP)</option>
                        <option value="SUPERINTENDÊNCIA DO SISTEMA ESTADUAL DE ATENDIMENTO SOCIOEDUCATIVO (SEAS)">
                            SUPERINTENDÊNCIA DO SISTEMA ESTADUAL DE ATENDIMENTO SOCIOEDUCATIVO (SEAS)
                        </option>
                        <option value="SUPERINTENDÊNCIA ESTADUAL DO MEIO AMBIENTE (SEMACE)">
                            SUPERINTENDÊNCIA ESTADUAL DO MEIO AMBIENTE (SEMACE)</option>
                        <option value="TCE - TRIBUNAL DE CONTAS DO ESTADO DO CEARÁ">TCE - TRIBUNAL DE
                            CONTAS DO ESTADO DO CEARÁ</option>
                        <option value="TJCE - TRIBUNAL DE JUSTIÇA DO ESTADO DO CEARÁ">TJCE - TRIBUNAL DE
                            JUSTIÇA DO ESTADO DO CEARÁ</option>
                        <option value="TRE - TRIBUNAL REGIONAL ELEITORAL DO CEARÁ">TRE - TRIBUNAL REGIONAL
                            ELEITORAL DO CEARÁ</option>
                    </select>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="cepEndereco">CEP</label>
                    <input type="text" class="form-control" placeholder="CEP" required name="cepEndereco">
                </div>
            </div> --}}
        </div><br>
        <h4><strong>Anexos</strong></h4>
        <hr>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" placeholder="Digite o seu nome completo" name="nome" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" maxlength="14" class="form-control" placeholder="Digite o seu CPF" name="cpf" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" maxlength="15" placeholder="Digite o seu Telefone com DDD" required name="telefone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite o seu E-mail" required name="email">
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">Finalidade do imóvel</label>
                    <select class="form-control" name="finalidade" required>
                        <option>Venda</option>
                        <option>Locação</option>
                    </select>
                </div>
            </div> --}}
        </div>
        <button style="background-color: #04AA6D" type="submit" class="btn btn-success">Cadastrar</button>
    </form>
        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
        < /script>

        <
        !--SWEET ALERT 2-- >
        <
        script src = "https://cdn.jsdelivr.net/npm/sweetalert2@8.10.0/dist/sweetalert2.all.min.js" >
    </script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/sweetalert2@8.10.0/dist/sweetalert2.css
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <footer>

            <div class="container
        text-center py-3">
    <small class="copyright">EGPCE - Escola de Gestão Pública do Estado do Ceará</small>
    </div>
    </footer>
</body>

</html>
