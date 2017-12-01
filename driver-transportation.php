<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="driver-transportation">
    <h2>drivers transportation</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="container-for-btn-group">
        <button class="btn btn-primary add-course-drive">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Drive
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-1">Way out time</th>
                    <th class="col-sm-1">Walk Line</th>
                    <th class="col-sm-1">Kids Numbers</th>
                    <th class="col-sm-1">Return time</th>
                    <th class="col-sm-1">Start odometer</th>
                    <th class="col-sm-1">End odometer</th>
                    <th class="col-sm-1">Car type</th>
                    <th class="col-sm-1">Car number</th>
                    <th class="col-sm-2">Notes</th>
                    <th class="col-sm-1">Date</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>06:30 AM</td>
                <td>Minia</td>
                <td>3</td>
                <td class="text-center">
                    <input type="time" class="form-control">
                    <button class="btn btn-sm btn-primary" style="margin-top:3px">Add</button>
                </td>
                <td>102</td>
                <td>142</td>
                <td>Toyota</td>
                <td>AUR / 522</td>
                <td>none</td>
                <td>15 Sep 2017</td>
            </tr>
            <tr>
                <td>1</td>
                <td>06:30 AM</td>
                <td>Minia</td>
                <td>3</td>
                <td class="text-center">
                    <input type="time" class="form-control">
                    <button class="btn btn-sm btn-primary" style="margin-top:3px">Add</button>
                </td>
                <td>102</td>
                <td>142</td>
                <td>Toyota</td>
                <td>AUR / 522</td>
                <td>none</td>
                <td>15 Sep 2017</td>
            </tr>
            <tr>
                <td>1</td>
                <td>06:30 AM</td>
                <td>Minia</td>
                <td>3</td>
                <td class="text-center">
                    <input type="time" class="form-control">
                    <button class="btn btn-sm btn-primary" style="margin-top:3px">Add</button>
                </td>
                <td>102</td>
                <td>142</td>
                <td>Toyota</td>
                <td>AUR / 522</td>
                <td>none</td>
                <td>15 Sep 2017</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>