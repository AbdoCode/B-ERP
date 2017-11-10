<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-activities add-forms">
    <h2>add customer</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-xs-2 control-label">Name</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="name" placeholder="Visitor Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="job" class="col-xs-2 control-label">Job</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="job" placeholder="Job Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-xs-2 control-label">Phone</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="phone" placeholder="Mobile Number...">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-xs-2 control-label">E-mail</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="email" placeholder="E-mail Address...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">Looking For</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option>Pre-school</option>
                    <option>Zone</option>
                    <option>Zone course / meeting</option>
                    <option>Travelling</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="col-xs-2 control-label">Reception Comment</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <textarea class="form-control" id="comment" placeholder="Type Your Comment..."></textarea>
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