<?php

$jobTitle = $_SESSION['userJobTitle'];

?>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-responsive" alt="Logo" src="layout/images/logo.png" />
                </a>
                <div class="navbar-text">
                    <strong id="dateTime"></strong>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="mainCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo '<b>'.$jobTitle .'</b>'.' '.$_SESSION['userName'] ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="add-event.php">Add Event</a></li>
                            <li><a href="add-kid-issue.php">Add Issue for kid</a></li>
                            <li><a href="add-administration-issue.php">Add Issue for administration</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" onclick="showNotification()" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe fa-fw fa-lg">
                                <span class="number-notification">6</span>
                            </i>
                        </a>
                        <ul class="dropdown-menu list-group" id="notification"></ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<section>
    <button type="button" class="viewAside" data-target="#mainAside" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <aside class="mainAside col-sm-2" id="mainAside">
        <ul class="nav nav-pills nav-stacked">
            <li class="asideBack"><a href="#"><i class="fa fa-caret-left fa-fw fa-lg"></i>Back</a></li>
<!--            --><?php
//                $stmt = $connect->prepare("SELECT * FROM sys_tabs");
//                $stmt->execute();
//                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//                    if ($row['href'] == '#') {
//                        echo '';
//                    } else {
//                        echo '';
//                    }
//                }
//            ?>
            <?php

            if($jobTitle != 'Bus Worker')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'daily-tasks.php') echo 'class="active"';
                echo'><a href="daily-tasks.php">Daily Tasks</a></li>';
            }

            if($jobTitle == 'Teacher' || $jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Operation Manager' || $jobTitle == 'Accountant' || $jobTitle == 'Academy Head')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"';
                echo'><a href="activities.php">Activities</a></li>';
            }

            if($jobTitle == 'Teacher' || $jobTitle == 'CEO' || $jobTitle == 'G.M')
            {
                echo '<li ';
                if (basename($_SERVER['PHP_SELF']) == 'subject.php') echo 'class="active"';
                echo '><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Subjects <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="subject.php">English</a></li>
                    <li><a href="subject.php">Science</a></li>
                    <li><a href="subject.php">Math</a></li>
                    <li><a href="subject.php">Arabic</a></li>
                </ul>
            </li>';
            }

            if($jobTitle == 'Teacher' || $jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager' ||  $jobTitle == 'Academy Head')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'classes.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Classes <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="classes.php">Class A</a></li>
                    <li><a href="classes.php">Class B</a></li>
                    <li><a href="classes.php">Class C</a></li>
                    <li><a href="classes.php">Class F</a></li>
                </ul>
            </li>';
            }

            if($jobTitle == 'Teacher' || $jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Receptionist' || $jobTitle == 'Operation Manager' || $jobTitle == 'Academy Head')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'events.php' || basename($_SERVER['PHP_SELF']) == 'event-requests.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Events <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="event-requests.php">Event Requests</a></li>
                    <li><a href="events.php">Current</a></li>
                    <li><a href="events.php">Old</a></li>
                </ul>
            </li>';
            }

            if($jobTitle == 'Teacher' || $jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Receptionist' || $jobTitle == 'Operation Manager' || $jobTitle == 'Academy Head')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'issues.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Issues <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="issues.php?type=kid">Kids</a></li>
                <li><a href="issues.php?type=administration">Administration</a></li>
            </ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager' || $jobTitle == 'Academy Head')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'approvals-workplan.php' || basename($_SERVER['PHP_SELF']) == 'confirmation-workplan.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Workplans <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="approvals-workplan.php">Approvals</a></li>
                <li><a href="confirmation-workplan.php">Confirmation</a></li>
            </ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Bus Worker')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'bus-attend-am.php' || basename($_SERVER['PHP_SELF']) == 'bus-attend-pm.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Bus <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="bus-attend.php">A</a></li>
                <li><a href="bus-attend.php">B</a></li>
                <li><a href="bus-attend.php">C</a></li>
                <li><a href="bus-attend.php">X</a></li>
                <li><a href="bus-attend.php">F</a></li>
            </ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Receptionist' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'logistics.php' || basename($_SERVER['PHP_SELF']) == 'check-in-out.php' || basename($_SERVER['PHP_SELF']) == 'time-table.php' || basename($_SERVER['PHP_SELF']) == 'add-new-time-table.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Logistics <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="check-in-out.php">Check in/out</a></li>
                <li><a href="logistics.php">Logistics</a></li>
                <li><a href="time-table.php">Time tables</a></li>
            </ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Receptionist' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'kids-data.php' || basename($_SERVER['PHP_SELF']) == 'kids-grades.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Kids <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="kids-data.php">Kids Data</a></li>';

                if($jobTitle != 'Receptionist') echo'<li><a href="kids-grades.php">Kids Grades</a></li>';
            echo'</ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Receptionist' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'staff.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Staff <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="staff.php?type=current">Current Staff</a></li>
                <li><a href="staff.php?type=old">Old Staff</a></li>
            </ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'zone-reservations.php' || basename($_SERVER['PHP_SELF']) == 'zone-prices.php' || basename($_SERVER['PHP_SELF']) == 'zone-meeting.php' || basename($_SERVER['PHP_SELF']) == 'zone-courses.php') echo 'class="active"';
                echo'><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Zone <span class="glyphicon glyphicon-triangle-right"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="zone-reservations.php">Co-working Space</a></li>
                <li><a href="zone-meeting.php">Meeting</a></li>
                <li><a href="zone-courses.php">Courses</a></li>';

                if($jobTitle != 'Receptionist')echo'<li><a href="zone-prices.php">Zone Prices</a></li>';

            echo'</ul>
            </li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
            if (basename($_SERVER['PHP_SELF']) == 'statistics.php') echo 'class="active"';
                echo'><a href="statistics.php">Statistics</a></li>';
            }

            if($jobTitle == 'Teacher' || $jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Supervisor' || $jobTitle == 'Operation Manager' || $jobTitle == 'Bus Worker' || $jobTitle == 'Accountant' || $jobTitle == 'Academy Head')
            {
                echo'<li ';
            if (basename($_SERVER['PHP_SELF']) == 'assigned-tasks.php' || basename($_SERVER['PHP_SELF']) == 'view-assigned-task.php') echo 'class="active"';
                echo'><a href="assigned-tasks.php">Assigned Tasks</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'logistics-approval.php') echo 'class="active"';
                echo'><a href="logistics-approval.php">Logistics</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'performance-review.php') echo 'class="active"';
                echo'><a href="performance-review.php">Performance Review</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'tasks.php') echo 'class="active"';
                echo'><a href="tasks.php">Tasks</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'db-management.php') echo 'class="active"';
                echo'><a href="db-management.php">DB Management</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'reception-checkinout.php') echo 'class="active"';
                echo'><a href="reception-checkinout.php">Kids Check In/Out</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'staff-checkinout.php') echo 'class="active"';
                echo'><a href="staff-checkinout.php">Staff Check In/Out</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'customers.php') echo 'class="active"';
                echo'><a href="customers.php">Customers</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'drivers.php') echo 'class="active"';
                echo'><a href="drivers.php">Drivers</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'rec-income.php' || basename($_SERVER['PHP_SELF']) == 'add-rec-income.php') echo 'class="active"';
                echo'><a href="rec-income.php">Income</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'branches.php' || basename($_SERVER['PHP_SELF']) == 'add-new-branch.php') echo 'class="active"';
                echo'><a href="branches.php">Branches</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Operation Manager')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'c-staff.php') echo 'class="active"';
                echo'><a href="c-staff.php">Staff</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'new-term.php') echo 'class="active"';
                echo'><a href="new-term.php">New Term</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'users.php') echo 'class="active"';
                echo'><a href="users.php">Users</a></li>';
            }

            if($jobTitle == 'CEO' || $jobTitle == 'G.M' || $jobTitle == 'Receptionist')
            {
                echo'<li ';
                if (basename($_SERVER['PHP_SELF']) == 'store-book.php' || basename($_SERVER['PHP_SELF']) == 'p-store-book.php') echo 'class="active"';
                echo'><a href="store-book.php">Store Book</a></li>';
            }

            ?>

        </ul>
    </aside>
    <div class="col-sm-10 vis">
        <div style="margin-top: 10px" class="hidden-print"></div>
        <div class="container-for-btn-group hidden-print hidden-xs">
            <button class="btn btn-default" type="button" onclick="window.print()">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print Page
            </button>
        </div>