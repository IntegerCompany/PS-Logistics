$(document).ready(function () {

    $(function () {
        $.ajaxSetup({
            type: "POST",
            url: window.location.origin + "/ajax"
        });
        var datepicker = $('.datepicker'),
            year = $('.datepicker-year');
        if(datepicker.length){
        datepicker.datepicker({format: 'mm/dd/yyyy'}).on('changeDate', function(){
                $(this).datepicker('hide');
            });
        }
        if(year.length){
            year.datepicker( {
                format: " yyyy", // Notice the Extra space at the beginning
                viewMode: "years",
                minViewMode: "years"
            }).on('changeDate', function(){
                $(this).datepicker('hide');
            });
        }
        function load_animate() {
            if (!$('.div-loading').length) {
                $("body").append("<div class='div-loading'></div>");
                var height = $(document).height();
                $('.div-loading').css('height', height + "px");
            } else {
                $('.div-loading').remove();
            }
        }

        function IsJsonString(str) {
            try {
                JSON.parse(str);
            } catch (e) {
                return false;
            }
            return true;
        }


        $('form').submit(function () {
            return false;
        });
        $('#loginin').on('click', function () {
            /*
             -- must be validation!!!! --
             */
            var arr = {};
            $('.auth-value input[id]').each(function () {
                var c = $(this),
                    n = c.prop('id'),
                    v = c.val();
                arr[n] = v;
            });
            if (Object.keys(arr).length == 2) {
                $.ajax({
                    data: {
                        'login-request': arr
                    },
                    success: function (data) {
                        if (data) {
                            location.replace('/shipping');
                        }
                    }
                });
            }
        });
        function validate(form) {
            var resultObj = {};

            function check_data(el) {
                switch (el.data('valid')) {
                    case 'required-text':
                        reg = /^[a-zA-Z][a-zA-Z0-9-_\.\s]{1,10}$/;
                        text = "Input include min 2 symbol, first symbol is latin letter. Input text can include latin letter and number";
                        return testinput(reg, text, el);
                    case 'email':
                        reg = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
                        text = "Incorrect email";
                        return testinput(reg, text, el);
                    case 'date':
                        if (el.val != '') {
                            return new Date(el.val()).getTime() / 1000
                        } else {
                            return false
                        }
                    case 'number':
                        reg = /^[\-0-9]{1,10}$/;
                        text = "Incorrect number";
                        return testinput(reg, text, el);
                    case 'phone':
                        reg = /^[0-9]{11,11}$/;
                        text = "Phone must include 11 number";
                        return testinput(reg, text, el);
                    case 'text':
                        reg = /^\S$/;
                        text = "No space";
                        return testinput(reg, text, el);
                    case 'attach-file':
                        return (IsJsonString(el.val())) ? (JSON.parse(el.val())) : false;
                    default:
                        return el.val();
                }
            }

            function add_alert(text, el) {
                var elem = el.parents('div').first(),
                    width = elem.width();

                if (el.next('.error-message').length < 1) {
                    el.after('<span class="error-span">' + text + '</span>');
                    el.next('.error-span').css({'position': "absolute", "width": width + "px"});
                }
            }

            function testinput(reg, text, el) {
                var str = el.val();
                if (reg.test(str)) {
                    return str;
                } else {
                    add_alert(text, el);
                    return false;
                }
            }

            form.find('[data-valid]').each(function () {
                var c = $(this),
                    val = check_data(c),
                    name = c.prop('name');
                if (val != false) {
                    resultObj[name] = val;
                    c.next('span').remove();
                }
                c.parents('div').css('margin-bottom', '25px');
            });
            return resultObj;


        }
        var imageEditor = $('.image-editor');
        if(imageEditor.length) {
            imageEditor.cropit({}).on('click', ".attach-cropit-photo", function () {
                var c = $(this);
                $('.cropit-image-input').click();
            });
        }
        $('.attach-button').on('click', function () {
            $(this).nextAll('input').first().click();
        });
        $('.remove-attach-button').on('click', function () {
            var c = $(this),
                input = c.nextAll('input[name]'),
                val = input.val();

            if (c.parents('.modal').hasClass('mode-edit')) {
                if (val) {
                    downloadFile(val);
                }
            } else {
                input.val('');
                c.prev().removeClass('btn-success');
            }
        });
        $('.attach-input-inner').on('change', document, function () {
            var c = $(this),
                f = c[0].files;
            if (f) {
                c.prevAll('.attach-button').addClass('btn-success');
                var reader = new FileReader();
                reader.onload = function () {
                    var strObj = JSON.stringify({
                        "base64": reader.result,
                        "type": f[0].type,
                        "name": f[0].name
                    });
                    c.next('input[type=hidden]').val(strObj);
                    c.prev('.remove-attach-button').addClass('btn-warning');
                };
                reader.readAsDataURL(f[0]);
            }

        });

        $('.add_stuff').on('click', function () {
            var el = $('#addStuff');
            el.removeClass('mode-edit');
            triger_modal(el);
            el.modal('show');
        });
        $('.add_truck').on('click', function () {
            var el = $('#addTruck');
            el.removeClass('mode-edit');
            triger_modal(el);
            el.modal('show');
        });
        $('.add_trailer').on('click', function () {
            var el = $('#addTrailer');
            el.removeClass('mode-edit');
            triger_modal(el);
            el.modal('show');
        });
        $('.add_maintenance').on('click',function(){
            var el = $('#addMaintenance');
            el.removeClass('mode-edit');
            triger_modal(el);
            el.modal('show');
        });

        $('.add_new_stuff').on('click', function () {

            var cropit = $('.cropit-image-input')[0].files[0],
                c = $(this);
            if (cropit) {
                $('.image-editor input[name]').val(JSON.stringify({
                    "base64": $('.image-editor').cropit('export'),
                    "name": cropit.name,
                    "type": "image/png"
                }));
            }
            var result = validate($('#addStuff .valid-form'));
            if (Object.keys(result).length > 4) {
                console.log(result);
                var id = undefined;
                if (c.parents('.modal').hasClass('mode-edit')) {
                    console.log(c.data());
                    id = c.data('id');
                }

                $.ajax({
                    beforeSend: load_animate(),
                    data: {
                        'add-edit-stuff': {
                            "data": result,
                            "id": id
                        }
                    },
                    success: function (data) {
                        console.log(data);
                        location.reload();
                    }
                });

            }
        });
        $('.add_new_truck').on('click', function () {

            var c = $(this);
            var result = validate($('#addTruck .valid-form'));
            if (Object.keys(result).length > 4) {
                console.log(result);
                var id = undefined;
                if (c.parents('.modal').hasClass('mode-edit')) {
                    id = c.data('id');
                }
                $.ajax({
                    beforeSend: load_animate(),
                    data: {
                        'add-edit-truck': {
                            "data": result,
                            "id": id
                        }
                    },
                    success: function (data) {
                        console.log(data);
                        location.reload();
                    }
                });

            }
        });
        $('.add_new_maintenance').on('click', function () {

            var c = $(this);
            var result = validate($('#addMaintenance .valid-form'));
            if (Object.keys(result).length == 2) {
                console.log(result);

                var id = undefined;
                if (c.parents('.modal').hasClass('mode-edit')) {
                    id = c.data('id');
                }
                $.ajax({
                    beforeSend: load_animate(),
                    data: {
                        'add-edit-maintenance': {
                            "data": result,
                            "id": id
                        }
                    },
                    success: function (data) {
                        console.log(data);
                        location.reload();
                    }
                });

            }
        });
        $('.add_new_trailer').on('click', function () {

            var c = $(this);
            var result = validate($('#addTrailer .valid-form'));
            if (Object.keys(result).length > 4) {
                console.log(result);
                var id = undefined;
                if (c.parents('.modal').hasClass('mode-edit')) {
                    id = c.data('id');
                }
                $.ajax({
                    beforeSend: load_animate(),
                    data: {
                        'add-edit-trailer': {
                            "data": result,
                            "id": id
                        }
                    },
                    success: function (data) {
                        console.log(data);
                        location.reload();
                    }
                });

            }
        });

        function triger_modal(el, data) {
            el.find('form')[0].reset();

            if (el.hasClass('mode-edit')) {
                el.find('input[name]').add('select[name]').each(function () {
                    var c = $(this);
                    var name = c.prop('name');
                    c.val(data[0][name]);
                    console.log(name);
                    if(name.indexOf('_file') + 1 && c.val()) {
                       c.prevAll('.remove-attach-button').addClass('btn-success');
                    }

                });
                el.find('.modal-header-text').text('Edit');
                el.find('.remove-attach-button').children('span').prop('class', 'glyphicon glyphicon-download-alt');
                el.find('.add_new').data('id', data[0].id);
                if (data[0].avatar_file) {
                    el.find('.cropit-image-preview').css('background-image', 'url(' + data[0].avatar_file + ')');
                }
            } else {
                $('.modal-header-text').text('Add new');
                el.find('.remove-attach-button').children('span').prop('class', 'glyphicon glyphicon-remove');
                el.find('.cropit-image-preview').css('background-image', '');
                el.find('.btn-success').removeClass('btn-success');

            }

        }
        $('.setting-stuff').on('click', function () {
            $.ajax({
                data: {
                    'get_stuff_info': $(this).data('id')
                },
                async: false,
                success: function (data) {
                    var el = $('#addStuff');
                    el.addClass('mode-edit');
                    triger_modal(el, JSON.parse(data));
                    el.modal('show');

                }
            });
        });
        $('.setting-truck').on('click', function () {
            $.ajax({
                data: {
                    'get_truck_info': $(this).data('id')
                },
                async: false,
                success: function (data) {
                    var el = $('#addTruck');
                    el.addClass('mode-edit');
                    triger_modal(el, JSON.parse(data));
                    el.modal('show');

                }
            });
        });
        $('.setting-trailer').on('click', function () {
            $.ajax({
                data: {
                    'get_trailer_info': $(this).data('id')
                },
                async: false,
                success: function (data) {
                    var el = $('#addTrailer');
                    el.addClass('mode-edit');
                    triger_modal(el, JSON.parse(data));
                    el.modal('show');

                }
            });
        });


        $('input[name=radio-object]').on('change',function(){
            var list = $('.object-list'),
                c = $(this),
                v = c.val();
            list.children().hide();
            list.children('[data-option='+v+']').show();



        });
    });

});