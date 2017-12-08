<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="staff-attend-history">
    <h2>staff attendance history</h2>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered  table-striped">
            <thead>
                <tr>
                    <th class="col-sm-2">#</th>
                    <th class="col-sm-5">Day</th>
                    <th class="col-sm-5">Date</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td><a href="c-staff-attend.php">Saturday</a></td>
                <td><a href="c-staff-attend.php">14 Sep 2017</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="c-staff-attend.php">Saturday</a></td>
                <td><a href="c-staff-attend.php">14 Sep 2017</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="c-staff-attend.php">Saturday</a></td>
                <td><a href="c-staff-attend.php">14 Sep 2017</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="c-staff-attend.php">Saturday</a></td>
                <td><a href="c-staff-attend.php">14 Sep 2017</a></td>
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