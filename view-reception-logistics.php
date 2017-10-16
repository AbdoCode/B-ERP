<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="view-reception-logistics">
    <h2>Reception Logistics</h2>
    <div class="info text-center">
        <div class="col-sm-4">
            <label>Date</label>
            <p>17 Sep 2017</p>
        </div>
        <div class="col-sm-4">
            <label>Requester name</label>
            <p>Doaa</p>
        </div>
        <div class="col-sm-4">
            <label>Forward To</label>
            <p>Hoda</p>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-5">Type</th>
                <th class="col-sm-3">Quantity</th>
                <th class="col-sm-3">Price</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Papers</td>
                <td>50</td>
                <td>800LE</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Papers</td>
                <td>50</td>
                <td>800LE</td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="4" class="text-center">Total</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1600LE</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <button class="btn btn-success btn-block">Approve</button>
        </div>
        <div class="col-sm-8">
            <textarea class="form-control" placeholder="type your comment..."></textarea>
            <button class="btn btn-warning btn-block">Send to modify</button>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>