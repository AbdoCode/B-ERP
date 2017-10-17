<div class="forget-password box">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title text-center">Forget Password</h2>
            <span class="glyphicon glyphicon-remove"></span>
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="id" class="col-xs-2 control-label">ID</label>
                    <div class="col-sm-9 col-sm-push-1 col-xs-8 col-xs-push-2">
                        <input type="text" class="form-control" id="id" placeholder="ID">
                    </div>
                </div>
                <div class="form-group">
                    <label for="question" class="col-xs-2 control-label">Security Question</label>
                    <div class="col-sm-9 col-sm-push-1 col-xs-8 col-xs-push-2">
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
                    <div class="col-sm-9 col-sm-push-1 col-xs-8 col-xs-push-2">
                        <input class="form-control" type="text" id="answer" placeholder="Your Answer">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block forgetSubmit">Submit</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-xs-2 control-label">Password is</label>
                    <div class="col-sm-9 col-sm-push-1 col-xs-8 col-xs-push-2">
                        <input class="form-control" type="text" id="password" placeholder="Your Password">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>