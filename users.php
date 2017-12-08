<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="users">
    <h2>users</h2>
    <div class="container-for-btn-group">
        <a href="edit-user.php" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New User
        </a>
    </div>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="ID/Name/Job Title/Branch..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered  table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-1">ID</th>
                    <th class="col-sm-2">Name</th>
                    <th class="col-sm-1">Job Title</th>
                    <th class="col-sm-1">Branch</th>
                    <th class="col-sm-2">Last Login Date</th>
                    <th class="col-sm-1">Last Login Time</th>
                    <th class="col-sm-2">Last Change Password Date</th>
                    <th class="col-sm-1">Privileges</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>M101020</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Supervisor</td>
                <td>Ebn-Batota</td>
                <td>09 Nov 2017</td>
                <td>05:02 AM</td>
                <td>07 Nov 2017</td>
                <td><a href="edit-user.php" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>M101020</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Supervisor</td>
                <td>Ebn-Batota</td>
                <td>09 Nov 2017</td>
                <td>05:02 AM</td>
                <td>07 Nov 2017</td>
                <td><a href="edit-user.php" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>M101020</td>
                <td>Mohamed Maher Mahfouz</td>
                <td>Supervisor</td>
                <td>Ebn-Batota</td>
                <td>09 Nov 2017</td>
                <td>05:02 AM</td>
                <td>07 Nov 2017</td>
                <td><a href="edit-user.php" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>