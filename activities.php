<?php
    session_start();
    $pageTitle = 'Activities';
    include 'deploy.php';
    ob_start();
    include 'navbar.php';

//if($_SESSION['userJobTitle'] == 'Teacher')
//{
//    header('Location: access-denied.php?page='.$pageTitle.'');
//}


?>
<div class="activities">
    <h2>Activities</h2>
    <div class="container-for-btn-group">
        <a href="add-activities.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Activities
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Activity name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-1">Class</th>
                <th class="col-sm-2">Status</th>
                <th class="col-sm-2">Date</th>
                <th class="col-sm-2">Time</th>
                <th class="col-sm-1">Details</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Funday</td>
                <td>A</td>
                <td>
                    <select class="tableStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                </td>
                <td>17 Aug 2017</td>
                <td>05:20 AM</td>
                <td><a href="view-activity.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Trip</td>
                <td>All</td>
                <td>
                    <select class="tableStatus" name="status">
                        <option disabled selected value="">select status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="inprogress">In progress</option>
                    </select>
                </td>
                <td>18 Sep 2017</td>
                <td>05:20 AM</td>
                <td><a href="view-activity.php" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>