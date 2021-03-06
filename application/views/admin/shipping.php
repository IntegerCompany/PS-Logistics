<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PS Logistics LLC</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/application.css">
    <link rel="stylesheet" href="/public/css/admin_theme.css">
    <link rel="stylesheet" href="/public/css/repair-page.css">

    <!-- add shipping.css -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/datepicker.css">
    <link rel="stylesheet" href="/public/css/modal.css">
    <link rel="stylesheet" href="/public/css/bootstrap-timepicker.min.css">
    <!--    -->
    <link rel="stylesheet" href="/public/css/shipping.css">
    <link rel="stylesheet" type="text/css" media="print" href="/public/css/print.css"/>
    <link rel="stylesheet" href="/public/css/shipping-special.css">
    <!-- add to main layout for print-->
</head>
<body>

<div id="addShipping" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="text-center modal-header-text">Add new</h3>
            </div>
            <div class="modal-body row body-modal valid-form">
                <form>
                    <div class="col-md-6 form-group">
                        <label for="week">Week</label>
                        <select class="form-control combobox" name="week" data-valid>
                            <?php $cw = date("W");
                            $nw = $cw + 1;
                            $pw = $cw - 1;
                            echo "<option value='$pw'>$pw - previous</option>";
                            echo "<option selected value='$cw'>$cw - current</option>";
                            echo "<option value='$nw'>$nw - next</option>";
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="truck">Truck#</label>
                        <select class="form-control" name="truck" data-valid>
                            <?php foreach ($truck as $val) {
                                echo "<option  value='" . $val['id'] . "'>" . $val['id'] . '(' . $val['driver_name'] . ')' . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="truck">Company</label>
                        <select class="form-control" name="company" data-valid>
                            <?php foreach ($company as $val) {
                                echo "<option  value='" . $val['id'] . "'>" . $val['name'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="truck">Broker</label>
                        <select class="form-control" name="broker" data-valid>
                            <?php foreach ($broker as $val) {
                                echo "<option  value='" . $val['id'] . "'>" . $val['name'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="s1">$1</label>
                        <input type="text" class="form-control" name="s1" data-valid placeholder="$1">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="s2">Phone</label>
                        <input type="text" class="form-control" name="phone" data-valid placeholder="phone">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="s2">$2</label>
                        <input type="text" class="form-control" name="s2" data-valid placeholder="$2">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" name="weight" data-valid placeholder="weight">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="notes">Special instruction</label>
                        <textarea class="form-control" rows="5" name="instruction" data-valid
                                  placeholder="Special instruction"></textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="product_type">Product type</label>
                        <input type="text" class="form-control" name="product_type" data-valid placeholder="product type">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="load">Load#</label>
                        <input type="text" class="form-control" name="load" data-valid placeholder="load">
                    </div>
                    <h4 class="col-md-12 text-center">Place from</h4>
                    <div class="col-md-12 form-group">
                        <label for="place">Place</label>
                        <input type="text" class="form-control data-place placeselector" name="place" placeholder="enter place">
                    </div>
                    <div class="col-md-6">
                        <label for="place">Date</label>
                        <input type="text" class="form-control form-group datepicker data-place" name="date"
                               placeholder="date">
                    </div>
                    <div class="col-md-6 shipping-time">
                        <label for="place">Time</label>
                        <input type="text" class="form-control timepicker data-place" name="time" placeholder="time">
                        <button type="button" class="btn btn-default add-place">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="col-md-12 list-place" data-type="0"></div>
                    <h4 class="col-md-12 text-center">Place to</h4>

                    <div class="col-md-12 form-group">
                        <label for="place">Place</label>
                        <input type="text" class="form-control data-place placeselector"  name="place"
                               placeholder="enter place">
                    </div>
                    <div class="col-md-6">
                        <label for="place">Date</label>
                        <input type="text" class="form-control form-group datepicker data-place" name="date"
                               placeholder="date">
                    </div>
                    <div class="col-md-6 shipping-time">
                        <label for="place">Time</label>
                        <input type="text" class="form-control timepicker data-place" name="time" placeholder="time">
                        <button type="button" class="btn btn-default add-place">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="col-md-12 list-place" data-type="1"></div>
                    <h4 class="col-md-12 text-center click-file">Attach file <i class="fa fa-cloud-upload"></i></h4>
                    <div class="col-md-12 add-file-section">
                        <input type="file" name="img"  multiple  class="myFile" />
                        <span class="msg_error">You can only upload maximum 8 files</span>
                    </div>

                    <div class="col-md-12 form-btns text-center">
                        <button class="_btn add_new add_new_shipping">Send It!</button>
                        <button data-dismiss="modal" aria-hidden="true" class="_btn delete">Discard</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!--<!-- login modal add checkpoint -->
<!--<div class="modal fade" id="addCheckpointModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-body">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="col-md-12">-->
<!--                        <!---->
<!--                            new form, make same for edit-->
<!--                            ps. delete this comment after done-->
<!--                        -->
<!--                        <form class="form global_form">-->
<!--                            <div class="caption">-->
<!--                                Add checkpoint-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="add_checkpoint_place">place</label>-->
<!--                                <input type="text" class="form-control" id="add_checkpoint_place">-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="add_checkpoint_time">time</label>-->
<!---->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-8">-->
<!--                                        <select class="form-control" id="add_checkpoint_time">-->
<!--                                            <option value="">date</option>-->
<!--                                            <option value="">date1</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-4">-->
<!--                                        <select class="form-control">-->
<!--                                            <option value="">Time</option>-->
<!--                                            <option value="">Time</option>-->
<!--                                            <option value="">Time</option>-->
<!--                                            <option value="">Time</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <button type="submit" class="_btn add_new">Submit</button>-->
<!--                                <button type="submit" class="_btn delete">Discard</button>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- login modal add checkpoint -->
<!--<div class="modal fade" id="addCommentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-body">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="col-md-12">-->
<!--                        <!---->
<!--                            new form, make same for edit-->
<!--                            ps. delete this comment after done-->
<!--                        -->
<!--                        <form class="form global_form">-->
<!--                            <div class="caption">-->
<!--                                Special instructions-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>-->
<!---->
<!--                            <div class="form-group">-->
<!--                                <button type="submit" class="_btn add_new">Submit</button>-->
<!--                                <button type="submit" class="_btn delete">Discard</button>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<!-- login modal add checkpoint -->
<!--<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-body">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="col-md-12">-->
<!--                        <!---->
<!--                            new form, make same for edit-->
<!--                            ps. delete this comment after done-->
<!--                        -->
<!--                        <form class="form global_form">-->
<!--                            <div class="caption">-->
<!--                                Add File-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="file_upload">Select image to upload:</label>-->
<!--                                <input type="file" name="file_upload" id="file_upload" class="form-control" multiple>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <button type="submit" class="_btn add_new">Submit</button>-->
<!--                                <button type="submit" class="_btn delete">Discard</button>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div id="navigation">
    <a href="/"><img src="/public/img/logo.png" class="img-responsive nav_logo" alt=""></a>
    <ul>
        <!-- add class .active to LI when this page active -->

        <li class="active">
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

                <h2 class="admin_title">shipping</h2>
                <button type="button" class="_btn add_new add_shipping" data-toggle="modal"
                        data-target="#shippingModal">
                    new
                </button>
            </div>

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shipping</li>
                <li class="select">
                    <select name="" id="">
                        <option value="">week 1</option>
                        <option value="">week 2</option>
                        <option value="">week 3</option>
                    </select>
                </li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>

            <table class="global_table table shipping_table table-bordered">
                <caption>
                    total:
					<span>
						123123123 
					</span>
                    $
                </caption>
                <thead>
                <tr class="table-head">
                    <th colspan="4" class="text-center">#46 * Oleh Lebid * 216-7736168 * * 2014 * 353389 * trl# 215367 *
                        801365
                    </th>
                    <th> 1250 $</th>
                    <th colspan="2">
							<span class="pull-right">
								<a href="" data-toggle="modal" data-target="#addCommentModal">
                                    <i class="icon-comment43"></i>
                                </a>
								<a href="" data-toggle="modal" data-target="#addFileModal">
                                    <i class="icon-folder63"></i>
                                </a>
								<a href="">
                                    <i class="icon-settings"></i>
                                </a>
							</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="10" class="vcenter">
                        <a href="">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <span class="number">1</span>
                        <a href="">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </td>
                    <td>
                        <i class="icon-pin67 pull-left"></i>
							<span class="clearfix pull-left">
								<span>
									boston, MA
								</span>
								<br>
								<span>
									<a href="">Sep 21</a> / 
									<a href="">12:00</a>
								</span>
							</span>
                        <a href="" class="clearfix pull-right" data-toggle="modal" data-target="#addCheckpointModal">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                    <td>
                        <i class="icon-locator pull-left"></i>
							<span class="clearfix pull-left">
								<span>
									New York
								</span>
								<br>
								<span>
									<a href="">Sep 29</a> / 
									<a href="">21:00</a>
								</span>
							</span>
                        <a href="" class="clearfix pull-right" data-toggle="modal" data-target="#addCheckpointModal">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                    <td>
                        <p>
                            <i class="fa fa-briefcase"></i>
                            American Transport
                        </p>

                        <p>
                            <i class="fa fa-user"></i>
                            Tommy
                            <br>
                            <span>Phone: 090999 2031231</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="fa fa-usd"></i>
                            <span>100</span>
                            /
                            <span>1000</span>
                        </p>

                        <p class="clearfix">
                            <i class="icon-frontal19" style="float: left;"></i>
                            <!-- 	<span style="float: left;">
                                    D: <span> 111</span>
                                    <br>
                                    L: <span> 2222</span>
                                </span> -->
								<span class="price-style">
									<b>D:</b> <span> 111</span> / <b>L:</b> <span> 2222</span>
									
									
								</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="icon-cart19"></i>
                            <span>glass</span>
                        </p>

                        <p>
                            <i class="icon-weight41"></i>
                            <span>12 T</span>
                        </p>
                    </td>
                    <td>
                        <p class="invoice">
                            Invoice
                        </p>

                        <p class="status">
                            status
                            <!--
                              Booked
                              Dispatched
                              Shipper
                                Loaded
                                Receiver
                                Delivered
                                Not use
                                Canceled
                                Deleted
                            -->
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>
<script type="text/javascript" src="/public/js/jquery.cropit.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/public/js/main.js"></script>
<script>

    function initAutocomplete() {
        $('.placeselector').each(function () {
            new google.maps.places.Autocomplete(
                this,
                {
                    types: ['geocode']
                }
            );
        });

    }


</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHaW87AfKzGB3boNxzF58xTzZ7gM_6plI&signed_in=true&libraries=places&callback=initAutocomplete"
    async defer></script>

</body>
</html>
