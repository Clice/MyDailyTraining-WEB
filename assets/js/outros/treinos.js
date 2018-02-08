
// FUNÇÃO PARA PESQUISAR OS EXERCÍCIOS CADASTRADOS
function pesquisarExercicio() {
    var entrada, filtro, i;
    var tabelaExercicios, trA, tdA;

    entrada = document.getElementById('pesquisarExercicio');
    filtro = entrada.value.toUpperCase();

    // PESQUISA OS USUÁRIOS ATIVOS NA TABELA
    tabelaExercicios = document.getElementById('tabelaExercicios');
    trA = tabelaExercicios.getElementsByTagName('tr');
    for (i = 0; i < trA.length; i++) {
        tdA = trA[i].getElementsByTagName('td')[1];
        if (tdA) {
            if (tdA.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trA[i].style.display = "";
            } else {
                trA[i].style.display = "none";
            }
        }
    }
}