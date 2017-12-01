<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="staff-attend-details-months">
    <h2>Attendance Details Reports</h2>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Month..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th class="col-sm-3">#</th>
                <th class="col-sm-9">Month</th>
            </tr>
            </thead>
            <tr>
                <td>1</td>
                <td><a href="staff-attend-details-reports.php">March 2017</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="staff-attend-details-reports.php">March 2017</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="staff-attend-details-reports.php">March 2017</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="staff-attend-details-reports.php">March 2017</a></td>
            </tr>
        </table>
    </div>
    <div class="text-center">
        <ul class="pagination pagination-demo"></ul>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>