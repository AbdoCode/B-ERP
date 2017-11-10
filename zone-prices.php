<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="zone-prices add-forms">
    <h2>zone prices</h2>
    <form class="form-horizontal">
        <div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped price-table">
                    <thead>
                    <tr>
                        <th class="col-sm-7">Name</th>
                        <th class="col-sm-5">Price</th>
                    </tr>
                    </thead>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="number" class="form-control" placeholder="Price in LE..."></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="number" class="form-control" placeholder="Price in LE..."></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="number" class="form-control" placeholder="Price in LE..."></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-push-4 col-xs-12">
                <button class="btn btn-success btn-block">Done</button>
            </div>
        </div>
    </form>
</div>
<?php
    include $templates . 'footer.php';
?>