// FUNÇÕES PARA MANUTENÇÃO DO FUNCIONÁRIO

// FUNÇÃO PARA VERIFICAR OS DADOS DO FUNCIONÁRIO
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CPF TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosFuncionario() {
    var idUsuario = $('#idUsuario').val();
    var idAcademia = $('#idAcademia').val();
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

    if ((idUsuario === "") || (idAcademia === "") || (nomeUsuario === "") || (loginUsuario === "") ||
            (senhaUsuario === "") || (emailUsuario === "") || (cpfUsuario === "") || (rgUsuario === "") || 
             (dataNascimentoUsuario === "") || (idadeUsuario === "") || (enderecoUsuario === "") || 
             (estadoUsuario === "") || (cidadeUsuario === "") || /*(bairroAdministrador === "") || 
             (sexoAdministrador === "") || */(cepUsuario === "") || (telefoneUsuario === "")) {
        $('#dados-obrigatorios-funcionario').modal('show');
    } else if (senhaUsuario !== confirmarSenha) {
        $('#senhas-diferentes').modal('show');
    } else if (msnCPF === "CPF válido!") {
        verificarCPF(cpfUsuario, loginUsuario);
    } 
}

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

// FUNÇÃO PARA CONTROLE DOS PLANOS E PACOTES DA EMPRESA
// CONTROLANDO OS INPUTS RADIOS PARA QUE O USUÁRIO ESCOLHA CORRETAMENTE AS OPÇÕES 
function verificarSexoFuncionario() {
    var sexoFuncionario;

    // SE O SEXO FOR FEMININO
    if (document.getElementById('sexoFeminino').checked) {
        document.getElementById('sexoFeminino').value = 'Feminino';
    } 
    // SE O SEXO FOR MASCULINO
    else if (document.getElementById('sexoMasculino').checked) {       
        document.getElementById('sexoMasculino').value = 'Masculino';
    } 
    // SE O SEXO FOR OUTROS
    else if (document.getElementById('sexoOutros').checked) {       
        document.getElementById('sexoMasculino').value = 'Outros';
    }
}