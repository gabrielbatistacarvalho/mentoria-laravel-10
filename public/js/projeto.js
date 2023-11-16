function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    if (confirm('Deseja confirmar a exclusão?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id:idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                })
            },
        }).done(function (data) {
            $.unblockUI();
            if (data.success == true) {
                window.location.reload();
            } else {
                alert('Nãso foi possível excluir este registro...');
            }
        }).fail(function (data) {
            $.unblockUI();
            alert('Não foi possível excluir o registro');
        });
    }
}

$('#mascara_valor').mask('#.##0,00', { reverse: true });

$('#mascara_cpf').mask('###########000.000.000-00', { reverse: false });