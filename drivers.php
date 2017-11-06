<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="drivers">
    <h2>drivers</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Driver Name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-5">Name</th>
                    <th class="col-sm-2">Branch</th>
                    <th class="col-sm-2">Driver transportation</th>
                    <th class="col-sm-2">Gasoline consumption</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Backpackerz</td>
                <td><a href="driver-transportation.php" class="btn btn-sm btn-primary">View</a></td>
                <td><a href="gasoline-consumption.php" class="btn btn-sm btn-primary">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Backpackerz</td>
                <td><a href="driver-transportation.php" class="btn btn-sm btn-primary">View</a></td>
                <td><a href="gasoline-consumption.php" class="btn btn-sm btn-primary">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>Backpackerz</td>
                <td><a href="driver-transportation.php" class="btn btn-sm btn-primary">View</a></td>
                <td><a href="gasoline-consumption.php" class="btn btn-sm btn-primary">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>