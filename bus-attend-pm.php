<?php
    session_start();
    $pageTitle = 'Bus Attendance';
    include 'init.php';
    include 'navbar.php';
?>
<div class="busPage">
    <div class="info row text-center">
        <div class="col-sm-2 col-xs-4">
            <label>Time</label><br/>
            <span>PM</span>
        </div>
        <div class="col-sm-2 col-xs-4">
            <label>No. kids</label><br/>
            <span>20</span>
        </div>
        <div class="col-sm-2 col-xs-4">
            <label>Variation</label><br/>
            <span>0</span>
        </div>
        <div class="col-sm-3 col-xs-6">
            <label>Bus Number</label><br/>
            <span>ب ض س - 561</span>
        </div>
        <div class="col-sm-3 col-xs-6">
            <label>Walk line</label><br/>
            <span>المنيا الجديدة - المنيا</span>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <form>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-3">Kid Name</th>
                    <th class="col-sm-2">Reception Attendance</th>
                    <th class="col-sm-2">Bus Attendance</th>
                    <th class="col-sm-4">Kid Address</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ali mohamed</td>
                    <td><input type="checkbox" class="form-control" /></td>
                    <td><input type="checkbox" class="form-control" /></td>
                    <td>25 شارع طلعت حرب القاهرة</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ali mohamed</td>
                    <td><input type="checkbox" class="form-control" /></td>
                    <td><input type="checkbox" class="form-control" /></td>
                    <td>25 شارع طلعت حرب القاهرة</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ali mohamed</td>
                    <td><input type="checkbox" class="form-control" /></td>
                    <td><input type="checkbox" class="form-control" /></td>
                    <td>25 شارع طلعت حرب القاهرة</td>
                </tr>
            </form>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>
