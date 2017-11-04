<?php
    session_start();
    $pageTitle = 'Check In/Out';
    include 'init.php';
    include 'navbar.php';
?>
<div class="attend">
    <h2>Check In/Out</h2>
    <div class="container-for-btn-group">
        <ul class="btn-group" role="tablist">
            <li role="presentation" class="btn btn-primary active"><a href="#checkIn" role="tab" data-toggle="tab">Check In</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#checkOut" role="tab" data-toggle="tab">Check Out</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="checkIn">
            <div class="info row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>Date</label><br/>
                            <span><?php echo date('d M Y'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>Time</label><br/>
                            <span><?php echo date('h:m A'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>No. kids</label><br/>
                            <span>20</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <label>Variation</label><br/>
                            <span>0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Kid name..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-5">Kid Name</th>
                            <th class="col-sm-2">Reception Check In</th>
                            <th class="col-sm-2">Bus Check In</th>
                            <th class="col-sm-2">Class</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>A3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>A3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td><input type="checkbox" class="form-control" disabled/></td>
                            <td>A3</td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="checkOut">
            <div class="info row text-center">
                <div class="col-sm-4 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>Date</label><br/>
                            <span><?php echo date('d M Y'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>Time</label><br/>
                            <span><?php echo date('h:m A'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>No. kids</label><br/>
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Kid name..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-5">Kid Name</th>
                            <th class="col-sm-3">Reception Check Out</th>
                            <th class="col-sm-3">Class</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>A2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>A2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>A2</td>
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