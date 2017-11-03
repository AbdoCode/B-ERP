<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="reception-logistics">
    <h2>logistics</h2>
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
                <th class="col-sm-4">Supervisor Name</th>
                <th class="col-sm-3">Added Date</th>
                <th class="col-sm-3">Status</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa</td>
                <td>17 Sep 2017</td>
                <td>Confirmed</td>
                <td><a href="view-reception-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Hadeer</td>
                <td>17 Sep 2017</td>
                <td>Confirmed</td>
                <td><a href="view-reception-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>