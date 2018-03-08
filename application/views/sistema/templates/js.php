
<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirUsuario() {
        var dados = "idUsuario=" + $('#idUsuario').val();
        $.ajax({
            url: "<?php echo base_url('sistema/UsuarioController/cExcluirUsuario'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso').modal('show');
                } else {
                    $('#excluir-erro').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearUsuario(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/UsuarioController/cBloquearUsuario'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso').modal("show");
                } else {
                    $('#bloquear-erro').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearUsuario(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/UsuarioController/cDesbloquearUsuario'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso').modal("show");
                } else {
                    $('#desbloquear-erro').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>