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
                    <strong>
                        <span class="date">07 Oct 2017</span> /
                        <span class="time">7:44 PM</span>
                    </strong>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="mainCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mohamed<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe fa-fw fa-lg">
                                <span class="number-notification">3</span>
                            </i>
                        </a>
                        <ul class="dropdown-menu list-group">
                            <li>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Mohamed Exception to you</h4>
                                    <p class="list-group-item-text">Mohamed Accept to change any thing in system. but notify him after that. thank you Mohamed Accept to change any thing in system. but notify him after that. thank you</p>
                                    <span class="list-group-item-text text-warning"><strong>1 min ago.</strong></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Task From 1</h4>
                                    <p class="list-group-item-text">sadasdlaskdnasldnaskldnalskdnasldnasknklnk</p>
                                    <span class="list-group-item-text text-warning"><strong>1 min ago.</strong></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Task From 1</h4>
                                    <p class="list-group-item-text">sadasdlaskdnasldnaskldnalskdnasldnasknklnk</p>
                                    <span class="list-group-item-text text-warning"><strong>1 min ago.</strong></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Task From 1</h4>
                                    <p class="list-group-item-text">sadasdlaskdnasldnaskldnalskdnasldnasknklnk</p>
                                    <span class="list-group-item-text text-warning"><strong>1 min ago.</strong></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<section>
    <button type="button" class="viewAside" data-toggle="" data-target="#mainAside" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <aside class="mainAside col-sm-2" id="mainAside">
        <ul class="nav nav-pills nav-stacked">
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'daily-tasks.php') echo 'class="active"' ?>><a href="daily-tasks.php">Daily Tasks</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"' ?>><a href="activities.php">Activities</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'subject.php') echo 'class="active"' ?>>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Subjects <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="subject.php">English</a></li>
                    <li><a href="subject.php">Science</a></li>
                    <li><a href="subject.php">Math</a></li>
                    <li><a href="subject.php">Arabic</a></li>
                </ul>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'classes.php') echo 'class="active"' ?>>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Classes <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="classes.php">Class A</a></li>
                    <li><a href="classes.php">Class B</a></li>
                    <li><a href="classes.php">Class C</a></li>
                    <li><a href="classes.php">Class F</a></li>
                </ul>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'events.php') echo 'class="active"' ?>>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Events <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="events.php">Current</a></li>
                    <li><a href="events.php">Old</a></li>
                </ul>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'issues.php') echo 'class="active"' ?>>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Issues <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="issues.php?type=kid">Kids</a></li>
                    <li><a href="issues.php?type=administration">Administration</a></li>
                </ul>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'approvals-workplan.php' || basename($_SERVER['PHP_SELF']) == 'confirmation-workplan.php') echo 'class="active"' ?>>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Workplans <span class="glyphicon glyphicon-triangle-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="approvals-workplan.php">Approvals</a></li>
                    <li><a href="confirmation-workplan.php">Confirmation</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <div class="col-sm-10">