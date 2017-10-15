<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="event-request">
    <h2>Event Requests</h2>
    <div class="container-for-btn-group">
        <div class="btn-group">
            <a href="add-event.php" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Request New Event
            </a>
        </div>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Event name/Status..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-5">Event Name</th>
                <th class="col-sm-3">Requested Date</th>
                <th class="col-sm-2">Status</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Funday</td>
                <td>17 Aug 2017</td>
                <td>Confirmed</td>
                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Funday</td>
                <td>17 Aug 2017</td>
                <td>Confirmed</td>
                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>