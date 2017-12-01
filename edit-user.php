<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="edit-user add-forms">
    <h2>add user / edit user privileges</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-xs-2 control-label">Staff Name</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option value="">Mohamed Ahmed</option>
                    <option value="">Mohamed Maher</option>
                    <option value="">Ibrahim Omar</option>
                    <option value="">Mohab Ali</option>
                    <option value="">dsadadsadasd</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">User ID</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <p class="form-control-static">ss495723</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Job Title</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option value="">Teacher</option>
                    <option value="">Supervisor</option>
                    <option value="">Academy Head</option>
                    <option value="">G.M</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Access To</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option value="">branch1</option>
                    <option value="">branch2</option>
                    <option value="">branch3</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Add / Save</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>