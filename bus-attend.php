<?php
    session_start();
    $pageTitle = 'Bus Attendance';
    include 'init.php';
    include 'navbar.php';
?>
<div class="busPage">
    <h2>Bus Attendance</h2>
    <div class="container-for-btn-group">
        <ul class="btn-group" role="tablist">
            <li role="presentation" class="btn btn-primary active"><a href="#am" role="tab" data-toggle="tab">AM</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#pm" role="tab" data-toggle="tab">PM</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="am">
            <div class="info row text-center">
                <div class="col-sm-3 col-xs-6">
                    <label>Time</label><br/>
                    <span>PM</span>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <label>No. kids</label><br/>
                    <span>20</span>
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
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-4">Kid Name</th>
                            <th class="col-sm-3">Bus Attendance (<?php echo date('d M Y'); ?>)</th>
                            <th class="col-sm-4">Kid Address</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>25 شارع طلعت حرب القاهرة</td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="pm">
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
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-3">Kid Name</th>
                            <th class="col-sm-2">Reception Attendance</th>
                            <th class="col-sm-3">Bus Attendance (<?php echo date('d M Y'); ?>)</th>
                            <th class="col-sm-3">Kid Address</th>
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
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>
