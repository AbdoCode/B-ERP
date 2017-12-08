<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="reception-logistics">
    <h2>performance review</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Employee name/Job Title/Term..." />
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
        <table class="table table-bordered  table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-3">Name</th>
                    <th class="col-sm-1">Job Title</th>
                    <th class="col-sm-2">Term</th>
                    <th class="col-sm-2">Attendance Rate</th>
                    <th class="col-sm-2">Custom Attendance Rate</th>
                    <th class="col-sm-1">Performance Sheet</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Doaa Mohamed</td>
                <td>Teacher</td>
                <td>Summer 2014</td>
                <td>85.2%</td>
                <td>-</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa Mohamed</td>
                <td>Teacher</td>
                <td>Summer 2014</td>
                <td>85.2%</td>
                <td>-</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa Mohamed</td>
                <td>Teacher</td>
                <td>Summer 2014</td>
                <td>85.2%</td>
                <td>-</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa Mohamed</td>
                <td>Teacher</td>
                <td>Summer 2014</td>
                <td>85.2%</td>
                <td>-</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doaa Mohamed</td>
                <td>Teacher</td>
                <td>Summer 2014</td>
                <td>85.2%</td>
                <td>-</td>
                <td><a href="performance-sheet.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>