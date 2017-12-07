
<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';

    $taskName = '';
    $employeeJobTitle = '';
    $employeeName = '';

    if(isset($_POST['task_name']) == true)
    {
        $taskName = $_POST['task_name'];
    }
    if(isset($_POST['forward'])==true && isset($_POST['employee_name']) == true)
    {
        $employeeJobTitle = $_POST['job_title'];
        $employeeName = $_POST['employee_name'];
        $employeeID= '';
        $addedBy = $_SESSION['userID'];
        $dateTaskAdded = date("Y-m-d");

        $addDailyTask = "INSERT INTO daily_tasks (task_content, date_added, added_by)
    VALUES ('$taskName', '$dateTaskAdded', '$addedBy')";
        $connect->exec($addDailyTask);

        $thisInsertedID = $connect->lastInsertId();

        foreach($employeeName as $employeeNames)
        {
            $stmt = $connect->prepare("SELECT user_id FROM sys_users where username = '$employeeNames'");
            $stmt->execute();
            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $employeeID = $row['user_id'];
                $addDailyUserTask="INSERT INTO user_daily_tasks (task_owner, daily_task_id) VALUES ('$employeeID','$thisInsertedID')";
                $connect->exec($addDailyUserTask);
            }
        }

        header("Refresh:0.1; url=daily-tasks.php");
    }

?>
<div class="add-daily-tasks">
    <h2>Add new daily task</h2>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label for="name" class="control-label col-sm-1">Name</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" placeholder="Type Task Name" id="name" name="task_name" value="<?php echo $taskName ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="time" class="control-label col-sm-1">Time</label>
            <div class="col-sm-11">
                <input type="time" class="form-control" placeholder="Type Task Time" id="time" name="task_time" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="jobTitle" class="control-label col-sm-1">Job Title</label>
            <div class="col-sm-9">
                    <select class="form-control" id="jobTitle" name="job_title">
                        <option></option>
                        <?php
                    $stmt = $connect->prepare("SELECT job_title FROM job_titles");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo'<option value="'.$row['job_title'].'">'.$row['job_title'].'</option>';
                        /*echo '<option ';
                        if($employeeJobTitle == 'Teacher' ) echo 'selected';
                        echo'>Teacher</option>';*/
                    }
                    ?>
                </select>
            </div>

            <div class="col-sm-2">
                <button class="btn btn-success btn-block" name="getEmployees">Get Employees</button>
                </div>

        </div>
        <div class="form-group">
            <label for="employee" class="control-label col-sm-1">To</label>
            <div class="col-sm-11">
                <select class="form-control" id="employee" multiple name="employee_name[]">

                    <?php
                    if(isset($_POST['getEmployees']) == true){
                        $employeeJobTitle = $_POST['job_title'];
                            $stmt = $connect->prepare("SELECT sys_users.username FROM sys_users
JOIN staff on sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE job_titles.job_title = '".$employeeJobTitle."' ");
                            $stmt->execute();
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo'<option value="'.$row['username'].'">'.$row['username'].'</option>';
                            }
                        }
                    ?>

                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button class="btn btn-success btn-block" name="forward">Forward</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>