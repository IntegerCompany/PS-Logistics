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
    <link rel="stylesheet" href="/public/css/repair-history.css">
    <link rel="stylesheet" href="/public/css/modal.css">
</head>
<body>
<div id="navigation">
    <a href="/"><img src="/public/img/logo.png" class="img-responsive nav_logo" alt=""></a>
    <ul>
        <!--         add class .active to LI when this page active -->

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

                <h2 class="admin_title">REPAIR HISTORY</h2>
            </div>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">History</li>
                <li class="active"><?= $vin; ?></li>
                <li class="print">
                    <i class="icon-print5"></i>
                </li>
            </ol>
            <h1>TRUCK/TRAILER OWNER</h1>
            <!--            acardion -->
            <section class="history-content">
                <?php foreach ($data as $key => $val) { ?>
                    <h4>Date: <?= $key; ?></h4>
                    <table id="repair-table " class="global_table table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="2">Work order</th>
                            <th>Documents</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($val as $key2 => $val2) { ?>
                            <tr>
                                <td colspan="2"><?= $val2['description']; ?></td>
                                <td>
                                    <div class="add-file-section">
                                        <label for="myFile" class="custom-file-upload">
                                            <i class="fa fa-cloud-upload add-icon"></i>Upload Files
                                        </label>
                                        <input type="file" name="img" multiple class="myFile"/>
                                        <!--								<span id="file_error" class="file_error"></span>-->
                                        <?php foreach ($val2['file'] as $valFile) {
                                            $name = explode('/', $valFile);
                                            echo "<span class='file-name loaded' >" . $name[count($name) - 1] . "<button class='remove-btn load-file' data-link='" . $valFile. "'><i class='fa fa-download'></i></button> </span>";
                                        } ?>
                                        <span class="msg_error">You can only upload maximum 8 files</span>
                                    </div>

                                    <button class="file-submit _btn add_new file-submit-table" name="maintenance_file"
                                            data-id="<?= $key2; ?>">Submit
                                        <!--								<img class="load" src="/public/img/load.GIF" alt="load">-->
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>

            </section>
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
<script type="text/javascript" src="/public/js/repair-history.js"></script>
</body>
</html>