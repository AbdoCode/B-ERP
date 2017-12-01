<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="add-class-table">
    <h2>Before Edit Table</h2>
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
                <td class="info">Saturday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Sunday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Monday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Tuesday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Wednesday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Thursday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <h2>After Edit Table</h2>
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
                <td class="info">Saturday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Sunday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Monday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Tuesday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Wednesday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="info">Thursday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>