
$('.delete-action').each(function () {
    $(this).on('click', function () {
        $('#myModal .modal-footer a').attr('href', $(this).attr('href'));
    });
});

$('.table-clicked').each(function () {
    $(this).on('click', function () {
        var url = $(this).attr('title');
        window.location.href = url;
    });
});
