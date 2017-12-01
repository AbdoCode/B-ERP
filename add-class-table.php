<?php
    session_start();
    $pageTitle = 'Home';
    include 'dep.php';
    include 'navbar.php';
?>
<div class="add-class-table edit-class-table">
    <h2>Class Table</h2>
    <form>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr class="info">
                    <th class="col-sm-2">Day</th>
                    <th class="col-sm-2">7-9</th>
                    <th class="col-sm-2">9-11</th>
                    <th class="col-sm-2">11-1</th>
                    <th class="col-sm-2">1-3</th>
                    <th class="col-sm-2">3-5</th>
                </tr>
                <tr>
                    <th class="info">Saturday</th>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th class="info">Sunday</th>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th class="info">Monday</th>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th class="info">Tuesday</th>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th class="info">Wednesday</th>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th class="info">Thursday</th>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-4 col-sm-push-4 col-xs-12">
            <button class="btn btn-success btn-block">Add</button>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>