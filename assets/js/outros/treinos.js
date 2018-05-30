// FUNÇÃO PARA VERIFICAR OS DADOS DO TREINO
function verificarDadosTreino() {
    var idTreino = $('#idTreino').val();
    var nomeTreino = $('#nomeTreino').val();
    var idExercicio = $('#idExercicio').val();

    var domingo = false;
    var segunda = false;
    var terca = false;
    var quarta = false;
    var quinta = false;
    var sexta = false;
    var sabado = false;

    if ($('#domingo').length) {
        if (document.getElementById('domingo').checked) {
            domingo = true;
        }
    }

    if ($('#segunda').length) {
        if (document.getElementById('segunda').checked) {
            segunda = true;
        }
    } 

    if ($('#terca').length) {
        if (document.getElementById('terca').checked) {
            terca = true;
        }
    }

    if ($('#quarta').length) {
        if (document.getElementById('quarta').checked) {
            quarta = true;
        }
    }

    if ($('#quinta').length) {
        if (document.getElementById('quinta').checked) {
            quinta = true;
        }
    }

    if ($('#sexta').length) {
        if (document.getElementById('sexta').checked) {
            sexta = true;
        }
    }

    if ($('#sabado').length) {
        if (document.getElementById('sabado').checked) {
            sabado = true;
        }
    }

    if ((nomeTreino === "") || (idExercicio === "")) {
        $('#dados-obrigatorios').modal('show');
    } else if ((domingo === false) && (segunda === false) && (terca === false) && (quarta === false) && (quinta === false) &&
            (sexta === false) && (sabado === false)) {
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
