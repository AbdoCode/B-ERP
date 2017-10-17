<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="time-table">
    <h2>Time Tables</h2>
    <div class="container-for-btn-group">
        <a href="add-new-time-table.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add time table
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Status/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-3">#</th>
                <th class="col-sm-3">Date</th>
                <th class="col-sm-3">Status</th>
                <th class="col-sm-3">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>17 Aug 2017</td>
                <td>Confirmed</td>
                <td><a href="view-time-table.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>20 Sep 2016</td>
                <td>Pending</td>
                <td><a href="view-time-table.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>