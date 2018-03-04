<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirUsuario() {
        var dados = "idUsuario=" + $('#idUsuario').val();
        $.ajax({
            url: "<?php echo base_url('UsuarioController/cExcluirUsuario'); ?>",
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
            url: "<?php echo base_url('UsuarioController/cBloquearUsuario'); ?>",
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
            url: "<?php echo base_url('UsuarioController/cDesbloquearUsuario'); ?>",
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

    function verificarCpfExiste(cpfUsuario, loginUsuario, idUsuario) {
        var dados = "cpfUsuario=" + cpfUsuario;
        $.ajax({
            url: "<?php echo base_url('UsuarioController/cVerificarCPF') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    if (data.id === idUsuario) {
                        verificarLoginExiste(loginUsuario, idUsuario);
                    } else {
                        $('#cpf-cadastrado').modal('show');
                    }
                } else {
                    verificarLoginExiste(loginUsuario, idUsuario);
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function verificarLoginExiste(loginUsuario, idUsuario) {
        var dados = 'loginUsuario=' + loginUsuario;
        $.ajax({
            url: "<?php echo base_url('UsuarioController/cVerificarLogin') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    if (data.id === idUsuario) {
                        cadEditUsuario();
                    } else {
                        $('#login-cadastrado').modal('show');
                    }
                } else {
                    cadEditUsuario();
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function cadEditUsuario() {
        $.ajax({
            url: "<?php echo base_url('UsuarioController/cCadastrarEditarUsuario') ?>",
            type: "POST",
            data: $('#formCadEditUsuario').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#cadastrar-editar-sucesso').modal('show');
                } else {
                    $('#cadastrar-editar-erro').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
