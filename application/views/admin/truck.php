<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PS Logistics LLC</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/application.css">
    <link rel="stylesheet" href="/public/css/admin_theme.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/datepicker.css">
    <link rel="stylesheet" href="/public/css/modal.css">
</head>
<body>
<!-- login modal -->
<div id="addTruck" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addStuffLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="text-center modal-header-text">Add new</h3>
            </div>
            <div class="modal-body row body-modal valid-form">
                <form>
                    <div class="col-md-12">
                        <label for="vin">VIN#</label>
                        <input name="vin" class="form-control" data-valid placeholder="VIN" type="text"
                               autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label for="track">Truck#</label>
                        <input name="car_number" class="form-control" data-valid placeholder="track" type="text"
                               autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label>Make</label>
                        <select class="form-control" name="make" placeholder="class" data-valid>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label from="year">Year</label>
                        <input name="year" class="form-control datepicker-year" data-valid placeholder="year"
                               type="text" autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label>Color</label>
                        <select class="form-control" name="color" data-valid>
                            <option value="Magenta">Magenta</option>
                            <option value="Chrome">Chrome</option>
                            <option value="Brown">Brown</option>
                            <option value="Cyan">Cyan</option>
                            <option value="Violet">Violet</option>
                            <option value="Gray">Gray</option>
                            <option value="Pink">Pink</option>
                            <option value="Silver">Silver</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Orange">Orange</option>
                            <option value="Purple">Purple</option>
                            <option value="Black">Black</option>
                            <option value="White">White</option>
                            <option value="Green">Green</option>
                            <option value="Red">Red</option>
                            <option value="Red">Red</option>
                            <option value="Blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-6 attach-input">
                        <label>License plate</label>
                        <input type="text" name="license_plate" class="form-control pull-left"
                               placeholder="License plate" data-valid>
                        <button type="button" class="btn btn-default attach-button pull-left">
                            <span class="glyphicon glyphicon-paperclip"></span>
                        </button>
                        <button type="button" class="btn btn-default remove-attach-button pull-left">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <input type="file" class="hidden attach-input-inner">
                        <input type="hidden" name="license_file" data-valid="attach-file">
                    </div>
                    <div class="col-md-6">
                        <label from="exp_date">Exp. date</label>
                        <input name="exp_date" class="form-control datepicker" data-valid placeholder="Exp. date"
                               type="text" autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label from="annaul_exp_date">Annual inspection Exp. Date</label>
                        <input name="annaul_exp_date" class="form-control datepicker" data-valid
                               placeholder="Annual inspection Exp. Date" type="text" autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label>Owner</label>
                        <select class="form-control" name="owner" data-valid>
                            <?php foreach ($stuff as $val) {
                                echo "<option value='" . $val['id'] . "'>" . $val['first_name'] . ' ' . $val['last_name'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Dispatcher</label>
                        <select class="form-control" name="dispatcher" data-valid>
                            <?php foreach ($stuff as $val) {
                                if ($val['name_position'] == 'dispatcher') {
                                    echo "<option value='" . $val['id'] . "'>" . $val['first_name'] . ' ' . $val['last_name'] . "</option>";
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Driver</label>
                        <select class="form-control" name="driver" data-valid>
                            <?php foreach ($stuff as $val) {
                                if ($val['name_position'] == 'driver') {
                                    echo "<option value='" . $val['id'] . "'>" . $val['first_name'] . ' ' . $val['last_name'] . "</option>";
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Trailer</label>
                        <select class="form-control" name="trailer" data-valid>
                            <?php foreach ($trailer as $val) {
                                echo "<option value='" . $val['id'] . "'>" . $val['car_number'] ."</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Status</label>
                        <select class="form-control" name="status" data-valid>

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


                    <div class="col-md-12 form-btns text-center">
                        <button class="_btn add_new add_new_truck">Send It!</button>
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
        <li>
            <a href="/stuff">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                stuff
            </a>
        </li>
        <li class="active">
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

                <h2 class="admin_title">truck</h2>
                <button type="button" class="_btn add_new add_truck" data-toggle="modal">
                    new
                </button>
            </div>

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Truck</li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>
            <?php if (!empty($info)) { ?>
                <table class="global_table table table-bordered">
                    <thead>
                    <tr>
                        <th># ID</th>
                        <th>License plate</th>
                        <th>Make</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>VIN</th>
                        <th colspan="2">Settings</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($info as $val) { ?>
                        <tr>
                            <td><?= $val['id'] ?></td>
                            <td><?= $val['license_plate'] ?></td>
                            <td><?= $val['make'] ?></td>
                            <td><?= $val['year'] ?></td>
                            <td><?= $val['color'] ?></td>
                            <td><?= $val['vin'] ?></td>
                            <td class="td-icon-width">
                                <a href="javascript:void(0);" class="edit-icon setting-truck" title="edit"
                                   data-id="<?= $val['id'] ?>">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                            <td class="td-icon-width">
                                <a href="/history/<?= $val['vin'] ?>" class="edit-icon" title="history">
                                    <i class="fa fa-history"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            <?php } ?>

        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/js/download.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>

</body>
</html>
