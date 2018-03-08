// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR FUNCIONÁRIO
function modalExcluirFuncionario(idUsuario) {
    $('#excluir-funcionario').modal('show');
    document.getElementById('idUsuario').value = idUsuario;
}

// FUNÇÃO PARA BLOQUEAR OU DESBLOQUEAR UM FUNCIONÁRIO
function modalDesBloquearFuncionario(obj, idUsuario, statusConta) {
    var dados = 'idUsuario=' + idUsuario;
    // SE O STATUS CONTA FOR TRUE - FUNCIONÁRIO ATIVO - BLOQUEAR FUNCIONÁRIO
    if (statusConta) {
        $('#bloquear-funcionario').modal('show');
        $('#bloqueia-funcionario').click(function () {
            bloquearFuncionario(dados);
        });
        $('#nao-bloqueia-funcionario').click(function () {
            obj.checked = false;
        });
    }
    // SE O STATUS CONTA FOR FALSE - FUNCIONÁRIO BLOQUEADO - DESBLOQUEAR FUNCIONÁRIO
    else {
        $('#desbloquear-funcionario').modal('show');
        $('#desbloqueia-funcionario').click(function () {
            desbloquearFuncionario(dados);
        });
        $('#nao-desbloqueia-funcionario').click(function () {
            obj.checked = true;
        });
    }
}

// FUNÇÃO PARA PESQUISAR OS FUNCIONÁRIOS CADASTRADOS
function pesquisarFuncionario() {
    var entrada, filtro, i;
    var tabelaFuncionariosAtivos, trA, tdA;
    var tabelaFuncionariosBloqueados, trB, tdB;

    entrada = document.getElementById('pesquisarFuncionario');
    filtro = entrada.value.toUpperCase();

    // PESQUISA OS FUNCIONÁRIOS ATIVOS NA TABELA
    tabelaFuncionariosAtivos = document.getElementById('tabelaFuncionariosAtivos');
    trA = tabelaFuncionariosAtivos.getElementsByTagName('tr');
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

    // PESQUISA OS FUNCIONÁRIOS BLOQUEADOS NA TABELA
    tabelaFuncionariosBloqueados = document.getElementById('tabelaFuncionariosBloqueados');
    trB = tabelaFuncionariosBloqueados.getElementsByTagName('tr');
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