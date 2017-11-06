<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="gasoline-consumption">
    <h2>gasoline consumption</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="container-for-btn-group">
        <button class="btn btn-primary add-new-operation">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Operation
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-1">Number of liters</th>
                    <th class="col-sm-1">Price</th>
                    <th class="col-sm-2">Gasoline station name</th>
                    <th class="col-sm-1">Odometer</th>
                    <th class="col-sm-1">Car type</th>
                    <th class="col-sm-1">Car number</th>
                    <th class="col-sm-2">Notes</th>
                    <th class="col-sm-2">Date</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>20 Liter</td>
                <td>100 LE</td>
                <td>Mobil</td>
                <td>172</td>
                <td>Toyota</td>
                <td>AUR / 522</td>
                <td>none</td>
                <td>15 Sep 2017</td>
            </tr>
            <tr>
                <td>1</td>
                <td>20 Liter</td>
                <td>100 LE</td>
                <td>Mobil</td>
                <td>172</td>
                <td>Toyota</td>
                <td>AUR / 522</td>
                <td>none</td>
                <td>15 Sep 2017</td>
            </tr>
            <tr>
                <td>1</td>
                <td>20 Liter</td>
                <td>100 LE</td>
                <td>Mobil</td>
                <td>172</td>
                <td>Toyota</td>
                <td>AUR / 522</td>
                <td>none</td>
                <td>15 Sep 2017</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>