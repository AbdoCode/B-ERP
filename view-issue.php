<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';

$issueName = '';
$issueType = '';
$issueDate = '';
$issueTime = '';
$issueStatus = '';
$issueForwardedFrom = '';
$issueForwardedTo = '';
$issueEscalatedTo = '';
$issueSolvedBy = '';
$issueSolvedWithin = '';
$issueDetails = '';

if(isset($_GET['type']) && isset($_GET['issue_id']))
{
    $issueId = $_GET['issue_id'];
    $issueFor = $_GET['type'];

    if($_GET['type'] == 'kid')
        $gettingIssuesStatement ="SELECT * FROM kid_issues WHERE issue_id = '".$issueId."'";
    else
        $gettingIssuesStatement ="SELECT * FROM admin_issues WHERE issue_id = '".$issueId."'";

    $getIssueDetails = $connect->prepare($gettingIssuesStatement);
    $getIssueDetails -> execute();
    if ($row = $getIssueDetails->fetch(PDO::FETCH_ASSOC)) {

        $issueName = $row['issue_title'];
        $issueType = $row['issue_type'];
        $issueDate = $row['date_added'];
        $issueTime = $row['time_added'];
        $issueStatus = $row['status'];
        $issueSolvedWithin = $row['solved_at'];

        if($_GET['type'] == 'kid')
            $getUsersForwardedFrom = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN sys_users ON kid_issues.forwarded_from = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.issue_id= '".$issueId."'");
        else
            $getUsersForwardedFrom = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues
JOIN sys_users ON admin_issues.forwarded_from = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues.issue_id = '".$issueId."'");

        $getUsersForwardedFrom->execute();
        if ($row2 = $getUsersForwardedFrom->fetch(PDO::FETCH_ASSOC)) {
            $issueForwardedFrom= '<b>'.$row2['job_title'] . '</b> ' . $row2['username'];
        }

        if($_GET['type'] == 'kid')
            $getUsersForwardedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues_forwarding
JOIN sys_users ON kid_issues_forwarding.forwarded_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues_forwarding.kid_issue_id = '".$issueId."'");
        else
            $getUsersForwardedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues_forwarding
JOIN sys_users ON admin_issues_forwarding.forwarded_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues_forwarding.admin_issue_id = '".$issueId."'");

        $getUsersForwardedTo->execute();
        while ($row3 = $getUsersForwardedTo->fetch(PDO::FETCH_ASSOC)) {
            $issueForwardedTo .= '<b>'.$row3['job_title'] . '</b> ' . $row3['username'] . ', ';
        }

        if($_GET['type'] == 'kid')
            $getUsersEscalatedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN kid_issues_escalations ON kid_issues.issue_id = kid_issues_escalations.kid_issue_id
JOIN sys_users ON kid_issues_escalations.escalated_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.issue_id = '".$issueId."'");
        else
            $getUsersEscalatedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues
JOIN admin_issues_escalations ON admin_issues.issue_id = admin_issues_escalations.admin_issue_id
JOIN sys_users ON admin_issues_escalations.escalated_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues.issue_id = '".$issueId."'");

        $getUsersEscalatedTo->execute();
        $escalated = false;
        while ($row4 = $getUsersEscalatedTo->fetch(PDO::FETCH_ASSOC)) {
            $issueEscalatedTo .=  '<b>'.$row4['job_title'] . '</b> ' . $row4['username'] . ', ';
            $escalated = true;
        }
        if(!$escalated) $issueEscalatedTo = 'Not Escalated Yet';

        if($_GET['type'] == 'kid')
            $getUsersSolvedBy = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN sys_users ON kid_issues.solved_by = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.issue_id = '".$issueId."'");
        else
            $getUsersSolvedBy = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues
JOIN sys_users ON admin_issues.solved_by = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues.issue_id = '".$issueId."'");
        $getUsersSolvedBy->execute();
        if($row5 = $getUsersSolvedBy->fetch(PDO::FETCH_ASSOC))
            $issueSolvedBy = '<b>'.$row5['job_title'] . '</b> ' . $row5['username'];
        else
            $issueSolvedBy = 'Not Solved Yet';

        $issueSolvedWithin = $row['solved_at'];;
        $issueDetails = $row['issue_details'];;

    }
}
else header("Location: issues.php?type=kid");

