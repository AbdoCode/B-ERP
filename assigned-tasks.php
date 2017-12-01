<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="assigned-tasks">
    <h2>Assigned Tasks</h2>
    <div class="container-for-btn-group">
        <a href="assign-new-task.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Assign New Task
        </a>
    </div>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Task title/Assigned Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Task title</th>
                <th class="col-sm-3">Assigned date</th>
                <th class="col-sm-3">Assigned from</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Make task</td>
                <td>17 Sep 2017</td>
                <td>Mohamed (<abbr title="Chief Executive Officer">CEO</abbr>)</td>
                <td><a href="view-assigned-task.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Make task</td>
                <td>17 Sep 2017</td>
                <td>Mohamed (<abbr title="General Manager">GM</abbr>)</td>
                <td><a href="view-assigned-task.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>