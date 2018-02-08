// FUNÇÕES PARA MANUTENÇÃO DA ACADEMIA

// FUNÇÃO PARA VERIFICAR OS DADOS DA ACADEMIA
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CNPJ TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosAcademia() {
    var idAcademia = $('#idAcademia').val();
    var idPlano = $('#idPlano').val();
    var idPacote = $('#idPacote').val();
    var nomeAcademia = $('#nomeAcademia').val();
    var cnpjAcademia = $('#cnpjAcademia').val();
    var enderecoAcademia = $('#enderecoAcademia').val();
    var estadoAcademia = $('#estadoAcademia').val();
    var cidadeAcademia = $('#cidadeAcademia').val();
    var bairroAcademia = $('#bairroAcademia').val();
    var cepAcademia = $('#cepAcademia').val();
    var telefoneAcademia = $('#telefoneUsuario').val();
    var nomeResponsavelAcademia = $('#nomeResponsavelAcademia').val();
    var emailAcademia = $('#emailAcademia').val();
    var mensalidadeAcademia = $('#mensalidadeAcademia').val();
    var qtdTotalLicencas = $('#qtdTotalLicencas').val();
    var qtdLicencasUsadas = $('#qtdLicencasUsadas').val();
    var valorTotal = $('#valorTotal').val();
    var valorPago = $('#valorPago').val();
    var qtdParcelas = $('#qtdParcelas').val();
    var diaPagamentoAcademia = $('#diaPagamentoAcademia').val();

    var msnCNPJ = $('#msnCNPJ').val();

    if ((idAcademia === "") || (idPlano === "") || (idPacote === "") || (nomeAcademia === "") || (cnpjAcademia === "") ||
            (enderecoAcademia === "") || (estadoAcademia === "") || (cidadeAcademia === "") || (bairroAcademia === "") ||
            (cepAcademia === "") || (telefoneAcademia === "") || (nomeResponsavelAcademia === "") || (emailAcademia === "") ||
            (mensalidadeAcademia === "") || (qtdTotalLicencas === "") || (qtdLicencasUsadas === "") ||
            (valorTotal === "") || (valorPago === "") || (qtdParcelas === "") || (diaPagamentoAcademia === "")) {
        $('#dados-obrigatorios-academia').modal('show');
    } else if (idAcademia !== "novo") {
        verificarCnpjExiste(cnpjAcademia, idAcademia);
    } else if (msnCNPJ === "CNPJ válido!") {
        verificarCnpjExiste(cnpjAcademia, idAcademia);
    }
}

// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR ACADEMIA
function modalExcluirAcademia(idAcademia) {
    document.getElementById('idAcademia').value = idAcademia;
    $('#excluir-academia').modal('show');
}

// FUNÇÃO PARA BLOQUEAR OU DESBLOQUEAR UMA ACADEMIA
function modalDesBloquearAcademia(obj, idAcademia, statusConta) {
    var dados = 'idAcademia=' + idAcademia;
    // SE O STATUS CONTA FOR TRUE - ACADEMIA ATIVA - BLOQUEAR ACADEMIA
    if (statusConta) {
        $('#bloquear-academia').modal('show');
        $('#bloqueia-academia').click(function () {
            bloquearAcademia(dados);
        });
        $('#nao-bloqueia-academia').click(function () {
            obj.checked = false;
        });
    }
    // SE O STATUS CONTA FOR FALSE - ACADEMIA BLOQUEADA - DESBLOQUEAR ACADEMIA
    else {
        $('#desbloquear-academia').modal('show');
        $('#desbloqueia-academia').click(function () {
            desbloquearAcademia(dados);
        });
        $('#nao-desbloqueia-academia').click(function () {
            obj.checked = true;
        });
    }
}

// FUNÇÃO PARA PESQUISAR AS ACADEMIAS CADASTRADAS
function pesquisarAcademia() {
    var entrada, filtro, i;
    var tabelaAcademiasAtivas, trA, tdA;
    var tabelaAcademiasBloqueadas, trB, tdB;

    entrada = document.getElementById('pesquisarAcademia');
    filtro = entrada.value.toUpperCase();

    // PESQUISA AS ACADEMIAS ATIVAS NA TABELA
    tabelaAcademiasAtivas = document.getElementById('tabelaAcademiasAtivas');
    trA = tabelaAcademiasAtivas.getElementsByTagName('tr');
    for (i = 0; i < trA.length; i++) {
        tdA = trA[i].getElementsByTagName('td')[0];
        if (tdA) {
            if (tdA.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trA[i].style.display = "";
            } else {
                trA[i].style.display = "none";
            }
        }
    }

    // PESQUISA AS ACADEMIAS BLOQUEADAS NA TABELA
    tabelaAcademiasBloqueadas = document.getElementById('tabelaAcademiasBloqueadas');
    trB = tabelaAcademiasBloqueadas.getElementsByTagName('tr');
    for (i = 0; i < trB.length; i++) {
        tdB = trB[i].getElementsByTagName('td')[0];
        if (tdB) {
            if (tdB.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trB[i].style.display = "";
            } else {
                trB[i].style.display = "none";
            }
        }
    }
}

