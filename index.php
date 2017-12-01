<?php
    session_start();
    $pageTitle = 'Home';
    include 'deploy.php';
?>
<div class="index">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img class="img-responsive" alt="Logo" src="layout/images/logo.png" />
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php" class="">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="layout/images/03.jpg" alt="Image 1">
                <div class="carousel-caption hidden-sm">
                    <p>Transition animations not supported in Internet Explorer 8 &amp; 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                </div>
            </div>
            <div class="item">
                <img src="layout/images/login.jpg" alt="Image 2">
                <div class="carousel-caption hidden-sm">
                    <p>Transition animations not supported in Internet Explorer 8 &amp; 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="about-us container text-center">
        <div class="row">
            <p class="lead col-xs-12">This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. This is organization. </p>
        </div>
    </div>
    <div class="video-div text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <iframe src="https://www.youtube.com/embed/oZRBPkLKYVs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright container text-right">
        <div class="row">
            <label>Copyright &copy; <?php echo date('Y');?> 'Back-Packers'. Developed by <abbr title="Mohamed Maher"><a href="https://www.facebook.com/mohamedmaher95" target="_blank">M</a></abbr>&amp;<abbr title="Abdelrahman Mohamed"><a href="https://www.facebook.com/abdo.code1" target="_blank">A</a></abbr></label>
        </div>
    </div>
</div>
<?php
    include $templates . 'footer.php';
?>