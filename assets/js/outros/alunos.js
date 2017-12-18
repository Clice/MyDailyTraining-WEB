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