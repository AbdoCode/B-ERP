<?php
    session_start();
    $pageTitle = 'Security Question';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-forms">
    <h2>security question</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="question" class="col-xs-2 control-label">Security Question</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-2">
                <select class="form-control" id="question">
                    <option disabled selected>Choose question</option>
                    <option>who's your favorite player?</option>
                    <option>who's your favorite teacher?</option>
                    <option>who's your favorite Friend?</option>
                    <option>who's your favorite Actor?</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="answer" class="col-xs-2 control-label">Answer</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-2">
                <input class="form-control" type="text" id="answer" placeholder="Your Answer">
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