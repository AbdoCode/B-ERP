<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
    include 'pics_view.php';
?>
<div class="view-event">
    <h2 class="text-center">Event Name</h2>
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
    <div class="contRow">
        <label class="col-sm-2 col-xs-4">Photos:</label>
        <div class="col-sm-4 col-xs-8">
            <button class="col-xs- btn btn-sm btn-primary viewEventPhotos">
                <span class="glyphicon glyphicon-picture"></span> View
            </button>
            <div class="col-xs-7">
                <div style="position: relative" class="uploads">
                    <label for="photos_upload" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-upload"></span> Upload
                    </label>
                    <input type="file" id="photos_upload" class="btn btn-primary" accept="image/*" multiple>
                </div>
            </div>
        </div>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-4">Videos:</label>
        <div class="col-sm-4 col-xs-8">
            <button class="col-xs- btn btn-sm btn-primary viewEventVideos">
                <span class="glyphicon glyphicon-picture"></span> View
            </button>
            <div class="col-xs-7">
                <div style="position: relative" class="uploads">
                    <label for="videos_upload" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-upload"></span> Upload
                    </label>
                    <input type="file" id="videos_upload" class="btn btn-primary" accept="video/*" multiple>
                </div>
            </div>
        </div>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-4">Files:</label>
        <div class="col-sm-4 col-xs-8">
            <form method="get" action="<?php ?>">
                <button type="submit" class="btn btn-sm btn-primary">
                    <span class="glyphicon glyphicon-download"></span> Download
                </button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-6">Objectives</th>
                <th class="col-sm-5">Activities</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Objective Details</td>
                <td>Activities Details</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Objective Details</td>
                <td>Activities Details</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Objective Details</td>
                <td>Activities Details</td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>