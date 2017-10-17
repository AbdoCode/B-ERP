<?php
    session_start();
    $pageTitle = 'Daily Statistics';
    include 'init.php';
    include 'navbar.php';
?>
    <div class="daily-statistics row">
        <h2>Daily Statistics</h2>
        <div class="write-stat row">
            <div class="stat col-sm-3 col-xs-6">
                <h4>Total Kids</h4>
                <span class="number">231,809</span>
            </div>
            <div class="stat col-sm-3 col-xs-6">
                <h4>Total Teacher</h4>
                <span class="number">405,895</span>
            </div>
            <div class="stat col-sm-3 col-xs-6">
                <h4>Total Teacher</h4>
                <span class="number">405,895</span>
            </div>
            <div class="stat col-sm-3 col-xs-6">
                <h4>Total Teacher</h4>
                <span class="number">405,895</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="chart-container">
                <canvas id="pie"></canvas>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="chart-container">
                <canvas id="doughnut"></canvas>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="chart-container">
                <canvas id="bar"></canvas>
            </div>
        </div>
    </div>
<?php
    include $templates . 'footer.php';
?>