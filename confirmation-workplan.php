<?php
    session_start();
    $pageTitle = 'Workplan Confirmation';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="workplan">
    <h2>Workplan Confirmation</h2>
    <div class="input-group col-sm-6 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Teacher name/Class/Subject..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered ">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-4">Teacher name</th>
                <th class="col-sm-1">Class</th>
                <th class="col-sm-1">Subject</th>
                <th class="col-sm-2">Status</th>
                <th class="col-sm-2">Confirm date</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Assma</td>
                <td>B</td>
                <td>Arabic</td>
                <td>Done</td>
                <td>17 Sep 2017</td>
                <td><a href="view-confirmation-workplan.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Assma</td>
                <td>B</td>
                <td>Arabic</td>
                <td>Done</td>
                <td>17 Sep 2017</td>
                <td><a href="view-confirmation-workplan.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Assma</td>
                <td>B</td>
                <td>Arabic</td>
                <td>Done</td>
                <td>17 Sep 2017</td>
                <td><a href="view-confirmation-workplan.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>