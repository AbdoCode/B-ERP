<?php
    session_start();
    $pageTitle = 'DB Management';
    include 'init.php';
    include 'navbar.php';
?>
    <div class="deletion-history">
        <h2>deletion history</h2>
        <div class="container-for-btn-group">
            <button class="btn btn-default" type="button" onclick="window.print()">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
            </button>
        </div>
        <div class="input-group col-sm-5 col-xs-12 center-block">
            <input type="search" class="form-control" placeholder="Item/Date..." />
            <div class="input-group-btn center-block">
                <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-4">Item</th>
                        <th class="col-sm-2">Deleted by</th>
                        <th class="col-sm-2">Deletion Date</th>
                        <th class="col-sm-3">Action</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>Kid Data</td>
                    <td>Hoda Mohamed(Teacher)</td>
                    <td>18 Aug 2017</td>
                    <td>
                        <button class="btn btn-sm btn-default">Restore</button>
                        <button class="btn btn-sm btn-danger">Remove User Access</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kid Data</td>
                    <td>Hoda Mohamed(Teacher)</td>
                    <td>18 Aug 2017</td>
                    <td>
                        <button class="btn btn-sm btn-default">Restore</button>
                        <button class="btn btn-sm btn-danger">Remove User Access</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kid Data</td>
                    <td>Hoda Mohamed(Teacher)</td>
                    <td>18 Aug 2017</td>
                    <td>
                        <button class="btn btn-sm btn-default">Restore</button>
                        <button class="btn btn-sm btn-danger">Remove User Access</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php
    include $templates . 'footer.php';
?>