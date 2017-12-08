<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';

$gettingIssues = '';

if($_GET['type'] == 'kid') {

    $gettingIssues ="SELECT * FROM kid_issues";
}
else if($_GET['type'] == 'administration') {

}

?>
<div class="issues">
    <h2><?php echo $_GET['type']; ?>s Issues</h2>
    <div class="container-for-btn-group">
        <a href="add-<?php echo $_GET['type']; ?>-issue.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign"></span> Add Issue for <?php echo $_GET['type']; ?>
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Issue name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
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

            $gettingAllIssues = $connect->prepare($gettingIssues);
            $gettingAllIssues -> execute();
            $issuesIncrementer = 1;
            while ($row = $gettingAllIssues->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>
                <td>'.$issuesIncrementer++.'</td>
                <td>'.$row['issue_title'].'</td>
                <td>'.$row['issue_type'].'</td>';

                if($row['status'] == '0')
                    echo'<td>Not Solved</td>';
                else
                    echo'<td>Solved</td>';

                echo'
                <td>'.$row['date_added'].'</td>
                <td>'.$row['time_added'].'</td>
                <td>';

                $getUsersForwardedFrom = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues
JOIN sys_users ON kid_issues.forwarded_from = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues.kid_issue_id= '".$row['kid_issue_id']."'");
                $getUsersForwardedFrom->execute();
                while ($row3 = $getUsersForwardedFrom->fetch(PDO::FETCH_ASSOC)) {
                    echo '<b>'.$row3['job_title'] . '</b> ' . $row3['username'] . '<br><br>';
                }

                echo'
                </td>
                <td>';

                $getUsersForwardedTo = $connect->prepare("SELECT job_titles.job_title,sys_users.username
FROM kid_issues_forwarding
JOIN sys_users ON kid_issues_forwarding.forwarded_to = sys_users.user_id
JOIN staff ON sys_users.staff_id = staff.staff_id
JOIN job_titles ON staff.job_title_id = job_titles.job_title_id
WHERE kid_issues_forwarding.kid_issue_id = '".$row['kid_issue_id']."'");
                $getUsersForwardedTo->execute();
                while ($row2 = $getUsersForwardedTo->fetch(PDO::FETCH_ASSOC)) {
                    echo '<b>'.$row2['job_title'] . '</b> ' . $row2['username'] . '<br><br>';
                }
                echo'
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>'.$row['solved_by'].'</span><br/>
                    <span>Hoda</span>
                </td>
                <td><a href="view-issue.php?type=<?php echo $_GET[\'type\']; ?>" class="btn btn-primary btn-sm">View</a></td>
            </tr>';
            }
            ?>

        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>