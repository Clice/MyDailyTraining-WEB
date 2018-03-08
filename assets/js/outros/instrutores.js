// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR INSTRUTOR
function modalExcluirInstrutor(idUsuario) {
    $('#excluir-instrutor').modal('show');
    document.getElementById('idUsuario').value = idUsuario;
}

// FUNÇÃO PARA BLOQUEAR OU DESBLOQUEAR UM INSTRUTOR
function modalDesBloquearInstrutor(obj, idUsuario, statusConta) {
    var dados = 'idUsuario=' + idUsuario;
    // SE O STATUS CONTA FOR TRUE - INSTRUTOR ATIVO - BLOQUEAR INSTRUTOR
    if (statusConta) {
        $('#bloquear-instrutor').modal('show');
        $('#bloqueia-instrutor').click(function () {
            bloquearInstrutor(dados);
        });
        $('#nao-bloqueia-instrutor').click(function () {
            obj.checked = false;
        });
    }
    // SE O STATUS CONTA FOR FALSE - INSTRUTOR BLOQUEADO - DESBLOQUEAR INSTRUTOR
    else {
        $('#desbloquear-instrutor').modal('show');
        $('#desbloqueia-instrutor').click(function () {
            desbloquearInstrutor(dados);
        });
        $('#nao-desbloqueia-instrutor').click(function () {
            obj.checked = true;
        });
    }
}

// FUNÇÃO PARA PESQUISAR OS INSTRUTORES CADASTRADOS
function pesquisarInstrutor() {
    var entrada, filtro, i;
    var tabelaInstrutoresAtivos, trA, tdA;
    var tabelaInstrutoresBloqueados, trB, tdB;

    entrada = document.getElementById('pesquisarInstrutor');
    filtro = entrada.value.toUpperCase();

    // PESQUISA OS INSTRUTORES ATIVOS NA TABELA
    tabelaInstrutoresAtivos = document.getElementById('tabelaInstrutoresAtivos');
    trA = tabelaInstrutoresAtivos.getElementsByTagName('tr');
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

    // PESQUISA OS INSTRUTORES BLOQUEADOS NA TABELA
    tabelaInstrutoresBloqueados = document.getElementById('tabelaInstrutoresBloqueados');
    trB = tabelaInstrutoresBloqueados.getElementsByTagName('tr');
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