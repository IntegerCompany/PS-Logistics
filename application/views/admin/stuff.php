<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PS Logistics LLC</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/application.css">
    <link rel="stylesheet" href="/public/css/admin_theme.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">Add new stuff</h3>
            </div>
            <div class="modal-body">
                <form id="add-form" class="form-horizontal col-sm-12">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input name="user-name" class="form-control required" placeholder="First Name" type="text"
                                   required autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input name="user-last-name" class="form-control required" placeholder="Last Name"
                                   type="text" required autocomplete="off">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Position</label>
                            <select class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Address</label>
                            <textarea class="form-control" placeholder="Your address" rows="1"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Zip code</label>
                            <input name="user-zip-code" type="text" class="form-control" placeholder="Zip code"
                                   maxlength="5">
                        </div>
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input name="user-phone" class="form-control phone" placeholder="999-999-9999" type="text"
                                   maxlength="12">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>SSN</label>
                            <input name="user-ssn" class="form-control " type="text" placeholder="999-99-9999"
                                   maxlength="11" type="text"/>
                        </div>
                        <div class="col-md-6">
                            <label>E-Mail</label>
                            <input name="user-email" class="form-control email" placeholder="email@you.com" type="text"
                                   required autocomplete="off">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Driver Licence</label>
                            <input class="form-control required" placeholder="Your Driver Licence " type="text"
                                   maxlength="8">
                        </div>
                        <div class="col-md-6">
                            <label>Class</label>
                            <select class="form-control">
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                                <option value="">D</option>
                            </select>
                            <!-- <input type="checkbox" name="ccard"> A
                            <input type="checkbox" name="ccard"> B
                            <input type="checkbox" name="ccard"> C
                            <input type="checkbox" name="ccard"> D	 -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Enrolment</label>
                            <select class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Exparation Date</label>
                            <input type="date" class="form-control required">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Medicine insurance number</label>
                            <input type="text" class="form-control required" placeholder="Medicine insurance number">
                        </div>
                        <div class="col-md-6">
                            <label>Emergency Contact</label>
                            <input name="user-emergency-name" class="form-control required"
                                   placeholder="Emergency Contact name" data-placement="top" data-trigger="manual"
                                   data-content="Must be at least 3 characters long, and must only contain letters."
                                   type="text">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label>Emergency Contact phone</label>
                            <input name="user-emergency-phone" class="form-control phone" placeholder="999-999-9999"
                                   maxlength="12" type="text">
                        </div>
                        <div class="col-md-6">
                            <label>Add photo</label>

                            <div class="image-editor">
                                <input type="file" class="cropit-image-input">

                                <div class="cropit-image-preview"></div>
                                <div class="image-size-label">
                                    resize
                                </div>
                                <input type="range" class="cropit-image-zoom-input">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 form-btns">
                            <button type="submit" class="_btn add_new">Send It!</button>
                            <button data-dismiss="modal" aria-hidden="true" class="_btn delete">Discard</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<div id="navigation">
    <a href="/"><img src="/public/img/logo.png" class="img-responsive nav_logo" alt=""></a>
    <ul>
        <!-- add class .active to LI when this page active -->
        <li>
            <a href="javascript:;">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                map
            </a>
        </li>
        <li>
            <a href="/shipping">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                shipping
            </a>
        </li>
        <li class="active">
            <a href="/stuff">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                stuff
            </a>
        </li>
        <li>
            <a href="/truck">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                truck
            </a>
        </li>
        <li>
            <a href="/trailer">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                trailer
            </a>
        </li>
        <li>
            <a href="/broker">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                broker
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                phone search
            </a>
        </li>
    </ul>
    <div class="controls">
        <a href="/logout" class="logout col-md-6 col-xs-12">logout</a>
        <a href="javascript:;" class="change_pass col-md-6 col-xs-12">change pass</a>
    </div>
</div>

