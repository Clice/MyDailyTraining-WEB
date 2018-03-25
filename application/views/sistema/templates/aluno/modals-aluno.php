
<!-- MODAL - DESEJA EXCLUIR O ALUNO? -->
<div class="modal fade text-xs-left" id="excluir-aluno" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja excluir o(a) aluno(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirAluno();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ALUNO EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Aluno(a) excluído(a) com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O ALUNO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao excluir o(a) aluno(a).</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O ALUNO? -->
<div class="modal fade text-xs-left" id="bloquear-aluno" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja bloquear o(a) aluno(a)?</h4>
                <br>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-aluno">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-aluno">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ALUNO BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Aluno(a) bloqueado(a) com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O ALUNO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao bloquear o(a) aluno(a).</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O ALUNO? -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Deseja desbloquear o(a) aluno(a)?</h4>
                <br>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-aluno">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-aluno">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ALUNO DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Aluno(a) desbloqueado(a) com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O ALUNO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao desbloquear o(a) aluno(a).</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
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