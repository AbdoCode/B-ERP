<?php
    session_start();
    $pageTitle = 'Kids Data';
    include 'init.php';
    include 'navbar.php';
?>
<div class="kids-data">
    <h2>Kids Data</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Kid name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Name</th>
                <th class="col-sm-1">Age</th>
                <th class="col-sm-2">Attendance Rate</th>
                <th class="col-sm-2">Bus</th>
                <th class="col-sm-1">Matarials</th>
                <th class="col-sm-1">Issue</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>22</td>
                <td>20.3%</td>
                <td>Not Participant</td>
                <td>16/50</td>
                <td><a href="add-kid-issue.php?id=1" class="btn btn-primary btn-sm">Add</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>22</td>
                <td>20.3%</td>
                <td>Not Participant</td>
                <td>16/50</td>
                <td><a href="add-kid-issue.php?id=1" class="btn btn-primary btn-sm">Add</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include_once $templates . 'footer.php';
?>