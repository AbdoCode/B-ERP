<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
    include 'Boxes/add-issue.php';
?>
<div class="issues">
    <h1><?php echo $_GET['type']; ?>s Issues</h1>
    <div class="container-for-btn-group">
        <button class="btn btn-primary add-issue-<?php echo $_GET['type']; ?>-button">
            <span class="glyphicon glyphicon-plus-sign"></span> Add Issue for <?php echo $_GET['type']; ?>
        </button>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Issue name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Title</th>
                <th class="col-sm-1">Status</th>
                <th class="col-sm-2">Forward From</th>
                <th class="col-sm-2">Escalation level</th>
                <th class="col-sm-2">Solver Name</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Logistics Problem</td>
                <td>Solved</td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td><a href="view-issue.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Logistics Problem</td>
                <td>Solved</td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td><a href="view-issue.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>