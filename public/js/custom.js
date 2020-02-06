/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {

    "use strict";

    var body = $("body");

    $(function () {
        $(".preloader").fadeOut();
    });

    /* ===== Theme Settings ===== */

    $(".open-close").on("click", function () {
        body.toggleClass("show-sidebar");
    });

    /* ===== Open-Close Right Sidebar ===== */

    $(".right-side-toggle").on("click", function () {
        $(".right-sidebar").slideDown(50).toggleClass("shw-rside");
        $(".fxhdr").on("click", function () {
            body.toggleClass("fix-header"); /* Fix Header JS */
        });
        $(".fxsdr").on("click", function () {
            body.toggleClass("fix-sidebar"); /* Fix Sidebar JS */
        });

        /* ===== Service Panel JS ===== */

        var fxhdr = $('.fxhdr');
        if (body.hasClass("fix-header")) {
            fxhdr.attr('checked', true);
        } else {
            fxhdr.attr('checked', false);
        }
    });

    /* ===========================================================
        Loads the correct sidebar on window load.
        collapses the sidebar on window resize.
        Sets the min-height of #page-wrapper to window size.
    =========================================================== */

    $(function () {
        var set = function () {
                var topOffset = 60,
                    width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width,
                    height = ((window.innerHeight > 0) ? window.innerHeight : this.screen.height) - 1;
                if (width < 768) {
                    $('div.navbar-collapse').addClass('collapse');
                    topOffset = 100; /* 2-row-menu */
                } else {
                    $('div.navbar-collapse').removeClass('collapse');
                }

                /* ===== This is for resizing window ===== */

                if (width < 1170) {
                    body.addClass('content-wrapper');
                    $('.sidebar-nav').addClass('slimscrollsidebar');
                } else {
                    body.removeClass('content-wrapper');
                    $('.sidebar-nav').removeClass('slimscrollsidebar');
                }

                if (width < 700) {
                    $('#side-menu').metisMenu();
                }

                height = height - topOffset;
                if (height < 1) {
                    height = 1;
                }
                if (height > topOffset) {
                    $("#page-wrapper").css("min-height", (height) + "px");
                }
            };

        $(window).ready(set);
        $(window).bind("resize", set);
    });

    /* ===== Collapsible Panels JS ===== */

    (function ($, window, document) {
        var panelSelector = '[data-perform="panel-collapse"]',
            panelRemover = '[data-perform="panel-dismiss"]';
        $(panelSelector).each(function () {
            var collapseOpts = {
                    toggle: false
                },
                parent = $(this).closest('.panel'),
                wrapper = parent.find('.panel-wrapper'),
                child = $(this).children('i');
            if (!wrapper.length) {
                wrapper = parent.children('.panel-heading').nextAll().wrapAll('<div/>').parent().addClass('panel-wrapper');
                collapseOpts = {};
            }
            wrapper.collapse(collapseOpts).on('hide.bs.collapse', function () {
                child.removeClass('ti-minus').addClass('ti-plus');
            }).on('show.bs.collapse', function () {
                child.removeClass('ti-plus').addClass('ti-minus');
            });
        });

        /* ===== Collapse Panels ===== */

        $(document).on('click', panelSelector, function (e) {
            e.preventDefault();
            var parent = $(this).closest('.panel'),
                wrapper = parent.find('.panel-wrapper');
            wrapper.collapse('toggle');
        });

        /* ===== Remove Panels ===== */

        $(document).on('click', panelRemover, function (e) {
            e.preventDefault();
            var removeParent = $(this).closest('.panel');

            function removeElement() {
                var col = removeParent.parent();
                removeParent.remove();
                col.filter(function () {
                    return ($(this).is('[class*="col-"]') && $(this).children('*').length === 0);
                }).remove();
            }
            removeElement();
        });
    }(jQuery, window, document));

    /* ===== Tooltip Initialization ===== */

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    /* ===== Popover Initialization ===== */

    $(function () {
        $('[data-toggle="popover"]').popover();
    });

    /* ===== Task Initialization ===== */

    $(".list-task li label").on("click", function () {
        $(this).toggleClass("task-done");
    });
    $(".settings_box a").on("click", function () {
        $("ul.theme_color").toggleClass("theme_block");
    });

    /* ===== Collepsible Toggle ===== */

    $(".collapseble").on("click", function () {
        $(".collapseblebox").fadeToggle(350);
    });

    /* ===== Resize all elements ===== */

    body.trigger("resize");

    /* ===== Visited ul li ===== */

    $('.visited li a').on("click", function (e) {
        $('.visited li').removeClass('active');
        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        e.preventDefault();
    });

    /* ===== Login and Recover Password ===== */

    $('#to-recover').on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    /* =================================================================
        Update 1.5
        this is for close icon when navigation open in mobile view
    ================================================================= */

    $(".navbar-toggle").on("click", function () {
        $(".navbar-toggle i").toggleClass("ti-menu").addClass("ti-close");
    });

    /* ===== Mega Menu ===== */

    $(".mega-nav > .nav-second-level").width($(window).width());

    $(window).on("resize", function () {
        $(".mega-nav > .nav-second-level").width($(window).width());
    });

    if ($('[data-toggle=confirmation]').length > 0) {
        confirmationPlugin();
    }

    clickableEvent();

    if ($('.chosen-select').length > 0) {
        $('.chosen-select').chosen({
            width: '100%',
            allow_single_deselect: true,
            search_contains: true
        });
    }

    if ($('.fly-add').length > 0) {
        $('.fly-add').flyadd();
    }

    flyAddLoadModalEvent();

    if ($('#add-delivery-address-button').length > 0) {
        $('#add-delivery-address-button').on('click', function() {
            var url = $(this).data('url');
            var count = $(this).data('count');

            $.ajax({
                url: url,
                data: {
                    rowNumber: count
                },
                success: function(response) {
                    console.log(response);

                    $('.add-delivery-address-tr').before(response);
                    $('#add-delivery-address-button').data('count', count + 1);

                    var $element = $('.delivery-address-row:last');

                    console.log($element);

                    addBinds($element);
                }
            });
        });
    }

    $(document).on('click', '.is-default', function () {
        $('.is-default').not(this).removeAttr('checked');
    })

    $(document).on('click', '.delete-delivery-address-button', function() {
        $(this).parents('tr').remove();
    })

    $('.delete-button').on('click', function() {
        if (confirm('Are you sure you want to remove this item?')) {
            var url = $(this).data('url');

            $.ajax({
                url: url,
                method: 'DELETE',
                data: {
                    _token: $('[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    location.href = response.redirectUrl;
                },
                error: function (response) {
                    location.href = response.responseJSON.redirectUrl;
                }
            });
        }
    });

    $('.cancel-button').on('click', function() {
        if (confirm('Are you sure you want to cancel this order?')) {
            var url = $(this).data('url');

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: $('[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    location.href = response.redirectUrl;
                }
            });
        }
    });

    if($('#search-input').length > 0) {
        $('#search-input').typeahead({
                hint: true,
                highlight: false,
                minLength: 3
            }, {
                source: function(query, syncResults, asyncResults) {
                    return $.ajax({
                        url: '/search',
                        data: {
                            search: query
                        },
                        method: 'get',
                        success: function(response) {
                            asyncResults(response.results);

                            return response.results;
                        }
                    });

                },
                name: 'searchResults',
                limit: 10,
                templates: {
                    suggestion: function(context) {
                        return '<div>' + context.display_string + '</div>';
                    }
                },
                display: function(obj) {
                    return obj.display_string;
                },
                hasSection: true
            }
        );

        $('#search-input').bind('typeahead:select', function(ev, suggestion) {
            location.href = '/' + suggestion.section_name + '/' + suggestion.id;
        });
    };

    if($('.product_id').length > 0) {
        $('.product_id').typeahead({
                hint: true,
                highlight: false,
                minLength: 3
            }, {
                source: function(query, syncResults, asyncResults) {
                    return $.ajax({
                        url: "/products/ajax/search",
                        data: {
                            search: query
                        },
                        method: 'get',
                        success: function(response) {
                            asyncResults(response.results);

                            return response.results;
                        }
                    });

                },
                name: 'searchResults',
                limit: 10,
                templates: {
                    suggestion: function(context) {
                        return '<div>' + context.name + '</div>';
                    }
                },
                display: function(obj) {
                    return obj.name;
                },
            }
        );
    }
});

