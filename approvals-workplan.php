<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
    <div class="workplan approvals-workplan">
        <h2>Workplan Approvals</h2>
        <div class="input-group col-sm-6 col-xs-12 center-block">
            <input type="search" class="form-control" placeholder="Teacher name/Class/Subject..." />
            <div class="input-group-btn center-block">
                <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-4">Teacher Name</th>
                        <th class="col-sm-2">Status</th>
                        <th class="col-sm-1">Class</th>
                        <th class="col-sm-1">Subject</th>
                        <th class="col-sm-2">Term</th>
                        <th class="col-sm-1">Details</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>Mohamed</td>
                    <td>Approved</td>
                    <td>A</td>
                    <td>Arabic</td>
                    <td>Fall 2017</td>
                    <td><a href="view-approvals-workplan.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mohamed</td>
                    <td>Not Approved</td>
                    <td>A</td>
                    <td>Arabic</td>
                    <td>Fall 2017</td>
                    <td><a href="view-approvals-workplan.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mohamed</td>
                    <td>Pending</td>
                    <td>A</td>
                    <td>Arabic</td>
                    <td>Fall 2017</td>
                    <td><a href="view-approvals-workplan.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mohamed</td>
                    <td>Modifying</td>
                    <td>A</td>
                    <td>Arabic</td>
                    <td>Fall 2017</td>
                    <td><a href="view-approvals-workplan.php" class="btn btn-primary btn-sm">View</a></td>
                </tr>
            </table>
        </div>
    </div>
<?php
    include $templates . 'footer.php';
?>