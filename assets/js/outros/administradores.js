// FUNÇÕES PARA MANUTENÇÃO DO ADMINISTRADOR

// FUNÇÃO PARA VERIFICAR OS DADOS DO ADMINISTRADOR
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CPF TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosAdministrador() {
    var idAdministrador = $('#idAdministrador').val();
    var idAcademia = $('#idAcademia').val();
    var nomeAdministrador = $('#nomeAdministrador').val();
    var loginAdministrador = $('#loginAdministrador').val();
    var senhaAdministrador = $('#senhaAdministrador').val();
    var emailAdministrador = $('#emailAdministrador').val();
    var cpfUsuario = $('#cpfUsuario').val();
    var rgAdministrador = $('#rgAdministrador').val();
    var sexoAdministrador = $('#sexoAdministrador').val();
    var dataNascimentoAdministrador = $('#dataNascimentoAdministrador').val();
    var idadeAdministrador = $('#idadeAdministrador').val();
    var enderecoAdministrador = $('#enderecoAdministrador').val();
    var estadoAdministrador = $('#estadoAdministrador').val();
    var cidadeAdministrador = $('#cidadeAdministrador').val();
    var bairroAdministrador = $('#bairroAdministrador').val();
    var cepAdministrador = $('#cepAdministrador').val();
    var telefoneUsuario = $('#telefoneUsuario').val();

    var msnCPF = $('#msnCPF').val();

    if ((idAdministrador === "") || (idAcademia === "") || (nomeAdministrador === "") || (loginAdministrador === "") ||
            (senhaAdministrador === "") /*|| (emailAdministrador === "") || (cpfUsuario === "") || (rgAdministrador === "") || 
             (dataNascimentoAdministrador === "") || (idadeAdministrador === "") || (enderecoAdministrador === "") || 
             (estadoAdministrador === "") || (cidadeAdministrador === "") || (bairroAdministrador === "") || 
             (sexoAdministrador === "") || (cepAdministrador === "") || (telefoneUsuario === "")*/) {
        $('#dados-obrigatorios-administrador').modal('show');
    } else if (msnCPF === "CPF válido!") {
        cpfCadastrado(cpfUsuario);
    }
}

// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR ADMINISTRADOR
function modalExcluirAdministrador(idUsuario) {
    $('#excluir-administrador').modal('show');
    document.getElementById('idUsuario').value = idUsuario;
}

// FUNÇÃO PARA BLOQUEAR OU DESBLOQUEAR UM ADMINISTRADOR
function modalDesBloquearAdministrador(obj, idUsuario, statusConta) {
    var dados = 'idUsuario=' + idUsuario;
    // SE O STATUS CONTA FOR TRUE - ADMINISTRADOR ATIVO - BLOQUEAR ADMINISTRADOR
    if (statusConta) {
        $('#bloquear-administrador').modal('show');
        $('#bloqueia-administrador').click(function () {
            bloquearAdministrador(dados);
        });
        $('#nao-bloqueia-administrador').click(function () {
            obj.checked = false;
        });
    }
    // SE O STATUS CONTA FOR FALSE - ADMINISTRADOR BLOQUEADO - DESBLOQUEAR ADMINISTRADOR
    else {
        $('#desbloquear-administrador').modal('show');
        $('#desbloqueia-administrador').click(function () {
            desbloquearAdministrador(dados);
        });
        $('#nao-desbloqueia-administrador').click(function () {
            obj.checked = true;
        });
    }
}

// FUNÇÃO PARA PESQUISAR OS ADMINISTRADORS CADASTRADOS
function pesquisarAdministrador() {
    var entrada, filtro, i;
    var tabelaAdministradoresAtivos, trA, tdA;
    var tabelaAdministradoresBloqueados, trB, tdB;

    entrada = document.getElementById('pesquisarAdministrador');
    filtro = entrada.value.toUpperCase();

    // PESQUISA OS ADMINISTRADORS ATIVOS NA TABELA
    tabelaAdministradoresAtivos = document.getElementById('tabelaAdministradoresAtivos');
    trA = tabelaAdministradoresAtivos.getElementsByTagName('tr');
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

    // PESQUISA OS ADMINISTRADORS BLOQUEADOS NA TABELA
    tabelaAdministradoresBloqueados = document.getElementById('tabelaAdministradoresBloqueados');
    trB = tabelaAdministradoresBloqueados.getElementsByTagName('tr');
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
function verificarSexoAdministrador() {

    var sexoAdministrador;

    if (document.getElementById('sexoFeminino').checked) {
        document.getElementById('sexoMasculino').disabled = false;
        document.getElementById('sexoOutros').disabled = false;

        document.getElementById('sexoFeminino').value = sexoAdministrador;
    } else if (document.getElementById('sexoMasculino').checked) {
        document.getElementById('sexoFeminino').disabled = false;
        document.getElementById('sexoOutros').disabled = false;
        
        document.getElementById('sexoMasculino').value = sexoAdministrador;
    } else if (document.getElementById('sexoOutros').checked) {
        document.getElementById('sexoMasculino').disabled = false;
        document.getElementById('sexoFeminino').disabled = false;
        
        document.getElementById('sexoFeminino').value = sexoAdministrador;
    }
    
    return sexoAdministrador;
}