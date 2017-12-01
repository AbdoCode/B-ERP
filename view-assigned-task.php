<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="view-assigned-task">
    <h2 class="text-center">View Assigned Task</h2>
    <div class="contRow">
        <label class="col-sm-2 col-xs-6">Task Title:</label>
        <p class="col-sm-10 col-xs-6">This is title</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-6">Task Owner:</label>
        <p class="col-sm-10 col-xs-6">This Owner name</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 col-xs-6">Task Date:</label>
        <p class="col-sm-10 col-xs-6">This is Date</p>
    </div>
    <div class="contRow">
        <label class="col-sm-2 ccl-xs-12">Details:</label>
        <p class="col-sm-10 col-xs-12">This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity This is Details for this activity </p>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4 col-xs-12">
            <button type="submit" class="btn btn-success btn-block">Done</button>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>