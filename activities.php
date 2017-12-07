<?php
    session_start();
    $pageTitle = 'Activities';
    include 'deploy.php';
    include 'navbar.php';

//if($_SESSION['userJobTitle'] == 'Teacher')
//{
//    header('Location: access-denied.php?page='.$pageTitle.'');
//}
$searchCondition = '';

if(isset($_POST['status']))
{
    $signPosition = strpos($_POST['status'],'=');
    $activityID = substr($_POST['status'],0,$signPosition);
    $statusChosen = substr($_POST['status'],$signPosition+1);
    $status = '';

    if($statusChosen == 'completed') $status = '1';
    else $status = '0';

    $changeActivityStatus = $connect->prepare("UPDATE activities SET activity_status = '$status' WHERE activity_id= '$activityID'");
    $changeActivityStatus->execute();

}
$gettingActivitiesStatement = " SELECT * FROM activities";

    if(isset($_POST['searchCondition']))
    {
        $searchCondition = $_POST['searchCondition'];
        $gettingActivitiesStatement = " SELECT * FROM activities WHERE activity_name LIKE '%".$_POST['searchCondition']."%'";
    }

?>
<script>
    function reload(){
        document.getElementById("form").submit();
    }

</script>
    <form method="post" id="form">
<div class="activities" >
    <h2>Activities</h2>
    <div class="container-for-btn-group">
        <a href="add-activities.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Activities
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Activity name..." name="searchCondition" value="<?php echo $searchCondition;?>" />
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
            $gettingActivities = $connect->prepare($gettingActivitiesStatement);
            $gettingActivities->execute();
            $activityIncrementer=1;
            while ($row = $gettingActivities->fetch(PDO::FETCH_ASSOC)) {
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
                ';
                if($row['activity_status'] == '1') echo'Completed';
                else if($row['activity_status'] == '0') echo'Canceled';
                else echo'   <select class="tableStatus" name="status" onchange="reload()">
                        <option disabled selected value="">select status</option>
                        <option value="'.$row['activity_id'].'=completed">Completed</option>
                        <option value="'.$row['activity_id'].'=canceled">Canceled</option>
                    </select>
                ';
                echo'</td>
                <td>'.$row['activity_date'].'</td>
                <td>'.$row['activity_time'].'</td>
                <td><a href="view-activity.php?act_id='.$row['activity_id'].'" class="btn btn-primary btn-sm">View</a></td>
            </tr>';
            }
            ?>

        </table>
    </div>
</div>
    </form>
<?php
    include $templates . 'footer.php';
?>