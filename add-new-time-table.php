<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="add-time-table">
    <h2>Add New Time Table</h2>
    <form>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th class="col-sm-4">Time From</th>
                    <th class="col-sm-4">Time To</th>
                    <th class="col-sm-4">Activities</th>
                </tr>
                <tr>
                    <td><input type="time" class="form-control"></td>
                    <td><input type="time" class="form-control"></td>
                    <td><textarea class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><input type="time" class="form-control"></td>
                    <td><input type="time" class="form-control"></td>
                    <td><textarea class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><input type="time" class="form-control"></td>
                    <td><input type="time" class="form-control"></td>
                    <td><textarea class="form-control"></textarea></td>
                </tr>
            </table>
        </div>
        <button class="col-sm-4 col-sm-push-4 col-xs-12 btn btn-primary">Add</button>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>
