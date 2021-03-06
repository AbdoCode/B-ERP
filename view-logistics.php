<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
    include 'navbar.php';
?>
<div class="view-logistics">
    <h2>view logistics</h2>
    <div class="info text-center">
        <div class="col-sm-3">
            <label>Date</label>
            <p>17 Sep 2017</p>
        </div>
        <div class="col-sm-3">
            <label>Dead Line</label>
            <p>30 Sep 2017</p>
        </div>
        <div class="col-sm-3">
            <label>Requester name</label>
            <p>Doaa</p>
        </div>
        <div class="col-sm-3">
            <label>Forward To</label>
            <p>Hoda</p>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered ">
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
        <div class="col-xs-12">
            <form>
                <div class="form-group col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-success btn-block">Approve</button>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-danger btn-block">Reject</button>
                </div>
                <div class="form-group col-sm-4 col-xs-12">
                    <textarea class="form-control" placeholder="Type your Comment" rows="3"></textarea>
                </div>
                <div class="form-group col-sm-push-8 col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-warning btn-block">Send back for modification</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>