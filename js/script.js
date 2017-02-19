// $('#edit-modal').on('show.bs.modal', function(e) {
//
//     var $modal = $(this),
//         esseyId = e.relatedTarget.id;
//
//     $.ajax({
//         cache: false,
//         type: 'POST',
//         url: 'modal-window.php',
//         data: 'EID=' + essayId,
//         success: function(data) {
//             $modal.find('.edit-content').html(data);
//         }
//     });
// });

    $('#thanks').on('click',function () {
        $('#modal-thanks').modal('show');
    });
    $('#delete-all').on('click',function () {
       $('#modal-delete-all').modal('show');
       $.ajax({
           type : 'POST',
           url : 'delete-all.php',
           data : 'DA=ok'
       })
    });


