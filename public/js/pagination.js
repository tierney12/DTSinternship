$(document).ready(function () {
    $(document).on('click', '.pagination.ajax li:not(.active) a', function (e) {
        e.preventDefault();

        var container = $(this).parents('.pagination').data('container');

        $.ajax({
            url: $(this).attr('href'),
            success: function (response) {
                $(container).html(response);

                $("html, body").animate({
                    scrollTop: $(container).offset().top - $('.navbar-header').height() - $('.navbar-default.sidebar').height()
                }, "slow");

                clickableEvent();
            }
        });
    });
});