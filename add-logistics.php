<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="add-logistics">
    <h2>Add Logistics</h2>
    <form class="form-horizontal">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
            </table>
        </div>
        <div class="container-for-btn-group">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Logistic
                </button>
            </div>
        </div>
        <div class="form-group">
            <label for="deadline" class="col-xs-2 control-label">Dead Line</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-2">
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="supervisor" class="col-xs-2 control-label">Supervisor</label>
            <div class="col-sm-10 col-sm-push-0 col-xs-8 col-xs-push-2">
                <select class="form-control" id="supervisor" multiple>
                    <option>Ahmed</option>
                    <option>Mohamed</option>
                    <option>Ibrahim</option>
                    <option>Ali</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button type="submit" class="btn btn-primary btn-block">Forward</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>