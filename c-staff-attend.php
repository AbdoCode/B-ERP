<?php
    session_start();
    $pageTitle = 'Staff Attendance';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="c-staff-attend">
    <h2>Day / Date Attendance</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Employee name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-5">Employee Name</th>
                    <th class="col-sm-3">Check In Time</th>
                    <th class="col-sm-3">Check Out Time</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Ali mohamed</td>
                <td>07:34 AM</td>
                <td>02:35 PM</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Ali mohamed</td>
                <td>07:34 AM</td>
                <td>02:35 PM</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Ali mohamed</td>
                <td>07:34 AM</td>
                <td>02:35 PM</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>