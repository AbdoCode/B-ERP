<?php
    $pageTitle = 'Forget Password';
include 'includes/templates/loginManagement.php';
?>

<div class="login text-center">
    <div class="container-fluid">
        <div class="page-header">
            <h1>Back-Packers Information System</h1>
        </div>
        <div class="row">
            <div class="logoImage text-center col-sm-4 col-md-6 hidden-xs">
                <img class="img-responsive" src="layout/images/logo-black.png">
            </div>
            <div class="col-sm-8 col-md-6">
                <form class="form-horizontal forget-password">
                    <div class="form-group">
                        <label for="id" class="col-xs-1 control-label">ID</label>
                        <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">
                            <input type="text" class="form-control" id="id" placeholder="ID">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="question" class="col-xs-1 control-label">Security Question</label>
                        <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">
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
                        <label for="answer" class="col-xs-1 control-label">Answer</label>
                        <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">
                            <input class="form-control" type="text" id="answer" placeholder="Your Answer">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-block forgetSubmit">Submit</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-xs-1 control-label">Password</label>
                        <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">
                            <input class="form-control" type="text" id="password" placeholder="Your Password">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>