// FUNÇÃO PARA CONTROLE DOS PLANOS E PACOTES DA EMPRESA
// CONTROLANDO OS INPUTS RADIOS PARA QUE O USUÁRIO ESCOLHA CORRETAMENTE AS OPÇÕES 
function valorPlanoPacote() {
    var valorPlano = 0, valorPacote = 0, valorTotal = 0;
    var qtdLicencasPlano = 0, qtdLicencasPacote = 0, qtdTotalLicencas = 0;

    if (document.getElementById('planoSimples').checked) {
        document.getElementById('valorPlano').innerHTML = 'R$ 600,00';
        document.getElementById('idPlano').value = 1;

        document.getElementById('pacoteA').disabled = false;
        document.getElementById('pacoteB').disabled = false;
        document.getElementById('pacoteC').disabled = true;
        document.getElementById('pacoteD').disabled = true;

        document.getElementById('qtdLicencasPlano').innerHTML = '150 licenças';

        valorPlano = 600;
        qtdLicencasPlano = 150;
    } else if (document.getElementById('planoMedio').checked) {
        document.getElementById('valorPlano').innerHTML = 'R$ 840,00';
        document.getElementById('idPlano').value = 2;

        document.getElementById('pacoteA').disabled = false;
        document.getElementById('pacoteB').disabled = false;
        document.getElementById('pacoteC').disabled = false;
        document.getElementById('pacoteD').disabled = true;

        document.getElementById('qtdLicencasPlano').innerHTML = '300 licenças';

        valorPlano = 840;
        qtdLicencasPlano = 300;
    } else if (document.getElementById('planoPro').checked) {
        document.getElementById('valorPlano').innerHTML = 'R$ 1080,00';
        document.getElementById('idPlano').value = 3;

        document.getElementById('pacoteA').disabled = false;
        document.getElementById('pacoteB').disabled = false;
        document.getElementById('pacoteC').disabled = false;
        document.getElementById('pacoteD').disabled = false;

        document.getElementById('qtdLicencasPlano').innerHTML = '300 licenças';

        valorPlano = 1080;
        qtdLicencasPlano = 600;
    }

    if (document.getElementById('pacoteA').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 10,00';
        document.getElementById('idPacote').value = 1;

        document.getElementById('qtdLicencasPacote').innerHTML = '50 licenças';

        valorPacote = 10;
        qtdLicencasPacote = 50;
    } else if (document.getElementById('pacoteB').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 17,00';
        document.getElementById('idPacote').value = 2;

        document.getElementById('qtdLicencasPacote').innerHTML = '100 licenças';

        valorPacote = 17;
        qtdLicencasPacote = 100;
    } else if (document.getElementById('pacoteC').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 25,00';
        document.getElementById('idPacote').value = 3;

        document.getElementById('qtdLicencasPacote').innerHTML = '150 licenças';

        valorPacote = 25;
        qtdLicencasPacote = 150;
    } else if (document.getElementById('pacoteD').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 30,00';
        document.getElementById('idPacote').value = 4;

        document.getElementById('qtdLicencasPacote').innerHTML = '200 licenças';

        valorPacote = 30;
        qtdLicencasPacote = 200;
    } else if (document.getElementById('nenhum').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 0,00';
        document.getElementById('idPacote').value = 5;

        document.getElementById('qtdLicencasPacote').innerHTML = '0 licenças';

        valorPacote = 0;
        qtdLicencasPacote = 0;
    }

    valorTotal = valorPlano + valorPacote;
    qtdTotalLicencas = qtdLicencasPlano + qtdLicencasPacote;

    document.getElementById('valorPlanoPacote').innerHTML = 'R$ ' + valorTotal + ',00';
    document.getElementById('qtdPlanoPacoteLicencas').innerHTML = qtdTotalLicencas + ' licenças';
    document.getElementById('valorTotal').value = valorTotal;
    document.getElementById('qtdTotalLicencas').value = qtdTotalLicencas;
}