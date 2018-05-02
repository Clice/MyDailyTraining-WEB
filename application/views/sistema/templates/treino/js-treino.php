
<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirTreino() {
        var dados = "idTreino=" + $('#idTreino').val();
        $.ajax({
            url: "<?php echo base_url('TreinoController/cExcluirTreino'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-treino').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-treino').modal('show');
                } else {
                    $('#excluir-erro-treino').modal('show');
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }
</script>
