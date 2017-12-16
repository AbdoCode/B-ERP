<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';

$issueTitle = '';
$issueType = '';
$issueDetails = '';
$issueKidId = '';
$jobTitle = '';

if(isset($_POST['job_title']) && isset($_POST['issue_type']) != '') {
    $issueType = $_POST['issue_type'];
    $issueDetails = $_POST['issue_details'];
    $issueTitle = $_POST['issue_title'];
    $issueKidId = $_POST['kid_id'];
    $jobTitle = $_POST['job_title'];
}
if(isset($_POST['forward_kid_issue']) && isset($_POST['employee_names']) == true)
{
    $employeeNames = $_POST['employee_names'];
    $employeeID= '';
    $addedBy = $_SESSION['userID'];
    date_default_timezone_set("Africa/Cairo");
    $dateIssueAdded = date("Y-m-d");
    $timeIssueAdded = date("H:i");
    $issueStatus = '0';

    $addKidIssue = "INSERT INTO kid_issues(issue_title, issue_type, date_added, time_added, issue_details, status, kid_id, forwarded_from)
VALUES ('$issueTitle','$issueType','$dateIssueAdded','$timeIssueAdded','$issueDetails','$issueStatus','$issueKidId','$addedBy')";
    $connect->exec($addKidIssue);

    $thisInsertedID = $connect->lastInsertId();

    foreach($employeeNames as $employeeName)
    {
        $stmt = $connect->prepare("SELECT user_id FROM sys_users where staff_id = '$employeeName'");
        $stmt->execute();
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $employeeID = $row['user_id'];
            $addKidIssueForwarding="INSERT INTO kid_issues_forwarding(kid_issue_id, forwarded_to) VALUES ('$thisInsertedID','$employeeID')";
            $connect->exec($addKidIssueForwarding);
        }
    }
    header("Location: issues.php?type=kid");
}

?>

    <script>
        function reload(){
            document.getElementById("add-kid-issue").submit();
        }
    </script>

 <div class="add-issue-kid add-forms">
    <h2>add kid issue</h2>
    <form class="form-horizontal" method="post" id="add-kid-issue">
        <div class="form-group">
            <label for="title" class="col-xs-1 control-label">Title</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="title" placeholder="Issue Title" name="issue_title" value="<?php echo $issueTitle ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-xs-1 control-label">Name</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="name" name="kid_id">
                    <option disabled selected>Choose Kid name</option>
                    <?php
                    $stmt = $connect->prepare("SELECT kid_id,kid_name FROM kids");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo'<option value="'.$row['kid_id'].'" '; if( $issueKidId == $row['kid_id']) echo'selected'; echo'>'.$row['kid_name'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="issueType" class="col-xs-1 control-label">Issue Type</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="issueType" name="issue_type">
                    <option disabled selected>Select issue type</option>
                    <option value="0" <?php if($issueType == '0') echo'selected'; ?>>General</option>
                    <option value="1" <?php if($issueType == '1') echo'selected'; ?>>Safety</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="details" class="col-xs-1 control-label">Details</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <textarea class="form-control" id="details" placeholder="Details" rows="2" name="issue_details"><?php echo $issueDetails ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="jobTitle" class="col-xs-1 control-label">Job Title</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="jobTitle" name="job_title" onchange="reload()">
                    <option></option>
                    <?php
                    $stmt = $connect->prepare("SELECT job_title FROM job_titles");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo'<option value="'.$row['job_title'].'"'; if( $jobTitle == $row['job_title']) echo'selected'; echo'>'.$row['job_title'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="employee" class="col-xs-1 control-label">To</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="employee" multiple name="employee_names[]">
                    <?php
                    if(isset($_POST['job_title']) == true){
                        $employeeJobTitle = $_POST['job_title'];
                        $stmt = $connect->prepare("SELECT staff.staff_id,staff.name FROM sys_users
JOIN staff on sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE job_titles.job_title = '".$employeeJobTitle."' ");
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo'<option value="'.$row['staff_id'].'">'.$row['name'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block" name="forward_kid_issue">Forward</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>