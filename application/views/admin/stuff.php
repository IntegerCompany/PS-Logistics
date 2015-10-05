<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PS Logistics LLC</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/application.css">
    <link rel="stylesheet" href="/public/css/admin_theme.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/modal.css">
</head>
<body>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">Add new stuff</h3>
            </div>
            <div class="modal-body row body-modal valid-form">
                <h4 class="col-md-12 text-center">Personals data</h4>

                <div class="col-md-6">
                    <label for="first_name">First Name</label>
                    <input name="first_name" class="form-control" data-valid="text" placeholder="First Name" type="text"
                           required autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label from="last_name">Last Name</label>
                    <input name=last_name" class="form-control" data-valid="text" placeholder="Last Name"
                           type="text" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label from="dob">DOB</label>
                    <input name=dob" class="form-control" data-valid="text" placeholder="DOB" type="text" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label from="ssn">SSN#</label>
                    <input name=ssn" class="form-control" placeholder="SSN" data-valid="text"
                           type="text" autocomplete="off">
                </div>
                <h4 class="col-md-12 text-center">Contacts data</h4>

                <div class="col-md-6">
                    <label from="city">City</label>
                    <input name=city" class="form-control" placeholder="City"
                           type="text" autocomplete="off" data-valid="text">
                </div>
                <div class="col-md-6">
                    <label from="state">State</label>
                    <input name=state" class="form-control" placeholder="State"
                           type="text" autocomplete="off" data-valid="text">
                </div>
                <div class="col-md-6">
                    <label>Zip</label>
                    <input name="zip_code" type="text" class="form-control" placeholder="Zip code"
                           maxlength="5" data-valid="text">
                </div>
                <div class="col-md-6">
                    <label from="phone">Phone</label>
                    <input name="phone" class="form-control" placeholder="Phone"
                           type="text" autocomplete="off" data-valid="text">
                </div>
                <h4 class="col-md-12 text-center">Individuals data</h4>

                <div class="col-md-6">
                    <label>CDL#</label>
                    <input name="cdl" type="text" class="form-control" placeholder="CDL" data-valid="text">
                </div>
                <div class="col-md-6">
                    <label>Class</label>
                    <select class="form-control" name="class" placeholder="class" data-valid="text">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Endors</label>
                    <select class="form-control" name="endors" placeholder="endors" data-valid="text">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Date experation</label>
                    <input type="date" class="form-control" name="user-date" data-valid="date">
                </div>
                <div class="col-md-6">
                    <label>Emergency Contact</label>
                    <input name="emergency_contact" class="form-control "
                           placeholder="Emergency Contact" type="text" data-valid="text">
                </div>
                <div class="col-md-6">
                    <label>Emergency Contact phone</label>
                    <input name="user-emergency-phone" class="form-control" placeholder="phone"
                           maxlength="12" type="text" data-valid="phone">
                </div>
                <div class="col-md-6 attach-input">
                    <label>Medical card expiration</label>
                    <input type="date" name="medical_expiration" class="form-control pull-left">
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input" accept="image/*">
                </div>
                <div class="col-md-6 attach-input">
                    <label>MVR</label>
                    <input type="date" name="medical_expiration" class="form-control pull-left">
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input" accept="image/*">
                </div>

                <h4 class="col-md-12 text-center">Emigration Status</h4>

                <div class="col-md-6 checkbox-block">
                    <label>
                        <input type="checkbox"> A citizen of natural of the US
                    </label>
                </div>
                <div class="col-md-6 checkbox-block">
                    <label>
                        <input type="checkbox"> A citizen of natural of the US
                    </label>
                </div>
                <div class="col-md-6">
                    <label>Date of Hire</label>
                    <input type="date" class="form-control" name="user-date">
                </div>
                <div class="col-md-6">
                    <label>Date of Termination</label>
                    <input type="date" class="form-control" name="user-date">
                </div>
                <div class="col-md-6">
                    <label>Position</label>
                    <select class="form-control" name="endors" placeholder="position    ">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Position</label>
                    <select class="form-control" name="endors" placeholder="position    ">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
                <div class="col-md-6 attach-input">
                    <p class="form-control pull-left">Application</p>
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input" accept="image/*">
                </div>
                <div class="col-md-6 attach-input">
                    <p class="form-control pull-left">Lease agreement</p>
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input" accept="image/*">
                </div>
                <div class="col-md-12 text-center" >
                    <label >Add photo</label>

                    <div class="image-editor">

                        <input type="file" name="photo" class="cropit-image-input hidden">

                        <div class="cropit-image-preview center">
                            <button type="button" class="btn btn-default attach-cropit-photo pull-left">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </div>
                        <input type="range" class="cropit-image-zoom-input">
                    </div>
                </div>

                <div class="col-md-12 form-btns text-center">
                    <button type="submit" class="_btn add_new">Send It!</button>
                    <button data-dismiss="modal" aria-hidden="true" class="_btn delete">Discard</button>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="navigation">
    <img src="/public/img/logo.png" class="img-responsive nav_logo" alt="">
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
                trucks
            </a>
        </li>
        <li>
            <a href="/trailer">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                trailers
            </a>
        </li>
        <li>
            <a href="/broker">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                brokers
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
        <a href="javascript:;" class="logout col-md-6 col-xs-12">logout</a>
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
           
        </div>
    </div>
</div>


</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/jquery.cropit.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>


</html>
