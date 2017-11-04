<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div>
    <h2>daily communications</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Name/Mobile..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-2">Mobile Number</th>
                <th class="col-sm-3">Purpose</th>
                <th class="col-sm-2">Date</th>
                <th class="col-sm-1">Time</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>Any</td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>Any</td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher</td>
                <td>01064323735</td>
                <td>Any</td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>