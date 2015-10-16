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
    <link rel="stylesheet" href="/public/css/modal.css">
</head>
<body>

<div id="addBroker" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="text-center modal-header-text">Add new</h3>
            </div>
            <div class="modal-body row body-modal valid-form">
                <form>
                    <div class="col-md-6 form-group">
                        <label for="name">Name</label>
                        <input name="name" class="form-control" data-valid placeholder="Name"
                               type="text"
                               autocomplete="off">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" data-valid placeholder="Email">
                    </div>
                    <!--                    <div class="col-md-6 form-group">-->
                    <!--                        <label>Rate:</label>-->
                    <!--                        <input type="hidden" name="rate">-->
                    <!---->
                    <!--                        <div class="form-control broker-rate">-->
                    <!--                            <i class="fa fa-star"></i>-->
                    <!--                            <i class="fa fa-star"></i>-->
                    <!--                            <i class="fa fa-star"></i>-->
                    <!--                            <i class="fa fa-star"></i>-->
                    <!--                            <i class="fa fa-star"></i>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
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
                        <label from="phone">Main Phone</label>
                        <input name="phone" class="form-control" placeholder="Phone" type="text" autocomplete="off"
                               data-valid>
                    </div>
                    <input type="hidden" name="company" val="<?=$id;?>">
                    <div class="col-md-12 form-btns text-center">
                        <button class="_btn add_new add_new_broker">Send It!</button>
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
        <a href="javascript:void(0);" class="change_pass col-md-6 col-xs-12">change pass</a>
    </div>
</div>
<div id="content">
    <div class="row">
        <div class="container-fluid">

            <div class="admin_top">
                <a class="visible-xs visible-sm toggle_menu" href="javascript:void(0);">
                    toggle
                </a>

                <h2 class="admin_title">Brokers List</h2>
                <button type="button" class="_btn add_new add_broker">
                    new
                </button>
            </div>

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/broker">Broker</a></li>
                <li class="active">brokerlist</li>
                <li class="active"><?= $id; ?></li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>
            <?php if(!empty($info)) { ?>
            <table class="global_table table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Rate</th>
                    <th colspan="2">Settings</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($info as $val) { ?>
                    <tr>
                        <td>
                            <?=$val['name'];?>
                        </td>
                        <td>
                            <?=$val['phone'];?>
                        </td>
                        <td>
                            <?=$val['email'];?>
                        </td>
                        <td>
                            <?php for ($i = 0; $i < $val['rate']; $i++)
                                echo '<i class="fa fa-star"></i>';
                            ?>
                        </td>
                        <td class="td-icon-width">
                            <a href="javascript:void(0);" class="edit-icon setting_broker" data-id="<?=$val['id'];?>"title="edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td class="td-icon-width">
                            <a href="javascript:;" class="edit-icon delete_broker" data-id="<?=$val['id'];?>">
                                <i class="fa fa-trash-o"></i>
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
<script type="text/javascript" src="/public/js/core.js"></script>
<script type="text/javascript" src="/public/js/jquery.cropit.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>

</body>
</html>
