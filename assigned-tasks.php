<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';

$gettingTasksStatement = "SELECT * FROM assigned_tasks ORDER BY assigned_task_id DESC";;
$searchCondition = '';

if(isset($_POST['searchCondition'])) {
    $searchCondition = $_POST['searchCondition'];
    $gettingTasksStatement = "SELECT * FROM assigned_tasks WHERE task_title LIKE '%" . $_POST['searchCondition'] . "%' OR date_assigned Like '%" . $_POST['searchCondition'] . "%' ORDER BY assigned_task_id DESC";
}
?>
<form method="post">
<div class="assigned-tasks">
    <h2>Assigned Tasks</h2>
    <div class="container-for-btn-group">
        <a href="assign-new-task.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Assign New Task
        </a>
    </div>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Task title/Assigned Date..." name="searchCondition" value="<?php echo $searchCondition;?>" />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Task title</th>
                <th class="col-sm-3">Assigned date</th>
                <th class="col-sm-3">Assigned from</th>
                <th class="col-sm-1">Details</th>
            </tr>
<?php

            $getAssignedTasks = $connect->prepare($gettingTasksStatement);
            $getAssignedTasks -> execute();
            $tasksIncrementer = 1;
            while ($row = $getAssignedTasks->fetch(PDO::FETCH_ASSOC)) {

                echo'
            <tr>
                <td>'.$tasksIncrementer++.'</td>
                <td>'.$row['task_title'].'</td>
                <td>'.$row['date_assigned'].'</td>
                <td>';

                $getUsersAssignedFrom = $connect->prepare("SELECT job_titles.job_title,staff.name
FROM assigned_tasks
JOIN sys_users ON assigned_tasks.assigned_from = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE assigned_tasks.assigned_task_id = '".$row['assigned_task_id']."'");
                $getUsersAssignedFrom->execute();
                while ($row2 = $getUsersAssignedFrom->fetch(PDO::FETCH_ASSOC)) {
                    echo '<b>'.$row2['job_title'] . '</b> ' . $row2['name'] . '<br><br>';
                }

                echo'
                </td>
                <td><a href="view-assigned-task.php?task_id='.$row['assigned_task_id'].'" class="btn btn-primary btn-sm">View</a></td>
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