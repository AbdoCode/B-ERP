<?php
    session_start();
    $pageTitle = 'Home';
    include 'init.php';
    include 'navbar.php';
?>
<div class="view-income">
    <h2>View income</h2>
    <div class="hidden-xs">
        <div class="container-for-btn-group">
            <button class="btn btn-default" type="button" onclick="window.print()">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
            </button>
        </div>
    </div>
    <div class="receipt">
        <div class="head-of-receipt">
            <h5>Back-Packers Investment & Trading Co.</h5>
            <span>Egyptian Joint Stock Company (in accordance with Law No. 159 of 1981)</span>
            <span class="receipt-number">000672</span>
        </div>
        <div>
            <h3 class="text-center">Receipt of cash</h3>
            <div>
                <label>Name:</label>
                <span>Mohamed Maher Mahfouz</span>
            </div>
            <div>
                <label>Phone:</label>
                <span>01064323735</span>
            </div>
            <div>
                <label>Amount:</label>
                <span>860 LE</span>
            </div>
            <div>
                <label>For:</label>
                <span>Bus Fees</span>
            </div>
            <div>
                <label>Date:</label>
                <span>16 Sep 2017</span>
            </div>
        </div>
        <div class="receipt-sign text-center">
            <label>Reception Name</label><br/>
            <span>Sara</span>
        </div>
        <div class="clearfix"></div>
        <div class="tail-of-receipt">
            <h5>Address: Taha Hussein Street - University Towers - Tower 'A' Administrative Entrance - Minya</h5>
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <span>086/2331345</span>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-phone"></span>
                    <span>01129490033</span>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-phone"></span>
                    <span>01064457828</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>