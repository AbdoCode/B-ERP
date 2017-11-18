<?php
    session_start();
    $pageTitle = 'Kids Data';
    include 'init.php';
    include 'navbar.php';
?>
<div class="kids-data">
    <h2>Kids Data</h2>
    <div class="container-for-btn-group">
        <a href="edit-kids-profile.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Kid
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Kid name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="customRate col-xs-12 center-block text-center">
        <form class="form-horizontal">
            <label class="control-label">Custom Rate</label>
            <input type="date" class="form-control">
            <input type="date" class="form-control">
            <button type="button" class="btn btn-info">View</button>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-2">Name</th>
                    <th class="col-sm-1">Class</th>
                    <th class="col-sm-1">Attendance Rate</th>
                    <th class="col-sm-1">Custom Attendance Rate</th>
                    <th class="col-sm-1">Bus Participation</th>
                    <th class="col-sm-1">Material</th>
                    <th class="col-sm-1">Performance sheet</th>
                    <th class="col-sm-1">Issue</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td><a href="kids-profile.php?id=1">Mohamed Maher Mahfouz</a></td>
                <td>B2</td>
                <td>20.3%</td>
                <td>-</td>
                <td>Not Participant</td>
                <td>16/50</td>
                <td><a href="performance-sheet-kids.php" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="add-kid-issue.php?id=1" class="btn btn-primary btn-sm">Add</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>A2</td>
                <td>20.3%</td>
                <td>-</td>
                <td>Not Participant</td>
                <td>16/50</td>
                <td><a href="performance-sheet-kids.php" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="add-kid-issue.php?id=1" class="btn btn-primary btn-sm">Add</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include_once $templates . 'footer.php';
?>