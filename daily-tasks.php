<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
    include 'daily-functions.php';

if(isset($_POST['save']) && isset($_POST['status']))
{
        $status = $_POST['status'];
        $taskID = $_POST['save'];
        $taskProgressExecutionDate = date("Y-m-d");
        $progressRate = '';

        if($status == 'completed') {$progressRate = '100 %'; $status = '2';}
        else if($status == 'pending') {$progressRate = '0 %'; $status = '0';}
        else {$progressRate = $status; $status = '1';}

        $gettingUserDailyTaskId = $connect->prepare("SELECT user_daily_tasks.user_daily_tasks_id FROM user_daily_tasks
JOIN daily_tasks on user_daily_tasks.daily_task_id = daily_tasks.daily_task_id
WHERE user_daily_tasks.task_owner = '".$_SESSION['userID']."'
AND user_daily_tasks.daily_task_id = '".$taskID."' ");

        $gettingUserDailyTaskId->execute();
        if($row = $gettingUserDailyTaskId->fetch(PDO::FETCH_ASSOC)) {
            $userDailyTaskId = $row['user_daily_tasks_id'];
            $addTaskProgressRate = "INSERT INTO daily_tasks_progress(status, progress_rate, execution_date, user_daily_tasks_id)
VALUES ('$status', '$progressRate', '$taskProgressExecutionDate', '$userDailyTaskId')";
            $connect->exec($addTaskProgressRate);
        }
}

?>

<form method="POST">
    <div class="daily-tasks">
    <h2>Daily Tasks</h2>
<?php

if($jobTitle != 'Customer Care' && $jobTitle != 'Teacher')
    echo'<div class="container-for-btn-group">
        <a href="add-daily-tasks.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Daily Task
        </a>
    </div>';
?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Tasks</th>
                <th class="col-sm-4">Status</th>
                <th class="col-sm-2">Time</th>
                <th class="col-sm-2">Action</th>
            </tr>
            <?php
            $stmt = $connect->prepare("SELECT daily_tasks.task_content, daily_tasks.daily_task_id FROM daily_tasks
JOIN user_daily_tasks on daily_tasks.daily_task_id = user_daily_tasks.daily_task_id
where user_daily_tasks.task_owner = '".$_SESSION['userID']."'");
            $stmt->execute();
            $rowIncrementer=1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                echo'<tr>
                <td>'.$rowIncrementer++.'</td>
                <td>'.$row['task_content'].'</td>
                <td>';
                $gettingTaskProgress = $connect->prepare("SELECT daily_tasks_progress.status, daily_tasks_progress.progress_rate
FROM daily_tasks_progress
JOIN user_daily_tasks on daily_tasks_progress.user_daily_tasks_id = user_daily_tasks.user_daily_tasks_id
where user_daily_tasks.daily_task_id = '".$row['daily_task_id']."' AND user_daily_tasks.task_owner = '".$_SESSION['userID']."' ");
                $gettingTaskProgress->execute();
                $row2 = $gettingTaskProgress->fetch(PDO::FETCH_ASSOC);

                if($row2['status'] == '2') echo'Completed';
                else if($row2['status'] == '1') echo'In Progress until <b>'.$row2['progress_rate'].'</b> %';
                else echo'
                    <select class="dailyTasksStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In Progress</option>
                    </select>
                    <select class="inprogressStatus hide" name="status">
                        <option disabled selected value="">select percentage</option>
                        <option value="10 %">10%</option>
                        <option value="20 %">20%</option>
                        <option value="30 %">30%</option>
                        <option value="40 %">40%</option>
                        <option value="50 %">50%</option>
                        <option value="60 %">60%</option>
                        <option value="70 %">70%</option>
                        <option value="80 %">80%</option>
                        <option value="90 %">90%</option>
                    </select>
                ';
                echo'
                </td>
                <td>Time</td>
                <td>
                    <button class="btn btn-success btn-block" value="'.$row['daily_task_id'].'" name="save">Save</button>
                </td>
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