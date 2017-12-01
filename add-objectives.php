<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-objectives add-forms">
    <h2>Add Objectives</h2>
    <form class="form-horizontal">
        <div class="toAppend">
            <div class="form-group">
                <label for="1" class="col-xs-1 control-label">1</label>
                <div class="col-sm-11 col-sm-push-0 col-xs-10 col-xs-push-1">
                    <textarea class="form-control" id="1" placeholder="type your objective..." rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="2" class="col-xs-1 control-label">2</label>
                <div class="col-sm-11 col-sm-push-0 col-xs-10 col-xs-push-1">
                    <textarea class="form-control" id="2" placeholder="type your objective..." rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="3" class="col-xs-1 control-label">3</label>
                <div class="col-sm-11 col-sm-push-0 col-xs-10 col-xs-push-1">
                    <textarea class="form-control" id="3" placeholder="type your objective..." rows="2"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group add-item-button-container">
            <div class="add-item-button">
                <button type="button" class="btn btn-primary btn-block">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Objective
                </button>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-1 control-label">Date</label>
            <div class="col-sm-11 col-sm-push-0 col-xs-10 col-xs-push-1">
                <select>
                    <option>week 1</option>
                    <option>week 2</option>
                    <option>week 3</option>
                    <option>week 4</option>
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