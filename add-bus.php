<?php
    session_start();
    $pageTitle = 'Add New Bus';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="new-term add-forms">
    <h2>Add New Bus</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-xs-2 control-label">Name:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="name" placeholder="Type Bus Name">
            </div>
        </div>
        <div class="form-group">
            <label for="number" class="col-xs-2 control-label">Number:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="number" placeholder="Type Bus Number">
            </div>
        </div>
        <div class="form-group">
            <label for="walk" class="col-xs-2 control-label">Walk Line:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="walk" placeholder="Walk Line">
            </div>
        </div>
        <div class="form-group">
            <label for="driver" class="col-xs-2 control-label">Driver Name:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="driver" placeholder="Type Driver Name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Bus Period:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                    <option value="am-pm">AM - PM</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Supervisor Name:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option value="1">Mona</option>
                    <option value="2">Ahmed</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Add</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>