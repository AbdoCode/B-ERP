<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="rec-income">
    <h2>reception income</h2>
    <div class="container-for-btn-group">
        <a href="add-rec-income.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Income
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-2">Name</th>
                <th class="col-sm-1">Phone</th>
                <th class="col-sm-1">Amount</th>
                <th class="col-sm-2">For</th>
                <th class="col-sm-2">Reception Name</th>
                <th class="col-sm-2">Date</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>800 LE</td>
                <td>Bus Fees</td>
                <td>Heba Mohamed Ali</td>
                <td>17 Sep 2017</td>
                <td><a href="view-rec-income.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>800 LE</td>
                <td>Bus Fees</td>
                <td>Heba Mohamed Ali</td>
                <td>17 Sep 2017</td>
                <td><a href="view-rec-income.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>800 LE</td>
                <td>Bus Fees</td>
                <td>Heba Mohamed Ali</td>
                <td>17 Sep 2017</td>
                <td><a href="view-rec-income.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>