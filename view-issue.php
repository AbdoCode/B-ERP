<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="view-issue">
    <div class="row">
        <h1 class="text-center">Issue Name</h1>
        <div class="contRow">
            <label class="col-xs-1">Date:</label>
            <p class="col-sm-11 col-sm-push-0 col-xs-9 col-xs-push-2">17 Aug 2017</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 ccl-xs-12">Details:</label>
            <p class="col-sm-11 col-xs-12">This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity </p>
        </div>
        <div class="col-sm-offset-4 col-sm-4 col-xs-12">
            <button type="submit" class="btn btn-success btn-block">Solve</button>
        </div>
    </div>
    <form class="form-horizontal">
        <div class="form-group col-sm-5">
            <label for="jobTitle" class="col-sm-4 control-label">Job Title</label>
            <div class="col-sm-8">
                <select class="form-control" id="jobTitle">
                    <option disabled selected>Choose Job Title</option>
                    <option>CEO</option>
                    <option>General Manager</option>
                    <option>Academy Head</option>
                    <option>Supervisor</option>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-5 col-sm-push-2">
            <label for="employee" class="col-sm-4 control-label">To</label>
            <div class="col-sm-8">
                <select class="form-control" id="employee">
                    <option disabled selected>Select to send</option>
                    <option>All</option>
                    <option>Ahmed</option>
                    <option>Mohamed</option>
                    <option>Ibrahim</option>
                    <option>Ali</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4 col-xs-12">
                <button type="submit" class="btn btn-warning btn-block">Forward</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>