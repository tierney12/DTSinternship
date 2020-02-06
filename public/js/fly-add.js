/**
 * Created by rostislav on 09.08.16.
 */

(function ($) {
    "use strict";

    var defaultOptions = {
        destination: '',
        dataForm: 'form',
        submitHandler: 'input[type=submit]',
        uploadFile: null,
        onLoad: function () {
        }
    };

    var flyAdd = function (element, options) {
        this.$element = $(element);
        this.$modal = $('\
            <div class="modal fade fly-add-modal" role="dialog" aria-hidden="true">\
                <div class="modal-dialog">\
                    <div class="modal-content">\
                        <div class="alert alert-danger alert-dismissable modal-errors-alert hidden">\
                            <p>Please fix the errors below.</p>\
                        </div>\
                        <div class="modal-body"></div>\
                    </div>\
                </div>\
            </div>');

        this.$onProcess;
        this.$parent_modal;
        this.build(options);
    };

    flyAdd.prototype = {
        constructor: flyAdd,

        build: function (options) {
            var self = this;

            self.$options = $.extend({}, defaultOptions, options, self.$element.data());

            self.$parent_modal = self.$element.closest('div.modal');
            var e = $.Event('init.fa.modal');

            self.$element.trigger(e, self.$modal);

            self.$element.on('click', $.proxy(function (event) {
                event.preventDefault();

                if (self.$element.data('source') && self.$element.data('source') !== self.$options.source) {
                    self.$options.source = self.$element.data('source');
                } else if (!self.$element.data('source')) {
                    self.$options.source = '';
                    return;
                }

                if (self.$parent_modal.length > 0) {
                    self.$parent_modal.modal('hide');
                }

                self.load();
            }));

            self.$modal.on('shown.bs.modal', function (e) {
                self.$onProcess = true;
                if (self.$parent_modal.length > 0) {
                    $(document.body).addClass('modal-open');
                }

                var e = $.Event('show.fa.modal');
                self.$element.trigger(e, self.$modal);
            });

            self.$modal.on('hidden.bs.modal', function () {
                if (self.$parent_modal.length > 0) {
                    self.$parent_modal.modal('show');
                }
                self.$onProcess = false;

                self.$modal.find('div.has-error').removeClass('has-error');
                self.$modal.find('small.help-block').remove();
                self.$modal.find('.modal-errors-alert').addClass('hidden');

                var e = $.Event('hide.fa.modal');
                self.$element.trigger(e, self.$modal);
            });

            self.$modal.on('click', self.$options.submitHandler, $.proxy(function (event) {
                if (event) event.preventDefault();
                event = $.Event('handler.fa.click');
                self.$element.trigger(event, [this, self.$modal, self]);

                if (self.$onProcess) {
                    self.save(this);
                }
            }));

        },
        load: function () {
            var self = this;

            if (self.$options.modalName !== undefined) {
                self.$modal.addClass(self.$options.modalName);
            }

            if (self.$options.source) {
                self.$modal
                    .find('.modal-body')
                    .load(self.$options.source, $.proxy(function (responseText, textStatus, jqXHR) {
                        if (jqXHR.status === 403) {
                            var response = JSON.parse(jqXHR.responseText);

                            if(response.redirectUrl !== undefined) {
                                location.href = response.redirectUrl;
                            }
                        } else {
                            this.$element.trigger('load.fa.modal', this.$modal);
                            this.$options.onLoad(this.$modal);
                            this.$modal.find("input[data-role=fly-add], button[data-role=fly-add], a[data-role=fly-add]").flyadd();

                            if (self.$options.destination == '' && self.$options.dataForm == 'form') {
                                self.$options.destination = self.$modal.find('form').attr('action');
                                self.$options.method = self.$modal.find('form').attr('method');
                            }
                        }
                    }, self));
                self.$modal.modal('show')
            }
        },
        save: function (handler) {
            var self = this;

            var $dataForm = self.$modal.find(self.$options.dataForm);
            var $url = self.$options.destination;
            var $method = self.$options.method;

            var $data = $dataForm.serialize();
            if (self.$options.uploadFile === null) {
                var $processData = true,
                    $data = $dataForm.serialize();
            } else {
                var $processData = false,
                    $data = new FormData();
                $.each($dataForm.serializeArray(), function (i, field) {
                    $data.append(field.name, field.value);
                });
                $.each($dataForm.find(self.$options.uploadFile), function (i, field) {
                    if ($(field).prop('files')[0]) {
                        $data.append(field.name, $(field).prop('files')[0]);
                    }
                });
            }

            self.$modal.find('div.has-error').removeClass('has-error');
            self.$modal.find('small.help-block').remove();
            self.$modal.find('.modal-errors-alert').addClass('hidden');

            if ($url) {
                $.ajax({
                    url: $url,
                    method: $method,
                    data: $data,
                    dataType: 'json',
                    processData: $processData,
                    contentType: $processData ? 'application/x-www-form-urlencoded; charset=UTF-8' : false,
                    success: function (data) {
                        self.$element.trigger('success.fa.submit', [data, self.$modal, self.$options]);
                        if (self.$options.onSuccess && self.$options.target != '') {
                            var handler = $(document.body).find(self.$options.target);
                            eval(self.$options.onSuccess + '(data, handler)');
                        }
                        self.$element.trigger('after.fa.submit', [handler, self.$modal]);
                        self.$modal.modal('hide');
                    },
                    error: function (data, textStatus, errorThrown) {
                        if (data.status !== 422) {
                            var response = data.responseJSON;

                            if(response.redirectUrl !== undefined) {
                                location.href = response.redirectUrl;
                            }
                        } else {
                            self.$element.trigger('error.fa.submit', [data, self.$modal, self.$options]);
                            var errors = data.responseJSON;
                            $.each(errors, function (key, value) {
                                if(key.indexOf('.') !== -1) {
                                    var temp = key.split('.');
                                    key = temp[0];
                                    for(var i = 1; i < temp.length; i++) {
                                        key += '[' + temp[i] + ']';
                                    }
                                }

                                var $element = self.$modal.find('[name="' + key + '"]');

                                if ($element.length === 0) {
                                    $element = self.$modal.find('[name="' + key + '[]"]');
                                }

                                $element.closest('div:not(.input-group)').addClass('has-error').append('<small class="help-block">' + value + '</small>');
                            });

                            $('.modal-errors-alert').removeClass('hidden');
                            self.$element.trigger('after.fa.submit', [handler, self.$modal]);
                        }
                    }
                });
            }


        }
    };

    /**
     * Register JQuery plugin
     */
    $.fn.flyadd = function (option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('flyadd')
            var options = $.extend({}, defaultOptions, $this.data(), option);
            if (!data) {
                $this.data('flyadd', (data = new flyAdd(this, options)))
            }
        })
    };

    $.fn.flyadd.Constructor = flyAdd;

    /**
     * Initialize flyadd behaviour on inputs button which have
     * data-role=fly-add
     */
    $(function () {
        $("input[data-role=fly-add], button[data-role=fly-add], a[data-role=fly-add]").flyadd();
    });

})(window.jQuery);