<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-activities add-forms">
    <h2>add course reservation</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="coursename" class="col-xs-2 control-label">Course</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="coursename" placeholder="Course Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="leadername" class="col-xs-2 control-label">Leader</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="leadername" placeholder="Leader Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-xs-2 control-label">Phone</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="phone" placeholder="Mobile Number...">
            </div>
        </div>
        <div class="form-group">
            <label for="hours" class="col-xs-2 control-label">Hours</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="hours" placeholder="Credit Hours...">
            </div>
        </div>
        <div class="form-group">
            <label for="days" class="col-xs-2 control-label">Days</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="days" placeholder="Days...">
            </div>
        </div>
        <div class="form-group">
            <label for="place" class="col-xs-2 control-label">Place</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="place" placeholder="Place...">
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