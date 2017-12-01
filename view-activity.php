<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="view-activity">
    <h2 class="text-center">Activity Name</h2>
    <div class="contRow">
        <label class="col-xs-1">Date:</label>
        <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">17 Aug 2017</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Class:</label>
        <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">A</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Status:</label>
        <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">Completed</p>
    </div>
    <div class="contRow">
        <label class="col-sm-1 col-xs-12">Details:</label>
        <p class="col-sm-11 col-xs-12">This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity</p>
    </div>
    <div class="contRow">
        <label class="col-sm-1 control-label">Photos:</label>
        <div id="activity-photos" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="layout/images/100.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="layout/images/1.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="layout/images/10.jpg" class="img-responsive" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#activity-photos" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#activity-photos" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>