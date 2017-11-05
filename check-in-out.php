<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="checkInOut">
    <h2>Staff Attendance</h2>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name/Job title/Period/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Name</th>
                <th class="col-sm-3">Job Title</th>
                <th class="col-sm-2">Attendance Rate</th>
                <th class="col-sm-2">Performance Review</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Teacher</td>
                <td>20%</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Teacher</td>
                <td>20%</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>