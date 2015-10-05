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
                        reg = /(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[012])\/[0-9]{4}/;
                        text = "Incorrect date";
                        return testinput(reg, text, el);
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
                }
            }

            function add_alert(text, el) {
                el.after('<div class="error-message alert alert-danger fade in" style="top:' + top + 'px; display:none; width:' + width + 'px ">' + text + '</div>');
                el.next('.alert').slideDown('slow');
                setTimeout(function () {
                    el.next('.alert').slideUp('slow');
                }, 3000);
            }

            function testinput(reg, text, el) {
                var str = el.val();
                if (reg.test(str)) {
                    return str;
                } else {
                    if (!el.next('.alert').lenght) {
                        add_alert(text, el);
                    } else {
                        el.next('.alert').remove();
                        add_alert(text, el);
                    }
                    return false;
                }
            }

            el.find('[data-valid]').each(function () {
                var c = $(this),
                    val = check_data(c),
                    name = c.prop('name');
                if (val != false) {
                    resultObj[name] = val;
                }
            });
            return resultObj;


        }

        $('.image-editor').cropit({}).on('click', ".attach-cropit-photo", function () {
            var c = $(this);
            $('.cropit-image-input').click();
        });
        ;
        $('.attach-button').on('click', function () {
            $(this).nextAll('input').first().click();
        });
        $('.remove-attach-button').on('click', function () {
            var c = $(this);
            c.nextAll('input').files = undefined;
            c.prev().removeClass('btn-success');
        });
        $('.attach-input').on('change', ".attach-input", function () {
            var c = $(this);
            if (c[0].files) {
                c.prevAll('.attach-button').addClass('btn-success');
            }
            ;
        });
    });

});