<div id="content">
    <div class="row">
        <div class="container-fluid">
            <div class="admin_top">
                <a class="visible-xs visible-sm toggle_menu" href="javascript:;">
                    toggle
                </a>

                <h2 class="admin_title">Stuff</h2>
                <a href="#myModal" class="_btn add_new" role="button" data-toggle="modal">add new</a>

            </div>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>

            <table id="add-customer" class="global_table table ">
                <tr>
                    <td rowspan="3" class="avatar-section border">
                        <img src="/public/img/example.jpg" class="img-circle avatar-img " alt="Cinque Terre">
                        <hgroup>
                            <h4>Helena Tankish</h4>
                            <h5>Driver</h5>
                        </hgroup>
                    </td>
                    <th colspan="5" class="table-header">2435-5324-42</th>
                </tr>
                <tr>
                    <td class="title">Driver License#</td>
                    <td class="title">Enrolment</td>
                    <td class="border"></td>
                    <td class="title">Medicine insurance #</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="svg-icon-doc">4FL4DFG567</td>
                    <td class="svg-icon-emr">Fuel</td>
                    <td class="border">12/12/1212</td>
                    <td class="svg-icon-med">4FL4DFG567</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="border">Address: Lviv, Doroshenka St. 12</td>
                    <td class="title">Class</td>
                    <td class="svg-icon-emr">Toxic</td>
                    <td class="border">12/12/1212</td>
                    <td class="title">Emergency contact</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="border">SSN: 12345</td>
                    <td class="svg-icon-doc">A / B / C / D</td>
                    <td class="svg-icon-emr">Long trail</td>
                    <td class="border">12/12/1212</td>
                    <td class="svg-icon-call">3242-3232-2332</td>
                    <td>Joe Longcaster</td>
                </tr>
            </table>
        </div>
    </div>
</div>


