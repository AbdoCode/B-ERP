<?php
    session_start();
    $pageTitle = 'DB Management';
    include 'init.php';
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
        </div>
        <div class="col-sm-9 col-sm-pull-3">
            <div class="container-for-btn-group">
                <button class="btn btn-default" type="button" onclick="window.print();return false;">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
                </button>
            </div>
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