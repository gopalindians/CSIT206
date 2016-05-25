<?php

/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 00:59
 */


//GET | login | lecturer
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'login-lecturer.php') {

    session_start();
    if (isset($_SESSION['la']) && $_SESSION['la'] === 'yes') {
        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=dashboard-lecturer.php');
    } else {
        session_destroy();
        require '../views/includes/header.php';
        require '../views/lecturer/login-lecturer.php';
        require '../views/includes/footer.php';
    }


//POST | login | lecturer
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'login-lecturer.php') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (($username === 'CSIT206' || $username === 'csit206 ') && ($password === 'UGIT2016' || $password === 'ugit2016')) {
        session_start();
        $_SESSION['la'] = 'yes';

        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=dashboard-lecturer.php');
    } else {
        require '../views/includes/header.php';
        require '../views/lecturer/login-lecturer.php';
        require '../views/includes/footer.php';
    }

//GET | signup | lecturer
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'signup-lecturer.php') {
    require '../views/includes/header.php';
    require '../views/lecturer/signup-lecturer.php';
    require '../views/includes/footer.php';

//POST | signup |lecturer
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'signup-lecturer.php') {
    require '../views/includes/header.php';
    require '../views/lecturer/signup-lecturer.php';
    require '../views/includes/footer.php';


//POST | dashboard |lecturer
} else if (($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') && $_GET['r'] === 'dashboard-lecturer.php') {
    session_start();
    if (isset($_SESSION['la']) && $_SESSION['la'] === 'yes') {
        require '../views/includes/header.php';
        require '../views/lecturer/dashboard.php';
        require '../views/includes/footer.php';

    } else {
        session_destroy();
        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=login-lecturer.php');
    }


}