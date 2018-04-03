
<!-- MODAL - DESEJA EXCLUIR O INSTRUTOR? -->
<div class="modal fade text-xs-left" id="excluir" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja excluir o(a) instrutor(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirUsuario();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - INSTRUTOR EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Instrutor(a) excluído(a) com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($voltarPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O INSTRUTOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao excluir o(a) instrutor(a).</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O INSTRUTOR? -->
<div class="modal fade text-xs-left" id="bloquear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja bloquear o(a) instrutor(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - INSTRUTOR BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Instrutor(a) bloqueado(a) com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O INSTRUTOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao bloquear o(a) instrutor(a).</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O INSTRUTOR? -->
<div class="modal fade text-xs-left" id="desbloquear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja desbloquear o(a) instrutor(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - INSTRUTOR DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Instrutor(a) desbloqueado(a) com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O INSTRUTOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao desbloquear o(a) instrutor(a).</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - FALHA AO SE CONECTAR COM A INTERNET -->
<div class="modal fade text-xs-left" data-backdrop="static" id="falha-internet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Sem conexão com a Internet.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
