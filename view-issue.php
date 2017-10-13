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
            <p class="col-xs-11">17 Aug 2017</p>
        </div>
        <div class="contRow">
            <label class="col-xs-1">Details:</label>
            <textarea disabled class="col-xs-11"></textarea>
        </div>
        <div class="col-sm-offset-4 col-sm-4 col-xs-12">
            <button type="submit" class="btn btn-success btn-block">Solve</button>
        </div>
    </div>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="jobTitle" class="col-xs-1 control-label">Job Title</label>
            <div class="col-sm-4 col-xs-9">
                <select class="form-control" id="jobTitle">
                    <option disabled selected>Choose Job Title</option>
                    <option>CEO</option>
                    <option>General Manager</option>
                    <option>Academy Head</option>
                    <option>Supervisor</option>
                </select>
            </div>
            <label for="employee" class="col-xs-1 col-sm-push-1 control-label">To</label>
            <div class="col-sm-4 col-xs-9 col-sm-push-1">
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