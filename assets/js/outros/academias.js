function valorPlanoPacote() {
    var valorPlano = 0, valorPacote = 0, valorTotal = 0;
    var qtdLicencasPlano = 0, qtdLicencasPacote = 0, qtdTotalLicencas = 0;

    if (document.getElementById('planoSimples').checked) {
        document.getElementById('valorPlano').innerHTML = 'R$ 600,00';
        document.getElementById('idPlano').value = 1;

        document.getElementById('pacoteA').disabled = false;
        document.getElementById('pacoteB').disabled = false;
        document.getElementById('pacoteC').disabled = true;
        document.getElementById('pacoteD').disabled = true;

        document.getElementById('qtdLicencasPlano').innerHTML = '150 licenças';

        valorPlano = 600;
        qtdLicencasPlano = 150;
    } else if (document.getElementById('planoMedio').checked) {
        document.getElementById('valorPlano').innerHTML = 'R$ 840,00';
        document.getElementById('idPlano').value = 2;

        document.getElementById('pacoteA').disabled = false;
        document.getElementById('pacoteB').disabled = false;
        document.getElementById('pacoteC').disabled = false;
        document.getElementById('pacoteD').disabled = true;

        document.getElementById('qtdLicencasPlano').innerHTML = '300 licenças';

        valorPlano = 840;
        qtdLicencasPlano = 300;
    } else if (document.getElementById('planoPro').checked) {
        document.getElementById('valorPlano').innerHTML = 'R$ 1080,00';
        document.getElementById('idPlano').value = 3;

        document.getElementById('pacoteA').disabled = false;
        document.getElementById('pacoteB').disabled = false;
        document.getElementById('pacoteC').disabled = false;
        document.getElementById('pacoteD').disabled = false;

        document.getElementById('qtdLicencasPlano').innerHTML = '300 licenças';

        valorPlano = 1080;
        qtdLicencasPlano = 600;
    }

    if (document.getElementById('pacoteA').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 10,00';
        document.getElementById('idPacote').value = 1;

        document.getElementById('qtdLicencasPacote').innerHTML = '50 licenças';

        valorPacote = 10;
        qtdLicencasPacote = 50;
    } else if (document.getElementById('pacoteB').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 17,00';
        document.getElementById('idPacote').value = 2;

        document.getElementById('qtdLicencasPacote').innerHTML = '100 licenças';

        valorPacote = 17;
        qtdLicencasPacote = 100;
    } else if (document.getElementById('pacoteC').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 25,00';
        document.getElementById('idPacote').value = 3;

        document.getElementById('qtdLicencasPacote').innerHTML = '150 licenças';

        valorPacote = 25;
        qtdLicencasPacote = 150;
    } else if (document.getElementById('pacoteD').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 30,00';
        document.getElementById('idPacote').value = 4;

        document.getElementById('qtdLicencasPacote').innerHTML = '200 licenças';

        valorPacote = 30;
        qtdLicencasPacote = 200;
    } else if (document.getElementById('nenhum').checked) {
        document.getElementById('valorPacote').innerHTML = 'R$ 0,00';
        document.getElementById('idPacote').value = 5;

        document.getElementById('qtdLicencasPacote').innerHTML = '0 licenças';

        valorPacote = 0;
        qtdLicencasPacote = 0;
    }

    valorTotal = valorPlano + valorPacote;
    qtdTotalLicencas = qtdLicencasPlano + qtdLicencasPacote;

    document.getElementById('valorPlanoPacote').innerHTML = 'R$ ' + valorTotal + ',00';
    document.getElementById('qtdPlanoPacoteLicencas').innerHTML = qtdTotalLicencas + ' licenças';
    document.getElementById('valorTotal').value = valorTotal;
    document.getElementById('qtdTotalLicencas').value = qtdTotalLicencas;
}