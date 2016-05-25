<?php
/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 01:24
 */


//GET index
if ($_SERVER['REQUEST_METHOD'] === 'GET' && ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php')) {
    require 'controllers/indexController.php';

    return true;
}

/*LECTURER-------------------------*/
//GET | login | lecturer
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'login-lecturer.php') {
    require '../controllers/lecturerController.php';
    return true;
}


//POST | login | lecturer
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'login-lecturer.php') {
    require '../controllers/lecturerController.php';
    return true;
}

//GET | dashboard | lecturer
if (($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') && $_GET['r'] === 'dashboard-lecturer.php') {
    require '../controllers/lecturerController.php';
    return true;
}


//GET  | logout | lecturer
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'logout-lecturer.php') {

    session_start();

    $_SESSION['u'] = "";
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php');
    return true;
}

/*ENDS LECTURER-------------------------*/


/*STUDENT-------------------------*/
//GET | login | student
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'login-student.php') {
    require '../controllers/studentController.php';
    return true;
}

//POST | login | student
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'login-student.php') {
    require '../controllers/studentController.php';
    return true;
}


//GET | signup | student
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'signup-student.php') {
    require '../controllers/studentController.php';
    return true;
}


//POST | signup | student
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'signup-student.php') {
    require '../controllers/studentController.php';
    return true;
}


//POST ||GET  | survey | student
if (($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') && $_GET['r'] === 'survey.php') {
    require '../controllers/studentController.php';
    return true;
}


//GET  | logout | student
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'logout-student.php') {

    session_start();

    $_SESSION['la'] = "";
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php');
    return true;
}



/*ENDS STUDENT-------------------------*/


/*ERROR handling*/
//http_response_code(404);

if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../controllers/errorController.php';
}