if(isset($_POST['solve_issue']))
{

    $solutionDate = date("Y-m-d");
    $issueId = $_GET['issue_id'];
    $userID = $_SESSION['userID'];
    $issueFor = $_GET['type'];

    $solutionDuration = substr($solutionDate,8) - substr($issueDate,8);


    if($issueFor == 'kid')
    {
        $solveIssue = $connect->prepare("UPDATE kid_issues SET solved_by = '$userID',status = 1 WHERE issue_id= '$issueId'");
        $solveIssue->execute();
        header("Location: view-issue.php?type=kid&issue_id=$issueId");
    }
    else if($issueFor == 'administration')
    {
        $solveIssue = $connect->prepare("UPDATE admin_issues SET solved_by = '$userID',status = 1 WHERE issue_id= '$issueId'");
        $solveIssue->execute();
        header("Location: view-issue.php?type=administration&issue_id=$issueId");
    }
}

if(isset($_POST['escalate_issue']) && isset($_POST['employee_names']))
{
    $employeeNames = $_POST['employee_names'];
    $EscalationDate = date("Y-m-d");
    $issueId = $_GET['issue_id'];

    foreach($employeeNames as $employeeName)
    {
        $stmt = $connect->prepare("SELECT user_id FROM sys_users where username = '$employeeName'");
        $stmt->execute();
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $employeeID = $row['user_id'];

            if($_GET['type'] == 'kid') {
                $addEscalatedIssue = "INSERT INTO kid_issues_escalations (kid_issue_id, escalated_to, date_escalated ) VALUES ('$issueId','$employeeID','$EscalationDate')";
                $connect->exec($addEscalatedIssue);
                header("Location: view-issue.php?type=kid&issue_id=$issueId");

            }
            else if($_GET['type'] == 'administration') {
                $addEscalatedIssue = "INSERT INTO admin_issues_escalations (admin_issue_id, escalated_to, date_escalated) VALUES ('$issueId','$employeeID','$EscalationDate')";
                $connect->exec($addEscalatedIssue);
                header("Location: view-issue.php?type=administration&issue_id=$issueId");
            }
        }
    }
}

echo'
<script>
        function reload(){
            document.getElementById("view-issue-form").submit();
        }
    </script>

<div class="view-issue">
    <h2 class="text-center">'.$issueName.'</h2>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Type:</label>
            <p class="col-sm-11 col-sm-push-0 col-xs-8 col-xs-push-2">';

    if($issueType == '0')
        echo'General';
    else if($issueType == '1' && $_GET['type'] == 'kid')
        echo'Safety';
    else
        echo'Urgent';
echo'
</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Added Date:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueDate.'</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Added Time:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueTime.'</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Forward From:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueForwardedFrom.'</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Forward To:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueForwardedTo.'</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Escalation level:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueEscalatedTo.'</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Solution Acting:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueSolvedBy.'</p>
        </div>
        </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Solution time:</label>
            <p class="col-sm-11 col-sm-push-0 col-xs-8 col-xs-push-2">'.$issueSolvedWithin.' Days</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 ccl-xs-12">Details:</label>
            <p class="col-sm-11 col-xs-12">'.$issueDetails.'</p>
        </div>
    </div>
    ';

if($issueStatus == '0') {
    echo '
    <form  class="form-horizontal" method="post" id="view-issue-form" >
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block" name="solve_issue">Solve</button>
            </div>
        </div>
        <div class="form-group col-sm-5">
            <label for="jobTitle" class="col-sm-4 control-label">Job Title</label>
            <div class="col-sm-8">
                <select class="form-control" id="jobTitle" name="job_title" onchange="reload()">
                    <option></option>';
    $stmt = $connect->prepare("SELECT job_title FROM job_titles");
    $stmt->execute();

    while ($row6 = $stmt->fetch(PDO::FETCH_ASSOC))
        echo '<option value="' . $row6['job_title'] . '">' . $row6['job_title'] . '</option>';

    echo '</select>
            </div>
        </div>
        <div class="form-group col-sm-5 col-sm-push-2">
            <label for="employee" class="col-sm-4 control-label">To</label>
            <div class="col-sm-8">
                <select class="form-control" id="employee" multiple name="employee_names[]">';

    if (isset($_POST['job_title']) == true) {
        $employeeJobTitle = $_POST['job_title'];
        $stmt = $connect->prepare("SELECT sys_users.username FROM sys_users
        JOIN staff on sys_users.staff_id = staff.staff_id
        JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
        WHERE job_titles.job_title = '" . $employeeJobTitle . "' ");
        $stmt->execute();
        while ($row7 = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row7['username'] . '">' . $row7['username'] . '</option>';
        }
    }
    echo '</select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4 col-xs-12">
                <button type="submit" class="btn btn-warning btn-block" name="escalate_issue">Escalate</button>
            </div>
        </div>
        </form>';
}

        echo'</div>';

    include $templates . 'footer.php';
?>