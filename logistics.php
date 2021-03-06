<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="logistics">
    <h2>Logistics</h2>
    <div class="container-for-btn-group">
        <a href="add-logistics.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Logistics
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Reception name/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered ">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Forward to</th>
                <th class="col-sm-3">Status</th>
                <th class="col-sm-3">Date</th>
                <th class="col-sm-2">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Hadeer</td>
                <td>Confirmed</td>
                <td>17 Sep 2017</td>
                <td><a href="view-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Hadeer</td>
                <td>Not Confirmed</td>
                <td>17 Sep 2017</td>
                <td><a href="view-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>
