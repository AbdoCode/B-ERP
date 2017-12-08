<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';



?>
<div class="view-issue">
    <h2 class="text-center">Issue Name</h2>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Type:</label>
            <p class="col-sm-11 col-sm-push-0 col-xs-8 col-xs-push-2">Type Name</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Added Date:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">17 Aug 2017</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Added Time:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">10:00 AM</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Forward From:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">Doaa (Teacher)</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Forward To:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">Doaa (Receptionist)</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Escalation level:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">Hoda (Supervisor)</p>
        </div>
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Solution Acting:</label>
            <p class="col-sm-5 col-sm-push-0 col-xs-8 col-xs-push-2">Hoda (Supervisor)</p>
        </div>
        </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 col-xs-2">Solution time:</label>
            <p class="col-sm-11 col-sm-push-0 col-xs-8 col-xs-push-2">2 days 10 hrs 30 Mins</p>
        </div>
    </div>
    <div class="row">
        <div class="contRow">
            <label class="col-sm-1 ccl-xs-12">Details:</label>
            <p class="col-sm-11 col-xs-12">This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity </p>
        </div>
    </div>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Solve</button>
            </div>
        </div>
        <div class="form-group col-sm-5">
            <label for="jobTitle" class="col-sm-4 control-label">Job Title</label>
            <div class="col-sm-8">
                <select class="form-control" id="jobTitle" multiple>
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
                <select class="form-control" id="employee" multiple>
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