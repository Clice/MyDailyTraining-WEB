// FUNÇÃO PARA VERIFICAR OS DADOS DO TREINO
function verificarDadosTreino() {
    var nomeTreino = $('#nomeTreino').val();
    var idExercicio = $('#idExercicio').val();

    if ((nomeTreino === "") || (idExercicio === "")) {
        $('#dados-obrigatorios').modal('show');
    } else {
        cadEditTreino();
    }
}

// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR TREINO
function modalExcluirTreino(idTreino) {
    $('#excluir-treino').modal('show');
    document.getElementById('idTreino').value = idTreino;
}

// FUNÇÃO PARA PESQUISAR OS TREINOS CADASTRADOS
function pesquisarTreino() {
    var entrada, filtro, i;
    var tabelaTreinos, trA, tdA;

    entrada = document.getElementById('pesquisarTreino');
    filtro = entrada.value.toUpperCase();

    tabelaTreinos = document.getElementById('tabelaTreinos');
    trA = tabelaTreinos.getElementsByTagName('tr');
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
}

// FUNÇÃO PARA PESQUISAR OS EXERCÍCIOS CADASTRADOS
function pesquisarExercicio() {
    var entrada, filtro, i;
    var tabelaExercicios, trA, tdA;

    entrada = document.getElementById('pesquisarExercicio');
    filtro = entrada.value.toUpperCase();

    tabelaExercicios = document.getElementById('tabelaExercicios');
    trA = tabelaExercicios.getElementsByTagName('tr');
    for (i = 0; i < trA.length; i++) {
        tdA = trA[i].getElementsByTagName('td')[1];
        if (tdA) {
            if (tdA.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trA[i].style.display = "";
            } else {
                trA[i].style.display = "none";
            }
        }
    }
}

// FUNÇÃO PARA VERIFICAR OS DADOS DA AVALIAÇÃO FÍSICA DO ALUNO
function verificarDadosAvaliacaoFisica() {
    var idAluno = $('#idAluno').val();
    var idUsuario = $('#idUsuario').val();
    var pesoAluno = $('#pesoAluno').val();
    var estaturaAluno = $('#estaturaAluno').val();
    var cinturaAluno = $('#cinturaAluno').val();
    var abdomenAluno = $('#abdomenAluno').val();
    var quadrilAluno = $('#quadrilAluno').val();

    if ((idAluno === "") || (idUsuario === "") || (pesoAluno === "") || (estaturaAluno === "") || (cinturaAluno === "") ||
            (abdomenAluno === "") || (quadrilAluno === "")) {
        $('#dados-obrigatorios-avaliacao-fisica').modal('show');
    } else {
        cadAvaliacaoFisicaAluno();
    }
}