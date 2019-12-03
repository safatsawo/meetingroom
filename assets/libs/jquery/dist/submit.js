$(document).ready(function() {
    $(document).on('click', '.action', function() {
        var type = $(this).data('type')
        var id = $(this).data('id')
        var element = this;
        $.post("/switch.php", {
            id: id,
            type: type
        }, function() {
            if (type == 'approve') {
                $(element).replaceWith(`<button id='submit' type='button' class='btn btn-danger action' data-type='unapprove' data-id='${id}'>UNAPPROVE</button>`)
            } else {
                $(element).replaceWith(`<button id='submit' type='button' class='btn btn-success action' data-type='approve' data-id='${id}'>APPROVE</button>`)
            }

        });
    })
})