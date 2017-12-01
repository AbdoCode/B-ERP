<?php

// Error Reporting
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include 'includes/templates/DB_connect.php';

if (!isset($_SESSION['userID'])) {

	header('Location: login.php');
}

// Routes
$templates 	= 'includes/templates/'; // Templates Directory
$functions	= 'includes/functions/'; // Functions Directory
$pages	= 'includes/pages/'; // Pages Directory
$css 	= 'layout/css/'; // Css Directory
$js 	= 'layout/js/'; // Js Directory

// Include The Important Files
include $functions . 'functions.php';
include $templates . 'header.php';