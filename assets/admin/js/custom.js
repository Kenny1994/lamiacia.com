
$('.user-delete').each(function () {
    $(this).on('click', function () {
        $('#myModal .modal-footer a').attr('href', $(this).attr('href'));
    });
});


