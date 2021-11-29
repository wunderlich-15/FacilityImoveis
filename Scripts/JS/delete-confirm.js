$(document).ready(function(){
    $('a[data-confirm]').click(function(ev){
        var href = $(this).attr('href');
        if(!('#confirm-delete').length){
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">ATENÇÃO<i class="bi bi-exclamation-octagon-fill"></i></h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">Esta ação é irreversivel, tem certeza que deseja continuar?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataConfirmOK">Desativar Conta</a></div></div></div></div>');
        }
        $('#dataConfirmOK').attr('href', href);
        $('#confirm-delete').modal({show: true});
        return false;
    });
});