<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="branches">
    <h2>branches</h2>
    <div class="container-for-btn-group">
        <a href="add-new-branch.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Branch
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Branch name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-4">Branch Name</th>
                    <th class="col-sm-2">Include Zone?</th>
                    <th class="col-sm-3">Added By</th>
                    <th class="col-sm-2">Statistics</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Back-packers</td>
                <td>Yes</td>
                <td>Mohamed (CEO)</td>
                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Back-packers</td>
                <td>Yes</td>
                <td>Mohamed (CEO)</td>
                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Back-packers</td>
                <td>Yes</td>
                <td>Mohamed (CEO)</td>
                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>