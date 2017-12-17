function verificarCpf() {
    var cpfUsuario = $('#cpfUsuario').val();
    $('#cpfUsuario').val(formatarCpjCnpj(cpfUsuario));

    if (validarCpfCnpj(cpfUsuario)) {
        document.getElementById('msnCPF').style.color = 'green';
        document.getElementById('msnCPF').innerHTML = 'CPF válido!';
        document.getElementById('msnCPF').value = 'CPF válido!';
    } else {
        document.getElementById('msnCPF').style.color = 'red';
        document.getElementById('msnCPF').innerHTML = 'CPF inválido!';
        document.getElementById('msnCPF').value = 'CPF inválido!';
    }
}

function verificarCnpj() {
    var cnpjAcademia = $('#cnpjAcademia').val();
    $('#cnpjAcademia').val(formatarCpjCnpj(cnpjAcademia));

    if (validarCpfCnpj(cnpjAcademia)) {
        document.getElementById('msnCNPJ').style.color = 'green';
        document.getElementById('msnCNPJ').innerHTML = 'CNPJ válido!';
        document.getElementById('msnCNPJ').value = 'CNPJ válido!';
    } else {
        document.getElementById('msnCNPJ').style.color = 'red';
        document.getElementById('msnCNPJ').innerHTML = 'CNPJ inválido!';
        document.getElementById('msnCNPJ').value = 'CNPJ inválido!';
    }
}

function verificarCpfCnpj(valor) {
    valor = valor.toString();
    valor = valor.replace(/[^0-9]/g, '');

    if (valor.length === 11) {
        return 'CPF';
    } else if (valor.length === 14) {
        return 'CNPJ';
    } else {
        return false;
    }
}

function calcularDigitosPosicoes(digitos, posicoes = 10, somarDigitos = 0) {
    digitos = digitos.toString();

    for (var i = 0; i < digitos.length; i++) {
        somarDigitos = somarDigitos + (digitos[i] * posicoes);
        posicoes--;

        if (posicoes < 2) {
            posicoes = 9;
        }
    }

    somarDigitos = somarDigitos % 11;

    if (somarDigitos < 2) {
        somarDigitos = 0;
    } else {
        somarDigitos = 11 - somarDigitos;
    }

    var cpf = digitos + somarDigitos;

    return cpf;
}

function validarCpf(valor) {
    valor = valor.toString();
    valor = valor.replace(/[^0-9]/g, '');

    var digitos = valor.substr(0, 9);
    var novoCpf = calcularDigitosPosicoes(digitos);
    var novoCpf = calcularDigitosPosicoes(novoCpf, 11);

    if (novoCpf === valor) {
        return true;
    } else {
        return false;
    }
}

function validarCnpj(valor) {
    valor = valor.toString();
    valor = valor.replace(/[^0-9]/g, '');

    var cnpjOriginal = valor;
    var primeirosNumerosCnpj = valor.substr(0, 12);
    var primeiroCalculo = calcularDigitosPosicoes(primeirosNumerosCnpj, 5);
    var segundoCalculo = calcularDigitosPosicoes(primeiroCalculo, 6);
    var cnpj = segundoCalculo;

    if (cnpj === cnpjOriginal) {
        return true;
    }

    return false;
}

function validarCpfCnpj(valor) {
    var valida = verificarCpfCnpj(valor);

    valor = valor.toString();
    valor = valor.replace(/[^0-9]/g, '');

    if (valida === 'CPF') {
        return validarCpf(valor);
    } else if (valida === 'CNPJ') {
        return validarCnpj(valor);
    } else {
        return false;
    }
}

function formatarCpjCnpj(valor) {
    var formatado = '';
    var valida = verificarCpfCnpj(valor);

    valor = valor.toString();
    valor = valor.replace(/[^0-9]/g, '');

    if (valida === 'CPF') {
        if (validarCpf(valor)) {
            formatado = valor.substr(0, 3) + '.';
            formatado += valor.substr(3, 3) + '.';
            formatado += valor.substr(6, 3) + '-';
            formatado += valor.substr(9, 2) + '';
        }
    } else if (valida === 'CNPJ') {
        formatado = valor.substr(0, 2) + '.';
        formatado += valor.substr(2, 3) + '.';
        formatado += valor.substr(5, 3) + '/';
        formatado += valor.substr(8, 4) + '-';
        formatado += valor.substr(12, 14) + '';
    }

    return formatado;
}