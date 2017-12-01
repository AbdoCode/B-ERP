<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="add-activities add-forms">
    <h2>add new branch</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="branchName" class="col-xs-2 control-label">Name</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="branchName" placeholder="Branch Name...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Include Zone?</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option>Yes</option>
                    <option>No</option>
                </select>
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