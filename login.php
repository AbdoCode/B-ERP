<?phpsession_start();$pageTitle = 'Login';if (isset($_SESSION['userID'])) {    header('Location: daily-tasks.php');}include 'includes/templates/loginManagement.php';if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {    $id = $_POST['id'];    $password = $_POST['password'];    $branch = $_POST['branch'];    $stmt = $connect->prepare("SELECT staff.job_title_id FROM staff JOIN sys_users on staff.staff_id = sys_users.staff_id WHERE sys_users.user_id ='$id'");    $stmt->execute();    $row = $stmt->fetch();    $var = $row['job_title_id'];    $stmt = $connect->prepare("SELECT job_titles.job_title FROM job_titles WHERE job_title_id ='$var'");    $stmt->execute();    $row2 = $stmt->fetch();    $_SESSION['userJobTitle'] = $row2['job_title'];    if ($row['job_title_id'] == '1' || $row['job_title_id'] == '2') {        $stmt = $connect->prepare("SELECT user_id,username, password FROM sys_users WHERE user_id = '$id' AND password = '$password'");    } else {        $stmt = $connect->prepare("SELECT user_id,username, password FROM sys_users WHERE user_id = '$id' AND password = '$password'");    }    $stmt->execute();    $row = $stmt->fetch();    $check = $stmt-> rowCount();    if ($check > 0) {        $_SESSION['userID'] = $row['user_id'];        $_SESSION['userName'] = $row['username'];        header("Refresh:0.1; url=daily-tasks.php");    } else {        $notify = '<div class="alert alert-danger custom-alert">Invalid <strong>Password</strong>.</div>';    }}?>    <div class="login text-center">        <div class="container-fluid">            <div class="page-header">                <h1>Back-Packers Information System</h1>            </div>            <div class="row">                <div class="logoImage text-center col-sm-4 col-md-6 hidden-xs">                    <img class="img-responsive" src="layout/images/logo-black.png">                </div>                <div class="col-sm-8 col-md-6">                    <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">                        <div class="form-group">                            <label for="id" class="col-xs-1 control-label">ID</label>                            <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">                                <input type="text" class="form-control" id="id" placeholder="ID" name="id">                            </div>                        </div>                        <div class="form-group">                            <label for="password" class="col-xs-1 control-label">Password</label>                            <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">                            </div>                        </div>                        <div class="form-group">                            <label for="branch" class="col-xs-1 control-label">Branch</label>                            <div class="col-sm-10 col-sm-push-1 col-xs-9 col-xs-push-2">                                <select class="form-control" id="branch" name="branch">                                    <?php                                    $stmt = $connect->prepare("SELECT branch_id, branch_name FROM branches");                                    $stmt->execute();                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {                                        echo '<option value="'.$row['branch_id'].'">'.$row['branch_name'].'</option>';                                    }                                    ?>                                </select>                            </div>                        </div>                        <div class="form-group">                            <div class="col-sm-5 col-xs-6">                                <a href="forget-password.php" type="button" class="btn btn-warning btn-block forget-button">Forget Password</a>                            </div>                            <div class="col-sm-7 col-xs-6">                                <button type="submit" class="btn btn-success btn-block" name="login">Login</button>                            </div>                        </div>                        <?php                        if(isset($notify)) {                            echo $notify;                        }                        ?>                    </form>                </div>            </div>        </div>    </div><?phpinclude $templates . 'footer.php';?>