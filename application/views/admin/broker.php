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
<div id="addCompany" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="text-center modal-header-text">Add new</h3>
            </div>
            <div class="modal-body row body-modal valid-form">
                <form>
                    <div class="col-md-6 form-group">
                        <label for="name">Name Brokers Company</label>
                        <input name="name" class="form-control" data-valid placeholder="Name Brokers Company"
                               type="text"
                               autocomplete="off">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="rate">Rate</label>
                        <select class="form-control" name="rate" data-valid>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label from="mc">MC</label>
                        <input name="mc" class="form-control" data-valid placeholder="MC" type="text"
                               autocomplete="off">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="address">address</label>
                        <input type="text" class="form-control" name="address" data-valid placeholder="Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="city">city</label>
                        <input type="text" class="form-control" name="city" data-valid placeholder="City">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="state">state</label>
                        <input name="state" class="form-control" placeholder="State" type="text" autocomplete="off"
                               data-valid>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="zip">zip</label>
                        <input type="text" class="form-control" name="zip" data-valid placeholder="Zip code">
                    </div>
                    <div class="col-md-6 form-group">
                        <label from="phone">Main Phone</label>
                        <input name="phone" class="form-control" placeholder="Phone" type="text" autocomplete="off"
                               data-valid>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="payment_type">payment type</label>
                        <select class="form-control" name="payment_type" data-valid>
                            <option val="Factoring">Factoring</option>
                            <option val="QP">QP</option>
                            <option val="Direct">Direct</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="payment_form">payment form</label>
                        <select class="form-control" name="payment_form" data-valid>
                            <option value="ACH">ACH</option>
                            <option value="Check /M">Check /M</option>
                            <option value="Comcheck">Comcheck</option>
                            <option value="T-Check">T-Check</option>
                            <option value="EFS-Check">EFS-Check</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="interest">interest</label>
                        <input type="text" class="form-control" name="interest" data-valid placeholder="Interest...">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="notes">notes</label>
                        <textarea class="form-control" rows="1" name="notes" data-valid
                                  placeholder="Notes..."></textarea>
                    </div>
                    <div class="col-md-12 form-btns text-center">
                        <button class="_btn add_new add_new_company">Send It!</button>
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
        <li class="active">
            <a href="/broker">
                <i class="icon-pin67"></i>
                <i class="icon-locator"></i>
                broker
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

                <h2 class="admin_title">Broker</h2>
                <button type="button" class="_btn add_new add_company" data-toggle="modal" data-target="#brokerModal">
                    new
                </button>
            </div>

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Brokers company</li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>
            <?php if(!empty($info)) { ?>
            <table class="global_table table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Adress</th>
                    <th colspan="2">Settings</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($info as $val) { ?>
                    <tr>
                        <td>
                            <?=$val['name'];?>
                        </td>
                        <td><?=$val['address'];?></td>
                        <td class="td-icon-width">
                            <a href="javascript:;" data-id="<?=$val['id'];?>" class="edit-icon setting-company" title="edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td class="td-icon-width">
                            <a href="/broker/brokerlist/<?=$val['id'];?>" target="_blank" class="edit-icon" title="">
                                <i class="fa fa-user"></i>
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
<script type="text/javascript" src="/public/js/jquery.cropit.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/js/download.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>

</body>
</html>
