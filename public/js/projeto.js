function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    alert(rotaUrl);
    alert(idDoRegistro);
    if (confirm('Deseja confirmar a exclusão?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 5000,
                });
            }
        }).done(function (data) {
            $.unblockUI();
            if (data.success == true) {
                window.location.reload();
                alert('Dados excluídos com sucesso!')
            } else {
                alert('Não foi possível excluir os dados')
            }
        }).fail(function (data) {
            $.unblockUI();
            alert('Não foi possível deletar os dados')
        });
    }
}

$('#mascara-valor').mask('#.##0,00', { reverse: true })