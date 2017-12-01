<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="view-time-table">
    <h2>View Time Table</h2>
    <div class="text-center">
        <label>Date: 19 Sep 2014</label>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-4">Time From</th>
                <th class="col-sm-4">Time To</th>
                <th class="col-sm-4">Activities</th>
            </tr>
            <tr>
                <td>9:00 AM</td>
                <td>10:00 AM</td>
                <td>Check in for all kids</td>
            </tr>
            <tr>
                <td>10:00 AM</td>
                <td>11:00 AM</td>
                <td>Check in for all kids</td>
            </tr>
            <tr>
                <td>11:00 AM</td>
                <td>12:00 AM</td>
                <td>Check in for all kids</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>