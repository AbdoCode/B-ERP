<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="logistics">
    <h2>logistics approval</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Supervisor name/Date/Status..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-2">Requester Name</th>
                <th class="col-sm-2">Supervisor Name</th>
                <th class="col-sm-2">Added Date</th>
                <th class="col-sm-2">Dead Line</th>
                <th class="col-sm-2">Status</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa</td>
                <td>Doaa</td>
                <td>17 Sep 2017</td>
                <td>30 Sep 2017</td>
                <td>Confirmed</td>
                <td><a href="view-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Hadeer</td>
                <td>Hadeer</td>
                <td>17 Sep 2017</td>
                <td>30 Sep 2017</td>
                <td>Confirmed</td>
                <td><a href="view-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>