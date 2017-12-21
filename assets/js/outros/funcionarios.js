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