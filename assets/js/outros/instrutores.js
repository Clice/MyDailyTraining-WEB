// FUNÇÕES PARA MANUTENÇÃO DO INSTRUTOR

// FUNÇÃO PARA VERIFICAR OS DADOS DO INSTRUTOR
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CPF TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosInstrutor() {
    var idUsuario = $('#idUsuario').val();
    //var idAcademia = $('#idAcademia').val();
    var nomeUsuario = $('#nomeUsuario').val();
    var loginUsuario = $('#loginUsuario').val();
    var senhaUsuario = $('#senhaUsuario').val();
    var confirmarSenha = $('#confirmarSenha').val();
    var emailUsuario = $('#emailUsuario').val();
    var cpfUsuario = $('#cpfUsuario').val();
    var rgUsuario = $('#rgUsuario').val();
    //var sexoUsuario = $('#sexoUsuario').val();
    var dataNascimentoUsuario = $('#dataNascimentoUsuario').val();
    var idadeUsuario = $('#idadeUsuario').val();
    var enderecoUsuario = $('#enderecoUsuario').val();
    var estadoUsuario = $('#estadoUsuario').val();
    var cidadeUsuario = $('#cidadeUsuario').val();
    //var bairroUsuario = $('#bairroUsuario').val();
    var cepUsuario = $('#cepUsuario').val();
    var telefoneUsuario = $('#telefoneUsuario').val();

    var msnCPF = $('#msnCPF').val();

    if ((idUsuario === "") || /*(idAcademia === "") ||*/ (nomeUsuario === "") || (loginUsuario === "") ||
            (senhaUsuario === "") || (emailUsuario === "") || (cpfUsuario === "") || (rgUsuario === "") || 
             (dataNascimentoUsuario === "") || (idadeUsuario === "") || (enderecoUsuario === "") || 
             (estadoUsuario === "") || (cidadeUsuario === "") || /*(bairroAdministrador === "") || 
             (sexoAdministrador === "") || */(cepUsuario === "") || (telefoneUsuario === "")) {
        $('#dados-obrigatorios-instrutor').modal('show');
    } else if (senhaUsuario !== confirmarSenha) {
        $('#senhas-diferentes').modal('show');
    } else if (msnCPF === "CPF válido!") {
        verificarCPF(cpfUsuario, loginUsuario);
    } 
}

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

// FUNÇÃO PARA CONTROLE DOS PLANOS E PACOTES DA EMPRESA
// CONTROLANDO OS INPUTS RADIOS PARA QUE O USUÁRIO ESCOLHA CORRETAMENTE AS OPÇÕES 
function verificarSexoInstrutor() {
    var sexoInstrutor;

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