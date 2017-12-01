<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="view-zone-courses">
    <h2>view zone courses</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Date/Day..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="container-for-btn-group">
        <button class="btn btn-primary add-course-day">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Day
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-2">No. of attendance</th>
                    <th class="col-sm-2">Time From</th>
                    <th class="col-sm-2">Time To</th>
                    <th class="col-sm-2">Duration</th>
                    <th class="col-sm-1">Day</th>
                    <th class="col-sm-2">Date</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>10</td>
                <td>10:00 AM</td>
                <td>11:30 AM</td>
                <td>1hr 30min</td>
                <td>Thursday</td>
                <td>17 Aug 2017</td>
            </tr>
            <tr>
                <td>1</td>
                <td>10</td>
                <td>10:00 AM</td>
                <td>11:30 AM</td>
                <td>1hr 30min</td>
                <td>Thursday</td>
                <td>17 Aug 2017</td>
            </tr>
            <tr>
                <td>1</td>
                <td>10</td>
                <td>10:00 AM</td>
                <td>11:30 AM</td>
                <td>1hr 30min</td>
                <td>Thursday</td>
                <td>17 Aug 2017</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>