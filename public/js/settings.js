$(document).ready(function() {
    sortableEvent();

    $(document).on('click', '#button-save-changes', function() {
        $('#change-sort-order').submit();
    });

    $('#settings-tab li').on('click', function() {
        var url = $(this).data('url');

        $.ajax({
            url: url,
            success: function(response) {
                $('#tab-content-wrapper').html(response);
                $('html, body').animate({
                    scrollTop: $('#settings-content').offset().top - $('.navbar-header').height() - $('.navbar-default.sidebar').height()
                }, "slow");

                sortableEvent();
                clickableEvent();
            }
        });
    });

    $(document).on('click', '#tab-stock-changes li', function () {
        var url = $(this).attr('data-url');

        $.ajax({
            url: url,
            beforeSend: function () {
                $('.tab-changes-inner').html('');
            },
            success: function (response) {
                $('.tab-changes-inner').html(response);
            }
        });
    });

    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            beforeSend: function () {
                $('.tab-changes-inner').html('');
            },
            success: function (response) {
                $('.tab-changes-inner').html(response);
            }
        });
    });

    var url = document.location.toString();

    if (url.match('#')) {
        var option = url.split('#')[1];

        $('#settings-tab').find('#' + option).trigger('click').tab('show');
    }
});

function itemSortableStopCallback($element) {
    $('#button-save-changes').removeClass('hidden');

    $element.find('tbody > tr').each(function (i) {
        var position = i + 1;

        $(this).find('.item-sort_order').first().val(position);
        $(this).find('.position').html(position)
    });
}

function sortableEvent() {
    if ($(".table-sortable").length > 0) {
        $(".table-sortable").sortable({
            items: "tbody > tr",
            stop: function (event, ui) {
                itemSortableStopCallback($(this));
            }
        });
    }
}