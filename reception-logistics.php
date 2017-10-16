<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="reception-logistics">
    <h2>Reception Logistics</h2>
    <div class="container-for-btn-group">
        <div class="btn-group">
            <a href="add-reception-logistics.php" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Logistics
            </a>
        </div>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Reception name/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Reception Name</th>
                <th class="col-sm-2">Forward to (<abbr title="Operation Manager">OR</abbr>)</th>
                <th class="col-sm-2"><abbr title="Operation Manager">OR</abbr> Confirmation</th>
                <th class="col-sm-2">Date</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa</td>
                <td>Hadeer</td>
                <td>Confirmed</td>
                <td>17 Sep 2017</td>
                <td><a href="view-reception-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa</td>
                <td>Hadeer</td>
                <td>Confirmed</td>
                <td>17 Sep 2017</td>
                <td><a href="view-reception-logistics.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>
