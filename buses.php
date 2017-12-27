<?php
    session_start();
    $pageTitle = 'Buses';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="buses">
    <h2>buses</h2>
    <div class="container-for-btn-group">
        <a href="add-bus.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Bus
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Bus name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered  table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-2">Bus Name</th>
                    <th class="col-sm-2">Bus Number</th>
                    <th class="col-sm-2">Driver Name</th>
                    <th class="col-sm-2">Supervisor Name</th>
                    <th class="col-sm-1">Period</th>
                    <th class="col-sm-2">Walk Line</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Bus name</td>
                <td>أ ب ك 120</td>
                <td>Mohamed Maher</td>
                <td>Mohamed Maher</td>
                <td>AM</td>
                <td>المنيا</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Bus name</td>
                <td>أ ب ك 120</td>
                <td>Mohamed Maher</td>
                <td>Mohamed Maher</td>
                <td>AM</td>
                <td>المنيا</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Bus name</td>
                <td>أ ب ك 120</td>
                <td>Mohamed Maher</td>
                <td>Mohamed Maher</td>
                <td>AM</td>
                <td>المنيا</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>