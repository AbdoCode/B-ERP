<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="statistics-access">
    <h2>statistics access</h2>
    <div class="input-group col-sm-5 col-xs-12 center-block">
        <input type="search" class="form-control" placeholder="Statistics name..." />
        <div class="input-group-btn center-block">
            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-6">Name</th>
                    <th class="col-sm-2">Type</th>
                    <th class="col-sm-3">Access To</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Name1</td>
                <td>Graph/Number</td>
                <td>
                    <select multiple>
                        <option value="">Supervisor</option>
                        <option value="">G.M</option>
                        <option value="">OR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Name1</td>
                <td>Graph/Number</td>
                <td>
                    <select multiple>
                        <option value="">Supervisor</option>
                        <option value="">G.M</option>
                        <option value="">OR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Name1</td>
                <td>Graph/Number</td>
                <td>
                    <select multiple>
                        <option value="">Supervisor</option>
                        <option value="">G.M</option>
                        <option value="">OR</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>