<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div>
    <h2>zone courses</h2>
    <div class="container-for-btn-group">
        <a href="add-new-zone-course.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Zone Courses
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Course Name/Leader Name/Mobile/Date..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-2">Course Name</th>
                <th class="col-sm-2">Leader Name</th>
                <th class="col-sm-1">Mobile</th>
                <th class="col-sm-1">Credit hours</th>
                <th class="col-sm-1">Days</th>
                <th class="col-sm-2">Date</th>
                <th class="col-sm-1">Place</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>English Course</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>01064323735</td>
                <td>14</td>
                <td>Thursday</td>
                <td>17 Aug 2017</td>
                <td>Room 5</td>
                <td><a href="view-zone-courses.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>English Course</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>01064323735</td>
                <td>14</td>
                <td>Thursday</td>
                <td>17 Aug 2017</td>
                <td>Room 5</td>
                <td><a href="view-zone-courses.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>English Course</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>01064323735</td>
                <td>14</td>
                <td>Thursday</td>
                <td>17 Aug 2017</td>
                <td>Room 5</td>
                <td><a href="view-zone-courses.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>