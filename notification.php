<?php
    include_once 'includes/templates/DB_connect.php';
    $stmt = $connect->prepare("SELECT * FROM notifications");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<li>
                <a href="'.$row['not_link'].'" class="list-group-item">
                    <h4 class="list-group-item-heading">Mohamed Exception to you</h4>
                    <p class="list-group-item-text">'.$row['not_content'].'</p>
                    <span class="list-group-item-text text-warning"><strong>'.$row['not_date'].'</strong></span>
                </a>
            </li>';
    }
?>