<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="events">
    <h2>Current Events</h2>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Event name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Completed</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Postponed</a></li>
                <li><a href="#">Cancelled</a></li>
                <li><a href="#">In progress</a></li>
            </ul>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-4">Name</th>
                    <th class="col-sm-1">Status</th>
                    <th class="col-sm-2">From</th>
                    <th class="col-sm-2">to</th>
                    <th class="col-sm-1">Details</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Photo Session</td>
                <td>Completed</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Photo Session</td>
                <td>Postponed</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Photo Session</td>
                <td>Pending</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Photo Session</td>
                <td>Completed</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Photo Session</td>
                <td>In progress</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Photo Session</td>
                <td>Completed</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Photo Session</td>
                <td>Cancelled</td>
                <td>10 Sep 2017</td>
                <td>11 Sep 2017</td>
                <td><a href="view-event.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>