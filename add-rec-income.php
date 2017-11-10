<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-income add-forms">
    <h2>add income</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-xs-2 control-label">Name</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="name" placeholder="Name...">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-xs-2 control-label">Phone</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="phone" placeholder="Mobile Number...">
            </div>
        </div>
        <div class="form-group">
            <label for="amount" class="col-xs-2 control-label">Amount</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="amount" placeholder="Amount in LE...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label">For</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <select>
                    <option value="">a</option>
                    <option value="">xa</option>
                    <option value="">d</option>
                    <option value="">b</option>
                    <option value="">c</option>
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