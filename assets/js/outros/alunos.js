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