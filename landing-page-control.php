<?php
    session_start();
    $pageTitle = 'Landing Page Control';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="new-term add-forms">
    <h2>Landing Page</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="dateFrom" class="col-xs-2 control-label">Main Images:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <div style="position: relative" class="uploads">
                    <label for="images_upload" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-upload"></span> Upload Images
                    </label>
                    <input type="file" id="images_upload" class="btn btn-primary" accept="image/*" multiple>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="aboutUs" class="col-xs-2 control-label">About Us:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <textarea class="form-control" rows="5" id="aboutUs"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="youtube" class="col-xs-2 control-label">Youtube Link:</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-9 col-xs-push-1">
                <input type="text" class="form-control" id="youtube" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>