function removeItem() {
    var url = $(this).data('remove');
    var target = $(this).data('target');

    $.ajax({
        url: url,
        data: {
            '_token': $('[name="_token"]').val()
        },
        method: 'DELETE',
        success: function (response) {
            if (response.redirectUrl !== undefined) {
                location.href = response.redirectUrl;
            } else if (response.view !== undefined && target) {
                $(target).html(response.view);

                confirmationPlugin();
            }
        }
    })
}

function addBinds($element)
{
    if (!$element) {
        $element = $(document.body);
    }

    if ($element.find('.btn-file').length > 0) {
        $element
            .on('change', '.btn-file :file', function ()
            {
                "use strict";
                var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
            });
        $element.find('.btn-file :file').on('fileselect', function (event, numFiles, label)
        {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
            if (input.length) {
                input.val(log);
            } else {
                if (log) {
                    alert(log);
                }
            }
        });
    }

    if ($element.find('.chosen-select').length > 0) {
        $element.find(".chosen-select").chosen({
            width: '100%',
            allow_single_deselect: true,
            search_contains: true
        });

        //$element.find('.modal-body').css('overflow', 'unset');
    }

    if ($element.find('[data-toggle=confirmation]').length > 0) {
        $element.find('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            singleton: true,
            onConfirm: removeItem,
            container: 'body'
        });
    }
}

function reloadPage(data, handler) {
    if (data.view_url !== undefined) {
        location.href = data.view_url;
    } else {
        location.reload();
    }
}

function clickableEvent() {
    $('.clickable td').each(function() {
        $(this).not('.manage').on('click', function() {
            location.href = $(this).parent().data('url');
        });
    });
}

function addNote(data, handler) {
    handler.html(data.view);
}

function showErrors(errors, formId) {
    $.each(errors, function (key, value) {
        if(key.indexOf('.') !== -1) {
            var temp = key.split('.');
            key = temp[0];
            for(var i = 1; i < temp.length; i++) {
                key += '[' + temp[i] + ']';
            }
        }

        var $element = $(formId).find('[name="' + key + '"]');
        var $parent = $element.closest('div');

        if ($parent.hasClass('input-group')) {
            $parent = $parent.parent();
        }

        $parent.addClass('has-error').append('<small class="help-block">' + value + '</small>');
    });

    $('#errors-alert').removeClass('hidden');

    $("html, body").animate({ scrollTop: 0 }, "slow");
}

function flyAddLoadModalEvent() {
    $('.fly-add').on('load.fa.modal', function (event, modal) {
        addBinds($(modal));
    });
}

function confirmationPlugin() {
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        singleton: true,
        onConfirm: removeItem,
        container: 'body'
    });
}