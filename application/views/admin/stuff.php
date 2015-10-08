<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PS Logistics LLC</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/application.css">
    <link rel="stylesheet" href="/public/css/admin_theme.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/datepicker.css">
    <link rel="stylesheet" href="/public/css/modal.css">
</head>
<body>
<div id="addStuff" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addStuffLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="addStuffLabel" class="text-center">Add new stuff</h3>
            </div>
            <div class="modal-body row body-modal valid-form">
                <form>
                <h4 class="col-md-12 text-center">Personals data</h4>

                <div class="col-md-6">
                    <label for="first_name">First Name</label>
                    <input name="first_name" class="form-control" data-valid="required-text" placeholder="First Name" type="text"
                           required autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label from="last_name">Last Name</label>
                    <input name="last_name" class="form-control" data-valid placeholder="Last Name" type="text" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label from="dob">DOB</label>
                    <input name="dob" class="form-control datepicker" data-valid placeholder="DOB" type="text" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label from="ssn">SSN#</label>
                    <input name="ssn" class="form-control" placeholder="SSN" data-valid
                           type="text" autocomplete="off">
                </div>
                <h4 class="col-md-12 text-center">Contacts data</h4>

                <div class="col-md-6">
                    <label from="city">City</label>
                    <input name="city" class="form-control" placeholder="City"
                           type="text" autocomplete="off" data-valid>
                </div>
                <div class="col-md-6">
                    <label from="state">State</label>
                    <input name="state" class="form-control" placeholder="State"
                           type="text" autocomplete="off" data-valid>
                </div>
                <div class="col-md-6">
                    <label>Zip</label>
                    <input name="zip_code" type="text" class="form-control" placeholder="Zip code"
                           maxlength="5" data-valid>
                </div>
                <div class="col-md-6">
                    <label from="phone">Phone</label>
                    <input name="phone" class="form-control" placeholder="Phone"
                           type="text" autocomplete="off" data-valid>
                </div>
                <h4 class="col-md-12 text-center">Individuals data</h4>
                <div class="col-md-6">
                    <label>CDL#</label>
                    <input name="cdl" type="text" class="form-control" placeholder="CDL" data-valid>
                </div>
                <div class="col-md-6">
                    <label>Class</label>
                    <select class="form-control" name="class" placeholder="class" data-valid>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Endors</label>
                    <select class="form-control" name="endors" placeholder="endors" data-valid>
                        <option value="T">T</option>
                        <option value="A">A</option>
                        <option value="P">P</option>
                        <option value="S">S</option>
                        <option value="N">N</option>
                        <option value="H">H</option>
                        <option value="X">X</option>
                        <option value="W">W</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Date experation</label>
                    <input type="text"  class="form-control datepicker" name="date_experation" data-valid>
                </div>
                <div class="col-md-6">
                    <label>Emergency Contact</label>
                    <input name="emergency_contact" class="form-control "
                           placeholder="Emergency Contact" type="text" data-valid>
                </div>
                <div class="col-md-6">
                    <label>Emergency Contact phone</label>
                    <input name="emergency_phone" class="form-control" placeholder="phone"
                           maxlength="12" type="text" data-valid>
                </div>
                <div class="col-md-6 attach-input">
                    <label>Medical card expiration</label>
                    <input type="text" name="medical_expiration" class="form-control pull-left datepicker" data-valid>
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input-inner"  >
                    <input type="hidden" name="medical_file" data-valid="attach-file">
                </div>
                <div class="col-md-6 attach-input">
                    <label>MVR</label>
                    <input type="text" name="mvr" class="form-control pull-left datepicker" data-valid>
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input-inner"  >
                    <input type="hidden" name="mvr_file" data-valid="attach-file">
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
                    <input type="text" class="form-control datepicker" name="date_hire" data-valid>
                </div>
                <div class="col-md-6">
                    <label>Date of Termination</label>
                    <input type="text" class="form-control datepicker" name="date_termination" data-valid>
                </div>
                <div class="col-md-6">
                    <label>Position</label>
                    <select class="form-control" name="position" placeholder="position" data-valid>
                        <?php foreach($position as $val){
                           echo "<option value=".$val['id'].">".$val['name']."</option>";
                         }?>
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
                    <input type="file" class="hidden attach-input-inner">
                    <input type="hidden" name="application_file" data-valid="attach-file">
                </div>
                <div class="col-md-6 attach-input">
                    <p class="form-control pull-left">Lease agreement</p>
                    <button type="button" class="btn btn-default attach-button pull-left">
                        <span class="glyphicon glyphicon-paperclip"></span>
                    </button>
                    <button type="button" class="btn btn-default remove-attach-button pull-left">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <input type="file" class="hidden attach-input-inner" >
                    <input type="hidden" name="agreement_file" data-valid="attach-file">
                </div>
                <div class="col-md-12 text-center" >
                    <label >Add photo</label>

                    <div class="image-editor">

                        <input type="file" class="cropit-image-input hidden">

                        <div class="cropit-image-preview center">
                            <button type="button" class="btn btn-default attach-cropit-photo pull-left">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </div>
                        <input type="range" class="cropit-image-zoom-input">
                        <input type="hidden" name="avatar_file" data-valid="attach-file">
                    </div>
                </div>

                <div class="col-md-12 form-btns text-center">
                    <button  class="_btn add_new add_new_stuff">Send It!</button>
                    <button data-dismiss="modal" aria-hidden="true" class="_btn delete">Discard</button>
                </div>
                </form>

            </div>
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
                phone
            </a>
        </li>
        <li>
            <a href="/maintenance">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                maintenance
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
                <a href="javascript:;" class="_btn add_new" role="button">add new</a>

            </div>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>
            
            <!--  -->
            <?php foreach($info as $val){?>
            <table class="global_table table table-bordered">
              <tr>
                <th rowspan="4" class="col-md-3">
                <div>
                    <img src="<?=$val['avatar_file'];?>" class="img-circle avatar-img " alt="Cinque Terre">
                    <hgroup style="display: inline-block;">
                        <h4>
                            <b><?=$val['first_name'].' '.$val['last_name'];?></b>
                        </h4>
                        <h5><?=$val['name_position'];?></h5>
                    </hgroup>
                </div>
                <span>Address: <span><?=$val['state'].','.$val['city'].','.$val['zip_code'];?></span></span>
                </th>
                <th colspan="5">
                        <a href="javascript:;" class="pull-right setting" data-id="<?=$val['id'];?>">
                            <i class="icon-settings"></i>
                        </a>
                    <div class="pull-right" style="margin-right: 10px;">
                        <i class="icon-phone54"></i>
                        <?=$val['phone'];?>
                    </div>
                </th>
              </tr>
              <tr>
                <td colspan="3" rowspan="3">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="title">
                                Driver License #
                            </span>
                            <p>
                                <i class="icon-certification"></i>
                                <span><?=$val['cdl'];?></span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="title">
                                exp. date
                            </span>
                            <p>
                                <?=$val['date_experation'];?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="title">
                                Enrolment
                            </span>
                            <div>
                                <i class="icon-cart19"></i>
                                <span><?=$val['endors'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="title">
                                Class
                            </span>
                            <p>
                                <i class="icon-certification"></i>
                                <span>
                                    <?=$val['class'];?>
                                </span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            &nbsp;
                        </div>

                    </div>
                </td>
                <td colspan="2" rowspan="3">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="title">
                                Medical card expiration #
                            </span>
                            <p>
                                <i class="icon-medical96"></i>
                                <span><?=$val['medical_expiration'];?></span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="title">
                                Emergency contact
                            </span>
                            <p>
                                <i class="icon-calling3"></i>
                                <span><?=$val['emergency_phone'];?></span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <?=$val['emergency_contact'];?>
                        </div>
                    </div>
                </td>
              </tr>
              <tr>
              </tr>
              <tr>
              </tr>
            </table>
            <?php }?>

            <!--  -->

        </div>
    </div>
</div>


</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/jquery.cropit.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/js/download.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>


</html>
