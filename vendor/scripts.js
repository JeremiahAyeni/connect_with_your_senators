$(document).ready(function () {
    var table = $('#senatorsList').DataTable({
        fixedHeader: true

    });
});

//modals
$('.showModal').on('click', function (e) {
    e.preventDefault();
    $('#defaultModal').appendTo("body").modal('show').find('.modal-content').load($(this).attr('href'));


});



