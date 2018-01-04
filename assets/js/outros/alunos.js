// FUNÇÕES PARA MANUTENÇÃO DO ALUNO

// FUNÇÃO PARA VERIFICAR OS DADOS DO ALUNO
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CPF TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosAluno() {
    var idAluno = $('#idUsuario').val();
    var idAcademia = $('#idAcademia').val();
    var nomeAluno = $('#nomeUsuario').val();
    var dataNascimentoAluno = $('#dataNascimentoUsuario').val();
    var cpfAluno = $('#cpfUsuario').val();
    var rgAluno = $('#rgUsuario').val();
    var emailAluno = $('#emailUsuario').val();
    var sexoUsuario = $('#sexoUsuario').val();
    var telefoneUsuario = $('#telefoneUsuario').val();
    var enderecoUsuario = $('#enderecoUsuario').val();
    var estadoUsuario = $('#estadoUsuario').val();
    var cidadeUsuario = $('#cidadeUsuario').val();
    var bairroUsuario = $('#bairroUsuario').val();
    var cepUsuario = $('#cepUsuario').val();
    var objetivoAluno = $('objetivoAluno').val();
    var dataValidadeExame = $('dataValidadeExame').val();
    var diaPagamentoAluno = $('diaPagamentoAluno').val();

    var msnCPF = $('#msnCPF').val();

    if ((idAluno === "") || (idAcademia === "") || (nomeAluno === "") || (dataNascimentoAluno === "") ||
            (cpfAluno === "") || (rgAluno === "") || (emailAluno === "") || (sexoUsuario === "") ||
            (telefoneUsuario === "") || (enderecoUsuario === "") || (estadoUsuario === "") || (cidadeUsuario === "") ||
            (bairroUsuario === "") || (cepUsuario === "") || (objetivoAluno === "") || (dataValidadeExame === "") ||
            (diaPagamentoAluno === "")) {
        $('#dados-obrigatorios-aluno').modal('show');
    } else if (msnCPF === "CPF válido!") {
        verificarCPF(cpfAluno);
    }
}

// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR ALUNO
function modalExcluirAluno(idAluno) {
    $('#excluir-aluno').modal('show');
    document.getElementById('idAluno').value = idAluno;
}

// FUNÇÃO PARA BLOQUEAR OU DESBLOQUEAR UM ALUNO
function modalDesBloquearAluno(obj, idAluno, statusAluno) {
    var dados = 'idAluno=' + idAluno;
    // SE O STATUS CONTA FOR TRUE - ALUNO ATIVO - BLOQUEAR ALUNO
    if (statusAluno) {
        $('#bloquear-aluno').modal('show');
        $('#bloqueia-aluno').click(function () {
            bloquearAluno(dados);
        });
        $('#nao-bloqueia-aluno').click(function () {
            obj.checked = false;
        });
    }
// SE O STATUS CONTA FOR FALSE - ALUNO BLOQUEADO - DESBLOQUEAR ALUNO
    else {
        $('#desbloquear-aluno').modal('show');
        $('#desbloqueia-aluno').click(function () {
            desbloquearAluno(dados);
        });
        $('#nao-desbloqueia-aluno').click(function () {
            obj.checked = true;
        });
    }
}

// FUNÇÃO PARA PESQUISAR OS ALUNOS CADASTRADOS
function pesquisarAluno() {
    var entrada, filtro, i;
    var tabelaAlunosAtivos, trA, tdA;
    var tabelaAlunosBloqueados, trB, tdB;
    entrada = document.getElementById('pesquisarAluno');
    filtro = entrada.value.toUpperCase();
    // PESQUISA OS ALUNOS ATIVOS NA TABELA
    tabelaAlunosAtivos = document.getElementById('tabelaAlunosAtivos');
    trA = tabelaAlunosAtivos.getElementsByTagName('tr');
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

// PESQUISA OS ALUNOS BLOQUEADOS NA TABELA
    tabelaAlunosBloqueados = document.getElementById('tabelaAlunosBloqueados');
    trB = tabelaAlunosBloqueados.getElementsByTagName('tr');
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
function verificarSexoAluno() {    
    // SE O SEXO FOR FEMININO
    if (document.getElementById('sexoFeminino').checked) {
        document.getElementById('sexoUsuario').value = 'Feminino';
    }
    // SE O SEXO FOR MASCULINO
    else if (document.getElementById('sexoMasculino').checked) {
        document.getElementById('sexoUsuario').value = 'Masculino';
    }
    // SE O SEXO FOR OUTROS
    else if (document.getElementById('sexoOutros').checked) {
        document.getElementById('sexoUsuario').value = 'Outros';
    }
}

function responsaveisHabilitar() {
    if (document.getElementById('responsavelSim').checked) {
        document.getElementById('nomeResponsavelUsuario').disabled = false;
        document.getElementById('telefoneResponsavelUsuario').disabled = false;
        document.getElementById('responsavelNao').checked = false;
    } else if (document.getElementById('responsavelNao').checked) {
        document.getElementById('nomeResponsavelUsuario').value = "";
        document.getElementById('telefoneResponsavelUsuario').value = "";
        document.getElementById('nomeResponsavelUsuario').disabled = true;
        document.getElementById('telefoneResponsavelUsuario').disabled = true;
        document.getElementById('responsavelSim').checked = false;
    }
}

function verificarObjetivoAluno() {
    if (document.getElementById('outros').checked) {
        document.getElementById('outrosObjetivoAluno').disabled = false;
    } else {
        document.getElementById('outrosObjetivoAluno').value = "";
        document.getElementById('outrosObjetivoAluno').disabled = true;
    }
}

function cirurgiasHabilitar() {
    if (document.getElementById('cirurgiasSim').checked) {
        document.getElementById('cirurgiasUsuario').disabled = false;
    } else if (document.getElementById('cirurgiasNao').checked) {
        document.getElementById('cirurgiasUsuario').value = "";
        document.getElementById('cirurgiasUsuario').disabled = true;
    }
}

function medicamentosHabilitar() {
    if (document.getElementById('medicamentosSim').checked) {
        document.getElementById('medicamentosUsuario').disabled = false;
    } else if (document.getElementById('medicamentosNao').checked) {
        document.getElementById('medicamentosUsuario').value = "";
        document.getElementById('medicamentosUsuario').disabled = true;
    }
}

function doencasFamiliaresHabilitar() {
    if (document.getElementById('doencasFamiliaresSim').checked) {
        document.getElementById('doencasFamiliaresUsuario').disabled = false;
    } else if (document.getElementById('doencasFamiliaresNao').checked) {
        document.getElementById('doencasFamiliaresUsuario').value = "";
        document.getElementById('doencasFamiliaresUsuario').disabled = true;
    }
}