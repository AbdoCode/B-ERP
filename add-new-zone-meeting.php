<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-activities add-forms">
    <h2>add meeting room reservation</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-xs-2 control-label">Name</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="name" placeholder="Visitor Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-xs-2 control-label">Phone</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="phone" placeholder="Mobile Number...">
            </div>
        </div>
        <div class="form-group">
            <label for="purpose" class="col-xs-2 control-label">Purpose</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="purpose" placeholder="Meeting Purpose...">
            </div>
        </div>
        <div class="form-group">
            <label for="timeIn" class="col-xs-2 control-label">Time In</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="time" class="form-control" id="timeIn">
            </div>
        </div>
        <div class="form-group">
            <label for="timeOut" class="col-xs-2 control-label">Time Out</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="time" class="form-control" id="timeOut">
            </div>
        </div>
        <div class="form-group">
            <label for="noTeam" class="col-xs-2 control-label">No. of the team</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="noTeam" placeholder="Number of the team...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-22">
                <button type="submit" class="btn btn-success btn-block">Add</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>