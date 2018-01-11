
<script type="text/javascript">
    function excluirAcademia() {
        var dados = "idAcademia=" + $('#idAcademia').val();
        $.ajax({
            url: "<?php echo base_url('AcademiaController/cExcluirAcademia'); ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                $('#excluir-academia').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-academia').modal('show');
                } else {
                    $('#excluir-erro-academia').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearAcademia(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('AcademiaController/cBloquearAcademia'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-academia').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-academia').modal("show");
                } else {
                    $('#bloquear-erro-academia').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearAcademia(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('AcademiaController/cDesbloquearAcademia'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-academia').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-academia').modal("show");
                } else {
                    $('#desbloquear-erro-academia').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
