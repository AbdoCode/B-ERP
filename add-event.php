<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-event">
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
                <label for="number" class="col-xs-3 control-label">Kids Number</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="number" placeholder="Kids Number">
                </div>
            </div>
            <div class="form-group">
                <label for="dateFrom" class="col-xs-3 control-label">Date From</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="date" class="form-control" id="dateFrom">
                </div>
            </div>
            <div class="form-group">
                <label for="dateTo" class="col-xs-3 control-label">Date To</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="date" class="form-control" id="dateTo">
                </div>
            </div>
            <div class="form-group">
                <label for="timeFrom" class="col-xs-3 control-label">Time From</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="time" class="form-control" id="timeFrom">
                </div>
            </div>
            <div class="form-group">
                <label for="timeTo" class="col-xs-3 control-label">Time To</label>
                <div class="col-sm-9 col-xs-9">
                    <input type="time" class="form-control" id="timeTo">
                </div>
            </div>
            <div class="form-group hidden-xs">
                <label class="col-xs-3 control-label">Photos:</label>
                <div class="col-sm-9 col-xs-9">
                    <div style="position: relative" class="uploads">
                        <label for="photos_upload" class="btn btn-primary">
                            <span class="glyphicon glyphicon-upload"></span> Upload Photos
                        </label>
                        <input type="file" id="photos_upload" class="btn btn-primary" accept="image/*" multiple>
                    </div>
                </div>
            </div>
            <div class="form-group hidden-xs">
                <label class="col-xs-3 control-label">Files:</label>
                <div class="col-sm-9 col-xs-9">
                    <div style="position: relative" class="uploads">
                        <label for="files_upload" class="btn btn-primary">
                            <span class="glyphicon glyphicon-upload"></span> Upload Files
                        </label>
                        <input type="file" id="files_upload" class="btn btn-primary" accept=".doc, .dot, .wbk, .docx, .docm, .dotx, .xls, .xlt, .xlm, .xlsx, .xlsm, .xltx, .xltm, .ppt, .pot, .pps, .pptx, .pptm, .potx, .ppsx, .sldx, .pdf" multiple>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-sm-7">
            <div class="container-for-btn-group">
                <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Row
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th class="col-sm-5">Objectives</th>
                        <th class="col-sm-5">Activities</th>
                        <th class="col-sm-2">Budget</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td><input type="text" class="form-control" placeholder="Ex: 500LE"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td><input type="text" class="form-control" placeholder="Ex: 500LE"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td><input type="text" class="form-control" placeholder="Ex: 500LE"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td><input type="text" class="form-control" placeholder="Ex: 500LE"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td><input type="text" class="form-control" placeholder="Ex: 500LE"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="type objective..."/></td>
                        <td><input type="text" class="form-control" placeholder="type activities..."/></td>
                        <td><input type="text" class="form-control" placeholder="Ex: 500LE"></td>
                    </tr>
                    <tfoot>
                        <tr>
                            <th colspan="2">All</th>
                            <th>Sum</th>
                        </tr>
                        <tr>
                            <td colspan="2">13</td>
                            <td>90LE</td>
                        </tr>
                    </tfoot>
                </table>
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