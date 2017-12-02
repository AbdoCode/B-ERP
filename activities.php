<?php
    session_start();
    $pageTitle = 'Activities';
    include 'deploy.php';
    include 'navbar.php';

//if($_SESSION['userJobTitle'] == 'Teacher')
//{
//    header('Location: access-denied.php?page='.$pageTitle.'');
//}


?>
<div class="activities">
    <h2>Activities</h2>
    <div class="container-for-btn-group">
        <a href="add-activities.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Activities
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Activity name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-1">Class</th>
                <th class="col-sm-2">Status</th>
                <th class="col-sm-2">Date</th>
                <th class="col-sm-2">Time</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <?php
            $stmt = $connect->prepare("SELECT * FROM activities");
            $stmt->execute();
            $activityIncrementer=1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>
                <td>'.$activityIncrementer++.'</td>
                <td>'.$row['activity_name'].'</td>
                <td>';

                $getActivityClasses = $connect->prepare("SELECT classes.class_name FROM classes
JOIN class_activities on classes.class_id = class_activities.class_id
WHERE class_activities.activity_id = '".$row['activity_id']."'");
                $getActivityClasses->execute();
                while ($row2 = $getActivityClasses->fetch(PDO::FETCH_ASSOC)) {
                    echo $row2['class_name'] . ',';
                }
                echo'
                </td>
                <td>
                    <select class="tableStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                </td>
                <td>'.$row['activity_date'].'</td>
                <td>'.$row['activity_time'].'</td>
                <td><a href="view-activity.php?act_id='.$row['activity_id'].'" class="btn btn-primary btn-sm">View</a></td>
            </tr>';
            }
            ?>

        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>