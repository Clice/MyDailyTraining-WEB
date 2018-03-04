// FUNÇÕES PARA MANUTENÇÃO DO ALUNO

// FUNÇÃO PARA VERIFICAR OS DADOS DO ALUNO
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CPF TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosAluno() {
    var idAluno = $('#idAluno').val();
    var idAcademia = $('#idAcademia').val();
    var nomeAluno = $('#nomeAluno').val();
    var dataNascimentoAluno = $('#dataNascimentoAluno').val();
    var cpfAluno = $('#cpfUsuario').val();
    var rgAluno = $('#rgAluno').val();
    var emailAluno = $('#emailAluno').val();
    var sexoAluno = $('#sexoAluno').val();
    var telefoneAluno = $('#telefoneUsuario').val();
    var enderecoAluno = $('#enderecoAluno').val();
    var estadoAluno = $('#estadoAluno').val();
    var cidadeAluno = $('#cidadeAluno').val();
    var bairroAluno = $('#bairroAluno').val();
    var cepAluno = $('#cepAluno').val();
    var objetivoAluno = $('#objetivoAluno').val();
    var diaValidadeExame = $('#diaValidadeExame').val();
    var diasTreinoAluno = $('#diasTreinoAluno').val();
    var diaPagamentoAluno = $('#diaPagamentoAluno').val();

    var msnCPF = $('#msnCPF').val();

    if ((idAluno === "") || (idAcademia === "") || (nomeAluno === "") || (dataNascimentoAluno === "") || (cpfAluno === "") ||
            (rgAluno === "") || (emailAluno === "") || (sexoAluno === "") || (telefoneAluno === "") || (enderecoAluno === "") ||
            (estadoAluno === "") || (cidadeAluno === "") || (bairroAluno === "") || (cepAluno === "") || (objetivoAluno === "") ||
            (diaValidadeExame === "Selecione o dia") || (diaPagamentoAluno === "Selecione o dia")) {
        $('#dados-obrigatorios-aluno').modal('show');
    } else {
        if (msnCPF === "CPF válido!") {            
            verificarCPF(cpfAluno, idAluno);
        } else if (idAluno !== "novo") {
            verificarCPF(cpfAluno, idAluno);
        }
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

function verificarSexoAluno() {
    // SE O SEXO FOR FEMININO
    if (document.getElementById('sexoFeminino').checked) {
        document.getElementById('sexoAluno').value = 'Feminino';
    }
    // SE O SEXO FOR MASCULINO
    else if (document.getElementById('sexoMasculino').checked) {
        document.getElementById('sexoAluno').value = 'Masculino';
    }
    // SE O SEXO FOR OUTROS
    else if (document.getElementById('sexoOutros').checked) {
        document.getElementById('sexoAluno').value = 'Outros';
    }
}

function verificarObjetivoAluno() {
    if (document.getElementById('hipertrofia').checked) {
        document.getElementById('objetivoAluno').value = 'Hipertrofia';
    } else if (document.getElementById('forca').checked) {
        document.getElementById('objetivoAluno').value = 'Força';
    } else if (document.getElementById('qualiDeVida').checked) {
        document.getElementById('objetivoAluno').value = 'Quali. de Vida';
    } else if (document.getElementById('emagrecimento').checked) {
        document.getElementById('objetivoAluno').value = 'Emagrecimento';
    } else if (document.getElementById('resAerobica').checked) {
        document.getElementById('objetivoAluno').value = 'Res. Aeróbica';
    }
}