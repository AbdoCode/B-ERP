<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-issue-kid add-forms">
    <h2>add kid issue</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-xs-1 control-label">Title</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="title" placeholder="Issue Title">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-xs-1 control-label">Name</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <input type="text" class="form-control" id="name" placeholder="Kid Name">
            </div>
        </div>
        <div class="form-group">
            <label for="issueType" class="col-xs-1 control-label">Issue Type</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="issueType">
                    <option disabled selected>Select issue type</option>
                    <option>General</option>
                    <option>Safety issue</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="details" class="col-xs-1 control-label">Details</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <textarea class="form-control" id="details" placeholder="Details" rows="2"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="jobTitle" class="col-xs-1 control-label">Job Title</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="jobTitle" multiple>
                    <option>CEO</option>
                    <option>General Manager</option>
                    <option>Academy Head</option>
                    <option>Supervisor</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="employee" class="col-xs-1 control-label">To</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">
                <select class="form-control" id="employee" multiple>
                    <option>Ahmed</option>
                    <option>Mohamed</option>
                    <option>Ibrahim</option>
                    <option>Ali</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Forward</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>