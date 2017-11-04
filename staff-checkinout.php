<?php
    session_start();
    $pageTitle = 'Check In/Out';
    include 'init.php';
    include 'navbar.php';
?>
<div class="attend">
    <h2>staff check In/Out</h2>
    <div class="container-for-btn-group">
        <ul class="btn-group" role="tablist">
            <li role="presentation" class="btn btn-primary active"><a href="#checkIn" role="tab" data-toggle="tab">Check In</a></li>
            <li role="presentation" class="btn btn-primary"><a href="#checkOut" role="tab" data-toggle="tab">Check Out</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="checkIn">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Employee name/Job Title..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-5">Employee Name</th>
                            <th class="col-sm-3">Check In</th>
                            <th class="col-sm-3">Job Title</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>Teacher</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>Teacher</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>Teacher</td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="checkOut">
            <div class="input-group col-sm-5 col-xs-12 center-block">
                <input type="search" class="form-control" placeholder="Employee name/Job Title..." />
                <div class="input-group-btn center-block">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
                </div>
            </div>
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-sm-1">#</th>
                            <th class="col-sm-5">Employee Name</th>
                            <th class="col-sm-3">Check Out</th>
                            <th class="col-sm-3">Job Title</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>Teacher</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>Teacher</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ali mohamed</td>
                            <td><input type="checkbox" class="form-control" /></td>
                            <td>Teacher</td>
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