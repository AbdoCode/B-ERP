<?php
    session_start();
    $pageTitle = 'Change Password';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="new-term add-forms">
    <h2>Change Password</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="old" class="col-xs-2 control-label">Old Password:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="password" class="form-control" id="old" placeholder="Type Your Current Password">
            </div>
        </div>
        <div class="form-group">
            <label for="new" class="col-xs-2 control-label">New Password:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="password" class="form-control" id="new" placeholder="Type New Password">
            </div>
        </div>
        <div class="form-group">
            <label for="confirm" class="col-xs-2 control-label">Confirm Password:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="password" class="form-control" id="confirm" placeholder="Confirm Password">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>