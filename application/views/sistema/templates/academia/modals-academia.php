
<!-- MODAL - DESEJA EXCLUIR A ACADEMIA? -->
<div class="modal fade text-xs-left" id="excluir-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja excluir a academia?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirAcademia();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ACADEMIA EXCLUÍDA COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Academia excluída com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR A ACADEMIA -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao excluir a academia.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR A ACADEMIA? -->
<div class="modal fade text-xs-left" id="bloquear-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja bloquear a academia?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-academia">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-academia">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ACADEMIA BLOQUEADA COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Academia bloqueada com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR A ACADEMIA -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao bloquear a academia.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR A ACADEMIA? -->
<div class="modal fade text-xs-left" id="desbloquear-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja desbloquear a academia?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-academia">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-academia">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ACADEMIA DESBLOQUEADA COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Academia desbloqueada com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR A ACADEMIA -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao desbloquear a academia.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>
