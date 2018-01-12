$(document).ready(function () {
    $("#nomeAlterarSenha").hide();
    $("#alterarSenha").hide();
    $("#botaoAlterarSenha").hide();
});

var verificarTamanhoSenha = function () {
    var tamanho = document.getElementById('senhaUsuario').value.length;
    if (tamanho < 6) {
        document.getElementById('msnSenha').style.color = 'red';
        document.getElementById('msnSenha').innerHTML = 'A senha deve ter 6 ou mais caracteres';
    } else {
        document.getElementById('msnSenha').style.color = 'green';
        document.getElementById('msnSenha').innerHTML = 'Senha válida';
    }
};

var verificarSenhasIguais = function () {
    var senhaUsuario = document.getElementById('senhaUsuario').value;
    var confirmarSenha = document.getElementById('confirmarSenha').value;

    if (senhaUsuario === confirmarSenha) {
        document.getElementById('msnSenhasIguais').style.color = 'green';
        document.getElementById('msnSenhasIguais').innerHTML = 'Senhas iguais';
    } else {
        document.getElementById('msnSenhasIguais').style.color = 'red';
        document.getElementById('msnSenhasIguais').innerHTML = 'As senhas são diferentes';
    }
};