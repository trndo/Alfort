$(document).ready(function () {
    $('.copyText').click(function () {
        var content = $(this).text();
        navigator.clipboard.writeText(content);
        $('#copyAlert').text('скопировано').fadeIn('slow').fadeOut('slow');
    });
});