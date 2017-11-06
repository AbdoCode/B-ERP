<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="staff">
    <h2>staff</h2>
    <div class="container-for-btn-group">
        <button class="btn btn-default hidden-xs" type="button" onclick="window.print()">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
        </button>
        <a href="edit-profile.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Staff
        </a>
    </div>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name/Job title/branch/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-4">Name</th>
                    <th class="col-sm-2">Job Title</th>
                    <th class="col-sm-2">Branch</th>
                    <th class="col-sm-2">Added Date</th>
                    <th class="col-sm-1">Details</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>Back-packers</td>
                <td>5 Sep 2016</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>Back-packers</td>
                <td>5 Sep 2016</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>Back-packers</td>
                <td>5 Sep 2016</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>Back-packers</td>
                <td>5 Sep 2016</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Teacher</td>
                <td>Back-packers</td>
                <td>5 Sep 2016</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
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