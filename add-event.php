<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="add-event add-forms">
    <h2>Add New Event</h2>
    <div class="row">
        <form class="form-horizontal col-sm-5">
            <div class="form-group">
                <label for="title" class="col-xs-3 control-label">Title</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="title" placeholder="Event title">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-xs-3 control-label">Name</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="name" placeholder="Supervisor name">
                </div>
            </div>
            <div class="form-group">
                <label for="location" class="col-xs-3 control-label">Location</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="location" placeholder="Location">
                </div>
            </div>
            <div class="form-group">
                <label for="segment" class="col-xs-3 control-label">Segment</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="segment" placeholder="Segment">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label">Kids No.</label>
                <div class="col-sm-9 col-xs-9">
                    <select>
                        <?php
                            for ($i = 0; $i <= 300; $i++) {
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="dateFrom" class="col-xs-3 control-label">Date From</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="date" class="form-control startRateDate" id="dateFrom">
                </div>
            </div>
            <div class="form-group">
                <label for="dateTo" class="col-xs-3 control-label">Date To</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="date" class="form-control endRateDate" id="dateTo">
                </div>
            </div>
            <div class="timeCount">

            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label">Files:</label>
                <div class="col-sm-9 col-xs-9">
                    <div style="position: relative" class="uploads">
                        <label for="files_upload" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-upload"></span> Upload Files
                        </label>
                        <input type="file" id="files_upload" class="btn btn-primary" accept=".doc, .dot, .wbk, .docx, .docm, .dotx, .xls, .xlt, .xlm, .xlsx, .xlsm, .xltx, .xltm, .ppt, .pot, .pps, .pptx, .pptm, .potx, .ppsx, .sldx, .pdf" multiple>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-sm-7">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-sm-5">Objectives</th>
                            <th class="col-sm-5">Activities</th>
                            <th class="col-sm-2">Budget</th>
                        </tr>
                    </thead>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td>
                            <select class="form-control normalSelect sumBudget">
                                <?php
                                    for ($i = 0; $i <= 1000; $i++) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td>
                            <select class="form-control normalSelect sumBudget">
                                <?php
                                    for ($i = 0; $i <= 1000; $i++) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td>
                            <select class="form-control normalSelect sumBudget">
                                <?php
                                    for ($i = 0; $i <= 1000; $i++) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td>
                            <select class="form-control normalSelect sumBudget">
                                <?php
                                    for ($i = 0; $i <= 1000; $i++) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td>
                            <select class="form-control normalSelect sumBudget">
                                <?php
                                    for ($i = 0; $i <= 1000; $i++) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td>
                            <select class="form-control normalSelect sumBudget">
                                <?php
                                    for ($i = 0; $i <= 1000; $i++) {
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tfoot>
                        <tr>
                            <th colspan="2">All</th>
                            <th>Sum</th>
                        </tr>
                        <tr>
                            <td colspan="2">13</td>
                            <td id="sumBudgetDiv">0 LE.</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="container-for-btn-group">
                <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Row
                </button>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-push-4 col-sm-4 col-xs-12">
            <button class="form-control btn btn-success btn-block add">Add</button>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>