<?php
    session_start();
    $pageTitle = 'View Activity';
    include 'deploy.php';
    include 'navbar.php';

$thisActivityId = $_GET['act_id'];

$activityName = '';
$activityDate = '';
$activityTime = '';
$activityClasses = '';
//$activityPics = $_POST['activity_photos'];
$activityDetails = '';
$activityDateAdded = '';
$activityAddedBy = '';
$activityStatus = '';

$stmt = $connect->prepare("SELECT * FROM activities WHERE activity_id = '$thisActivityId'");
$stmt->execute();
if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $activityName = $row['activity_name'];
    $activityDate = $row['activity_date'];
    $activityTime = $row['activity_time'];
    $activityDetails = $row['activity_details'];
    $activityDateAdded = $row['activity_details'];
    $activityAddedBy = $row['added_by'];
    $status = $row['activity_status'];

    if($status == '1') $activityStatus = 'Completed';
    else $activityStatus = 'Canceled';

    $getActivityClasses = $connect->prepare("SELECT classes.class_name FROM classes
JOIN class_activities on classes.class_id = class_activities.class_id
WHERE class_activities.activity_id = '".$thisActivityId."'");
    $getActivityClasses->execute();
    while ($row2 = $getActivityClasses->fetch(PDO::FETCH_ASSOC)) {
        $activityClasses .= $row2['class_name'] . ', ';
    }

}

echo'
<div class="view-activity">
    <h2 class="text-center">'.$activityName.'</h2>
    <div class="contRow">
        <label class="col-xs-1">Date:</label>
        <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">'.$activityDate.'</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Class:</label>
        <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">'.$activityClasses.'</p>
    </div>
    <div class="contRow">
        <label class="col-xs-1">Status:</label>
        <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">'.$activityStatus.'</p>
    </div>
    <div class="contRow">
        <label class="col-sm-1 col-xs-12">Details:</label>
        <p class="col-sm-11 col-xs-12">'.$activityDetails.'</p>
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
</div>';

include $templates . 'footer.php';
?>