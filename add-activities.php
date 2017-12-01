<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-activities add-forms">
    <h2>Add Activity</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-xs-1 control-label">Name</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="name" placeholder="Activity name">
            </div>
        </div>
        <div class="form-group">
            <label for="date" class="col-xs-1 control-label">Date</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="date" class="form-control" id="date">
            </div>
        </div>
        <div class="form-group">
            <label for="time" class="col-xs-1 control-label">Time</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="time" class="form-control" id="time">
            </div>
        </div>
        <div class="form-group">
            <label for="class" class="col-xs-1 control-label">Class</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="class" multiple>
                    <option value="a1">A1</option>
                    <option value="a2">A2</option>
                    <option value="b1">B1</option>
                    <option value="b2">B2</option>
                    <option value="c1">C1</option>
                    <option value="c2">C2</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-1 control-label">Photos</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <div style="position: relative" class="uploads">
                    <label for="photos_upload" class="btn btn-primary">
                        <span class="glyphicon glyphicon-upload"></span> Upload Photos
                    </label>
                    <input type="file" id="photos_upload" class="btn btn-primary" accept="image/*" multiple>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="details" class="col-xs-1 control-label">Details</label>
            <div class="col-sm-11  col-sm-push-0 col-xs-9 col-xs-push-2">
                <textarea class="form-control" id="details" placeholder="Details"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Add</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>