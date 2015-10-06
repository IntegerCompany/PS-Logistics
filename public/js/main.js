$(document).ready(function () {

    $(function () {
        $.ajaxSetup({
            type: "POST",
            url: window.location.origin + "/ajax"
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
                        return (el.val()) ? (JSON.parse(el.val())) : false;
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

        $('.image-editor').cropit({}).on('click', ".attach-cropit-photo", function () {
            var c = $(this);
            $('.cropit-image-input').click();
        });
        //$('.cropit-image-input').on('change', document, function(){
        //    $(this).val($('.image-editor').cropit('export'));
        //});
        $('.attach-button').on('click', function () {
            $(this).nextAll('input').first().click();
        });
        $('.remove-attach-button').on('click', function () {
            var c = $(this);
            c.nextAll('input[name]').val();
            c.prev().removeClass('btn-success');
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
                };
                reader.readAsDataURL(f[0]);
            }

        });

        $('.add_new_stuff').on('click', function () {

            var cropit = $('.cropit-image-input')[0].files[0];
            if (cropit) {
                $('.image-editor input[name]').val(JSON.stringify({
                    "base64": $('.image-editor').cropit('export'),
                    "name": cropit.name,
                    "type": cropit.type
                }));
            }
            var result = validate($('#addStuff .valid-form'));

            if (Object.keys(result).length > 4) {
                console.log(result);

                $.ajax({
                    data: {
                        'add-stuff': result
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });
            }
        });
        $('.setting').on('click',function(){
            $.ajax({
                data:{
                    'get_stuff_info': $(this).data('id')
                },
                async: false
            });
            $('#addStuff').modal('show');
        });
    });

});