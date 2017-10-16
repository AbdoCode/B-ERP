<?php
    session_start();
    $pageTitle = 'Daily Statistics';
    include 'init.php';
    include 'navbar.php';
?>
    <div class="daily-statistics">
        <h2>Daily Statistics</h2>
        <canvas id="myChart"></canvas>
    </div>
<?php
    include $templates . 'footer.php';
?>