<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PS Logistics LLC</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/application.css">
    <link rel="stylesheet" href="/public/css/admin_theme.css">
    <link rel="stylesheet" href="/public/css/repair-page.css">
    <link rel="stylesheet" href="/public/css/modal.css">

</head>
<body>
<!-- new-popup-form -->
<div class="modal fade" id="addMaintenance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">Add new</h3>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12 valid-form">
                        <form class="form global_form ">
                            <div class="radio-new-form-right">
                                <input type="radio" id="radio01" value="trailer" name="radio-object"/>
                                <label for="radio01"><span></span>TRAILER </label>
                            </div>
                            <div class="radio-new-form-left">
                                <input type="radio" id="radio02" value="truck" name="radio-object"/>
                                <label for="radio02"><span></span>TRUCK</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control object-list" data-valid name="vin">
                                    <option selected></option>
                                    <?php foreach ($truck as $val) {
                                        echo "<option  data-option='truck' value='" . $val['vin'] . "'>" . $val['vin'] . "</option>";
                                    }
                                    foreach ($trailer as $val) {
                                        echo "<option  data-option='trailer' value='" . $val['vin'] . "'>" . $val['vin'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>DESCRIPTION</label>
                                <textarea class="form-control" rows="3" name="description" data-valid
                                          placeholder="Description..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="_btn add_new add_new_maintenance">Submit</button>
                                <button type="submit" class="_btn delete">Discard</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- done-popup-form -->
<div class="modal fade" id="done-popup-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">Done</h3>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <form class="form global_form">
                            <h3 class="done-form-title">Select files</h3>

                            <div class="form-group done-file">
                                <!-- <input type="file" name="img" accept="image/*" multiple id="myFile" class="myFile" title=" "/>
                                <span id="file_error" class="file_error"></span>
                                <span  class="msg_error"></span> -->
                                <!-- <input type="submit" value="submit" class="file-submit _btn add_new" /> -->
                                <div class="add-file-section">
                                    <label for="myFile" class="custom-file-upload">
                                        <i class="fa fa-cloud-upload add-icon"></i>Upload Files
                                    </label>
                                    <input type="file" name="img"  multiple  class="myFile" />
                                    <!--<span id="file_error" class="file_error"></span>-->
                                    <span class="msg_error">You can only upload maximum 8 files</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class=" _btn add_new">
                                    <input type="button" value="submit" class="file-submit file-sub-popup btn-done-maintenance">

                                </div>
                                <button type="submit" class="_btn delete">Discard</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="navigation">
    <a href="/"><img src="/public/img/logo.png" class="img-responsive nav_logo" alt=""></a>
    <ul>
        <!-- add class .active to LI when this page active -->

        <li>
            <a href="/shipping">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                shipping
            </a>
        </li>
        <li>
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

        <li class="active">
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

                <h2 class="admin_title">MAINTENANCE</h2>
                <button type="button" class="_btn add_old" data-toggle="modal" data-target="#done-popup-form">
                    done
                </button>

                <button type="button" class="_btn add_new add_maintenance">
                    new
                </button>
            </div>
            <hr>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Maintenance</li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-12 table-info-repair">
                <?php if(!empty($info)){?>
                <table id="repair-table " class="global_table table table-bordered">
                    <thead>
                    <tr>
                        <th>
<!--                            <div class="mark">-->
<!--                                <input id="maintenance-checkbox" type="checkbox" name="toppings" value="ham">-->
<!--                                <label for="maintenance-checkbox"></label>-->
<!--                            </div>-->
                            <input id='checkbox-mainteance-all' type="checkbox">
                        </th>
                        <th> Date</th>
                        <th>Equipment</th>
                        <th colspan="2">Work order</th>
                        <!--						<th>Status</th>-->
                        <th>Documents</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($info as $val) { ?>
                        <tr>
                            <td>
                                <input class="checkbox-maintenance" data-id="<?= $val['id']; ?>" type="checkbox">
                            </td>
                            <td><?= $val['time']; ?></td>
                            <td>
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <i class="icon-frontal19"></i>
                                    </div>
                                    <div class="pull-left">
                                        <span class="model_name"><?= $val['vin']; ?></span>
                                        <br>
                                        <span class="model_type"><?= $val['year'] . ' ' . $val['car_number']; ?></span>
                                    </div>
                                </div>
                            </td>
                            <td colspan="2"><?= $val['description']; ?></td>
                            <!--						<td>-->
                            <!--							<span class="fancyArrow"><i class="fa fa-tasks"></i></span>-->
                            <!--							<select class="form-control status-select">-->
                            <!--								<option value="">Start</option>-->
                            <!--								<option value="">Progress</option>-->
                            <!--								<option value="">Do</option>-->
                            <!--								<option value="">4</option>-->
                            <!--								<option value="">5</option>-->
                            <!--							</select>-->
                            <!--						</td>-->
                            <td>
                                <div class="add-file-section">
                                    <label for="myFile" class="custom-file-upload">
                                        <i class="fa fa-cloud-upload add-icon"></i>Upload Files
                                    </label>
                                    <input type="file" name="img"  multiple  class="myFile" />
                                    <!--								<span id="file_error" class="file_error"></span>-->
                                    <?php foreach ($file as $valFile) {
                                        if ($valFile['maintenance'] == $val['id']) {
                                            $name = explode('/',$valFile['maintenance_file']);
                                            echo "<span class='file-name loaded' >" . $name[count($name)-1] . "<button class='remove-btn remove-file' data-id='" . $valFile['id'] . "'> <i class='fa fa-trash-o'></i></button> <button class='remove-btn load-file' data-link='" . $valFile['maintenance_file'] . "'><i class='fa fa-download'></i></button> </span>";
                                        }
                                    } ?>
                                    <span class="msg_error">You can only upload maximum 8 files</span>
                                </div>

                                <button class="file-submit _btn add_new file-submit-table" name="maintenance_file"
                                        data-id="<?= $val['id']; ?>">Submit
                                    <!--								<img class="load" src="/public/img/load.GIF" alt="load">-->
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <?php }?>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/js/download.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>

</body>
</html>







