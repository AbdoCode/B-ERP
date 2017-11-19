<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
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
            <tr>
                <td>1</td>
                <td>Logistics Problem</td>
                <td>Type</td>
                <td>Solved</td>
                <td>17 Oct 2016</td>
                <td>10:00 AM</td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td><a href="view-issue.php?type=<?php echo $_GET['type']; ?>" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Logistics Problem</td>
                <td>Type</td>
                <td>Not Solved</td>
                <td>17 Oct 2016</td>
                <td>10:00 AM</td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td><a href="view-issue.php?type=<?php echo $_GET['type']; ?>" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Logistics Problem</td>
                <td>Type</td>
                <td>Solved</td>
                <td>17 Oct 2016</td>
                <td>10:00 AM</td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Receptionist</span><br/>
                    <span>Doaa</span>
                </td>
                <td>
                    <span>Supervisor</span><br/>
                    <span>Hoda</span>
                </td>
                <td><a href="view-issue.php?type=<?php echo $_GET['type']; ?>" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>