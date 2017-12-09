<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';

$gettingIssuesStatement = '';
$searchCondition = '';

if($_GET['type'] == 'kid' && isset($_POST['searchCondition'])) {
    $searchCondition = $_POST['searchCondition'];
    $gettingIssuesStatement = "SELECT * FROM kid_issues WHERE issue_title LIKE '%" . $_POST['searchCondition'] . "%'";
}else if($_GET['type'] == 'administration' && isset($_POST['searchCondition'])) {
    $searchCondition = $_POST['searchCondition'];
    $gettingIssuesStatement = "SELECT * FROM admin_issues WHERE issue_title LIKE '%" . $_POST['searchCondition'] . "%'";
}else if($_GET['type'] == 'kid')
    $gettingIssuesStatement ="SELECT * FROM kid_issues";
else
    $gettingIssuesStatement ="SELECT * FROM admin_issues";

?>
<form method="post">
<div class="issues">
    <h2><?php echo $_GET['type']; ?>s Issues</h2>
    <div class="container-for-btn-group">
        <a href="add-<?php echo $_GET['type']; ?>-issue.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign"></span> Add Issue for <?php echo $_GET['type']; ?>
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Issue name..." name="searchCondition" value="<?php echo $searchCondition;?>" />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-2">Title</th>
                    <th class="col-sm-1">Type</th>
                    <th class="col-sm-1">Status</th>
                    <th class="col-sm-1">Added Date</th>
                    <th class="col-sm-1">Added Time</th>
                    <th class="col-sm-1">Forward From</th>
                    <th class="col-sm-1">Forward To</th>
                    <th class="col-sm-1">Escalation level</th>
                    <th class="col-sm-1">Solution Acting</th>
                    <th class="col-sm-1">Details</th>
                </tr>
            </thead>
            <?php

            $getAllIssues = $connect->prepare($gettingIssuesStatement);
            $getAllIssues -> execute();
            $issuesIncrementer = 1;
            while ($row = $getAllIssues->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>
                <td>'.$issuesIncrementer++.'</td>
                <td><b>'.$row['issue_title'].'</b></td>';

                if($row['issue_type'] == '0')
                    echo'<td>General</td>';
                else if($row['issue_type'] == '1' && $_GET['type'] == 'kid')
                    echo'<td><b>Safety</b></td>';
                else
                    echo'<td><b>Urgent</b></td>';

                if($row['status'] == '0')
                    echo'<td>Not Solved</td>';
                else
                    echo'<td>Solved</td>';

                echo'
                <td>'.$row['date_added'].'</td>
                <td>'.$row['time_added'].'</td>
                <td>';

                if($_GET['type'] == 'kid')
                    $getUsersForwardedFrom = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN sys_users ON kid_issues.forwarded_from = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.issue_id= '".$row['issue_id']."'");
                else
                    $getUsersForwardedFrom = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues
JOIN sys_users ON admin_issues.forwarded_from = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues.issue_id = '".$row['issue_id']."'");

                $getUsersForwardedFrom->execute();
                while ($row3 = $getUsersForwardedFrom->fetch(PDO::FETCH_ASSOC)) {
                    echo '<b>'.$row3['job_title'] . '</b> ' . $row3['username'] . '<br><br>';
                }

                echo'
                </td>
                <td>';

                if($_GET['type'] == 'kid')
                    $getUsersForwardedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues_forwarding
JOIN sys_users ON kid_issues_forwarding.forwarded_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues_forwarding.kid_issue_id = '".$row['issue_id']."'");
                else
                    $getUsersForwardedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues_forwarding
JOIN sys_users ON admin_issues_forwarding.forwarded_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues_forwarding.admin_issue_id = '".$row['issue_id']."'");

                $getUsersForwardedTo->execute();
                while ($row2 = $getUsersForwardedTo->fetch(PDO::FETCH_ASSOC)) {
                    echo '<b>'.$row2['job_title'] . '</b> ' . $row2['username'] . '<br><br>';
                }
                echo'
                </td>
                <td>
                ';

                if($_GET['type'] == 'kid')
                    $getUsersEscalatedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN kid_issues_escalations ON kid_issues.issue_id = kid_issues_escalations.kid_issue_id
JOIN sys_users ON kid_issues_escalations.escalated_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.issue_id = '".$row['issue_id']."'");
                else
                    $getUsersEscalatedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues
JOIN admin_issues_escalations ON admin_issues.issue_id = admin_issues_escalations.admin_issue_id
JOIN sys_users ON admin_issues_escalations.escalated_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues.issue_id = '".$row['issue_id']."'");

                $getUsersEscalatedTo->execute();
                $escalated = false;
                while ($row4 = $getUsersEscalatedTo->fetch(PDO::FETCH_ASSOC)) {
                    echo '<b>'.$row4['job_title'] . '</b> ' . $row4['username'] . '<br><br>';
                    $escalated = true;
                }
                if(!$escalated) echo'Not Escalated Yet';
                echo'
                </td>
                <td>';

                if($_GET['type'] == 'kid')
                    $getUsersSolvedBy = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN sys_users ON kid_issues.solved_by = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.issue_id = '".$row['issue_id']."'");
                else
                    $getUsersSolvedBy = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM admin_issues
JOIN sys_users ON admin_issues.solved_by = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE admin_issues.issue_id = '".$row['issue_id']."'");
                $getUsersSolvedBy->execute();
                if($row5 = $getUsersSolvedBy->fetch(PDO::FETCH_ASSOC))
                    echo '<b>'.$row5['job_title'] . '</b> ' . $row5['username'] . '<br><br>';
                else
                    echo'Not Solved Yet';

                echo'
                </td>
                <td><a href="view-issue.php?type='.$_GET['type'].'&issue_id='.$row['issue_id'].'" class="btn btn-primary btn-sm">View</a></td>
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