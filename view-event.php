<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="view-event">
    <h1 class="text-center">Event Name</h1>
    <div class="contRow">
        <label class="col-xs-2">Kids Number:</label>
        <p class="col-xs-10">22</p>
    </div>
    <div class="contRow">
        <label class="col-xs-2">Segment:</label>
        <p class="col-xs-10"></p>
    </div>
    <div class="contRow">
        <label class="col-xs-2">Location:</label>
        <p class="col-xs-10">Giza</p>
    </div>
    <div class="contRow">
        <label class="col-xs-2">Date from:</label>
        <p class="col-xs-4">11 Sep 2017</p>
        <label class="col-xs-2">Date to:</label>
        <p class="col-xs-4">13 Sep 2017</p>
    </div>
    <div class="contRow">
        <label class="col-xs-2">Status:</label>
        <p class="col-xs-10">Completed</p>
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