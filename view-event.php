<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="view-event">
    <h1 class="text-center">Event Name</h1>
    <div class="contRow">
        <label class="col-sm-2 col-xs-1">Kids Number:</label>
        <p class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-3">22</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-1">Segment:</label>
        <p class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-3"></p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-1">Location:</label>
        <p class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-3">Giza</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-4">Date from:</label>
        <p class="col-sm-4 col-xs-8">11 Sep 2017</p>
        <div class="clearfix visible-xs"></div>
        <label class="col-sm-2 col-xs-4">Date to:</label>
        <p class="col-sm-4 col-xs-8">13 Sep 2017</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-4">Time from:</label>
        <p class="col-sm-4 col-xs-8">09:00 AM</p>
        <div class="clearfix visible-xs"></div>
        <label class="col-sm-2 col-xs-4">Time to:</label>
        <p class="col-sm-4 col-xs-8">01:00 PM</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-1">Status:</label>
        <p class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-3">Completed</p>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Objectives</th>
                <th class="col-sm-3">Activities</th>
                <th class="col-sm-2">Photos</th>
                <th class="col-sm-2">Files</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Objective Details</td>
                <td>Activities Details</td>
                <td>File.png</td>
                <td>File.Pdf</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Objective Details</td>
                <td>Activities Details</td>
                <td>File.png</td>
                <td>File.Pdf</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Objective Details</td>
                <td>Activities Details</td>
                <td>File.png</td>
                <td>File.Pdf</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>