</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/jquery.cropit.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>
<script>
    $(document).on('ready', function () {
        $('.image-editor').cropit({});});
        var addStuff = document.querySelector('form#add-form'),
            submitBtn = addStuff.querySelector('.submit-btn'),

            userNameInput = '[name="user-name"]',
            userLastNameInput = '[name="user-last-name"]',
            userZipCodeInput = '[name="user-zip-code"]',
            userPhoneInput = '[name="user-phone"]',
            userSSNInput = '[name = "user-ssn"]',
            userEmailInput = '[name="user-email"]',
            userEmergencyNameInput = '[name="user-emergency-name"]',
            userEmergencyPhoneInput = '[name="user-emergency-phone"]',


            userName = addStuff.querySelector(userNameInput),
            userLastName = addStuff.querySelector(userLastNameInput),
            userEmail = addStuff.querySelector(userEmailInput),
            userZipCode = addStuff.querySelector(userZipCodeInput);
        userPhone = addStuff.querySelector(userPhoneInput);
        userSSN = addStuff.querySelector(userSSNInput);
        userEmergencyName = addStuff.querySelector(userEmergencyNameInput),
            userEmergencyPhone = addStuff.querySelector(userEmergencyPhoneInput),

            labels = addStuff.querySelectorAll('label'),

            gueryMessBoxId = 'guery-message-box',

            loadClass = 'load',
            inputIncorClass = 'input-incorrect',


            ajaxFile = "action.php";


        function addClass(el, cl) {
            el.classList.add(cl);
        }

        function removeClass(el, cl) {
            el.classList.remove(cl);
        }

        function insertAfter(referenceNode, newNode) {
            referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
        }

        function isNoValidEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return !re.test(email);
        }

        function isNoValidZipCode(zipCode) {
            var reg = /^\d{5}$/;
            return !reg.test(zipCode);
        }

        function isNoValidPhone(phone) {
            var reg = /^\d{4}-\d{3}-\d{4}$/;
            return !reg.test(phone);
        }

        function isNoValidEmergencyPhone(emergPhone) {
            var reg = /^\d{4}-\d{3}-\d{4}$/;
            return !reg.test(emergPhone);
        }

        function isNoValidSSN(ssn) {
            var reg = /^\d{3}-\d{2}-\d{4}$/;
            return !reg.test(ssn);
        }


        function isNotValidForm() {

            var trouble = 0;

            if (userName.value.length < 3) {
                addClass(userName, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be at least 3 characters long, and must only contain letters.";
                insertAfter(userName, span);
                trouble++;
            }

            if (userLastName.value.length < 3) {
                addClass(userLastName, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be at least 3 characters long, and must only contain letters.";
                insertAfter(userLastName, span);
                trouble++;
            }
            if (isNoValidZipCode(userZipCode.value)) {
                addClass(userZipCode, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be 5 characters long, and must only contain numbers.";
                insertAfter(userZipCode, span);
                trouble++;
            }
            if (isNoValidSSN(userSSN.value)) {
                addClass(userSSN, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be 9 characters long, and must only contain numbers.";
                insertAfter(userSSN, span);
                trouble++;
            }

            if (isNoValidEmail(userEmail.value)) {
                addClass(userEmail, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be a valid e-mail address (user@gmail.com)";
                insertAfter(userEmail, span);
                trouble++;
            }
            if (isNoValidPhone(userPhone.value)) {
                addClass(userPhone, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be a valid phone number (999-999-9999)";
                insertAfter(userPhone, span);
                trouble++;
            }
            if (userEmergencyName.value.length < 3) {
                addClass(userEmergencyName, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be at least 3 characters long, and must only contain letters.";
                insertAfter(userEmergencyName, span);
                trouble++;
            }
            if (isNoValidEmergencyPhone(userEmergencyPhone.value)) {
                addClass(userEmergencyPhone, inputIncorClass);
                var span = document.createElement('span');
                span.className = "error-span";
                span.innerHTML = "Must be a valid phone number (999-999-9999)";
                insertAfter(userEmergencyPhone, span);
                trouble++;
            }

            return trouble === 0 ? false : true;
        }

        function createDataObject() {
            return {
                "user-name": userName.value,
                "user-last-name": userLastNameInput.value,

                "user-zip-code": userZipCode.value,
                "user-emergency-name": userEmergencyName.value,
                "user-emergency-phone": userEmergencyPhone.value,
                "user-email": userEmail.value,
            };
        }

        function showAjaxMess(data) {

            var responseData = JSON.parse(data);

            $('body').append("<div id='" + gueryMessBoxId + "' class='" + responseData['responseClass'] +
                "'><p>" + responseData['responseText'] + "</p></div>");

            removeClass(submitBtn, loadClass);
            $('#' + gueryMessBoxId).slideDown();
        }

        $(document).on('click', labels, function () {
            if (this.querySelector('.' + inputIncorClass)) {
                this.querySelector('.' + inputIncorClass).classList.remove(inputIncorClass);
            }
        });


//only symbols
        $(document).on("change keyup input click", userNameInput + ', ' + userLastNameInput + ', ' + userEmergencyNameInput, function () {
            if (this.value.match(/[^A-z ]/g)) {
                this.value = this.value.replace(/[^A-z ]/g, '');
            }
        });

        $(document).on("change keyup input click", userPhoneInput + ', ' + userZipCodeInput + ', ' + userEmergencyPhoneInput + ',' + userSSNInput, function () {
            if (this.value.match(/[^0-9\- ]/g)) {
                this.value = this.value.replace(/[^0-9\- ]/g, '');
            }
        });

        $(document).on('click', '#' + gueryMessBoxId, function () {
            $(this).slideUp(400, function () {
                this.classList.contains('success') ? window.location = window.location.href : this.remove();
            });
        });


        $(addStuff).submit(function () {

            if (isNotValidForm()) return false;

            submitBtn.classList.add(loadClass);
            return false;

            $.ajax({
                url: ajaxFile,
                type: "POST",
                data: {
                    "formOperation": createDataObject()
                },
                success: function (data, html) {
                    showAjaxMess(data);
                }
            });

            return false;
        });

        // 	});
        // })(window.jQuery)

</script>

</html>
