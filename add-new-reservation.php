<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-activities add-forms">
    <h2>add new reservation</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-xs-1 control-label">Name</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="name" placeholder="Visitor Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-xs-1 control-label">Phone</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="phone" placeholder="Mobile Number...">
            </div>
        </div>
        <div class="form-group">
            <label for="free" class="col-xs-1 control-label">Free Paid</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="free">
                    <option value="Normal">Normal</option>
                    <option value="Blue Visa">Blue Visa</option>
                    <option value="Green Visa">Green Visa</option>
                    <option value="Red Visa">Red Visa</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="timeIn" class="col-xs-1 control-label">Time In</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="time" class="form-control" id="timeIn">
            </div>
        </div>
        <div class="form-group">
            <label for="timeOut" class="col-xs-1 control-label">Time Out</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="time" class="form-control" id="timeOut">
            </div>
        </div>
        <div class="form-group">
            <label for="consumed" class="col-xs-1 control-label">Consumed</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="consumed" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="remain" class="col-xs-1 control-label">Remain</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="remain" disabled>
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