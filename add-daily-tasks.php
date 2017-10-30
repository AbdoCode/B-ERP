<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-daily-tasks">
    <h2>Add new daily task</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="control-label col-sm-1">Name</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" placeholder="Type Task Name..." id="name">
            </div>
        </div>
        <div class="form-group">
            <label for="jobTitle" class="control-label col-sm-1">Job Title</label>
            <div class="col-sm-11">
                <select class="form-control" id="jobTitle">
                    <option disabled selected>Choose Job Title</option>
                    <option>CEO</option>
                    <option>General Manager</option>
                    <option>Academy Head</option>
                    <option>Supervisor</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="employee" class="control-label col-sm-1">To</label>
            <div class="col-sm-11">
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
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button class="btn btn-success btn-block">Forward</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>