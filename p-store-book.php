<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="p-store-book">
    <h2>store book (kid name)</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Material Name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Material Name</th>
                <th class="col-sm-2">Material Number</th>
                <th class="col-sm-2">Last edit date</th>
                <th class="col-sm-3">Last edit by</th>
            </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Book</td>
                <td>5</td>
                <td>14 Sep 2017</td>
                <td>Hoda (Receptionist)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Book</td>
                <td>5</td>
                <td>14 Sep 2017</td>
                <td>Hoda (Receptionist)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Book</td>
                <td>5</td>
                <td>14 Sep 2017</td>
                <td>Hoda (Receptionist)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Book</td>
                <td>5</td>
                <td>14 Sep 2017</td>
                <td>Hoda (Receptionist)</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>