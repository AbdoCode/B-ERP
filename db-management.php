<?php
    session_start();
    $pageTitle = 'DB Management';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="db-management">
    <h2>DB Management</h2>
    <div class="row">
        <div class="col-sm-3 col-sm-push-9">
            <form>
                <label class="control-label">Send Table To</label>
                <div class="form-group">
                    <select class="form-control" multiple>
                        <option>CEO</option>
                        <option>General Manager</option>
                        <option>Academy Head</option>
                        <option>Supervisor</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" multiple>
                        <option>Ahmed</option>
                        <option>Mohamed</option>
                        <option>Ibrahim</option>
                        <option>Ali</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Send</button>
                </div>
            </form>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block">Extract to flash memory</button>
            </div>
            <div class="form-group">
                <a href="deletion-history.php" class="btn btn-info btn-block">Deletion history</a>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-warning btn-block">Logs</button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger btn-block">Make offline</button>
            </div>
        </div>
        <div class="col-sm-9 col-sm-pull-3">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Kid name/Job title..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th class="col-sm-1">#</th>
                    </tr>
                    <tr>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>