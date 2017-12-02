<?php
    session_start();
    $pageTitle = 'Add New Activity';
    include 'deploy.php';
    include 'navbar.php';

if(isset($_POST['add_activity']))
{
    $activityName = $_POST['activity_name'];
    $activityDate = $_POST['activity_date'];
    $activityTime = $_POST['activity_time'];
    $activityClasses = $_POST['activity_classes'];
    //$activityPics = $_POST['activity_photos'];
    $activityDetails = $_POST['activity_details'];
    $activityDateAdded = date("Y-m-d");
    $activityAddedBy = $_SESSION['userID'];

    $addNewActivity = "INSERT INTO activities (activity_name, activity_date, activity_time, activity_date_added, activity_details, added_by)
 VALUES ('$activityName','$activityDate','$activityTime','$activityDateAdded','$activityDetails','$activityAddedBy')";
    $connect->exec($addNewActivity);

    $thisActivityID = $connect->lastInsertId();

    foreach($activityClasses as $activityClass)
    {
        $stmt = $connect->prepare("SELECT class_id FROM classes where class_name = '$activityClass'");
        $stmt->execute();
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $classID = $row['class_id'];
            $addNewActivityForThisClass="INSERT INTO class_activities (activity_id,  class_id) VALUES ('$thisActivityID','$classID')";
            $connect->exec($addNewActivityForThisClass);
        }
    }
    header("Refresh:0.1; url=activities.php");
}


?>
<div class="add-activities add-forms">
    <h2>Add Activity</h2>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label for="name" class="col-xs-1 control-label">Name</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="name" placeholder="Activity name" name="activity_name">
            </div>
        </div>
        <div class="form-group">
            <label for="date" class="col-xs-1 control-label">Date</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="date" class="form-control" id="date" name="activity_date">
            </div>
        </div>
        <div class="form-group">
            <label for="time" class="col-xs-1 control-label">Time</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="time" class="form-control" id="time" name="activity_time">
            </div>
        </div>
        <div class="form-group">
            <label for="class" class="col-xs-1 control-label">Class</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="class" multiple name="activity_classes[]">

                    <?php
                    $stmt = $connect->prepare("SELECT class_name from classes");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="'.$row['class_name'].'">'.$row['class_name'].'</option>';
                    }
                    ?>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-1 control-label">Photos</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <div style="position: relative" class="uploads">
                    <label for="photos_upload" class="btn btn-primary">
                        <span class="glyphicon glyphicon-upload"></span> Upload Photos
                    </label>
                    <input type="file" id="photos_upload" class="btn btn-primary" accept="image/*" multiple name="activity_photos[]">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="details" class="col-xs-1 control-label">Details</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <textarea class="form-control" id="details" placeholder="Details" name="activity_details"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block" name="add_activity">Add</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>