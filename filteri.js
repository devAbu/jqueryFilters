$(document).ready(function () {
    $('.results > li').hide();

    $('div.checkboxs').find('input:checkbox').click(function () {
        $('.results > li').hide();
        $('div.checkboxs').find('input:checked').each(function () {
            $('.results > li.' + $(this).attr('rel')).show();
        });
    });
});      