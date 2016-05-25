<?php
/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 00:59
 */

//GET | login |student
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'login-student.php') {
    require '../views/includes/header.php';
    require '../views/student/login-student.php';
    require '../views/includes/footer.php';

//POST | login |student
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'login-student.php') {
    require '../views/includes/header.php';
    require '../views/student/login-student.php';
    require '../views/includes/footer.php';

//GET | signup |student
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'signup-student.php') {
    require '../views/includes/header.php';
    require '../views/student/signup-student.php';
    require '../views/includes/footer.php';

//POST | signup | student
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'signup-student.php') {
    require '../views/includes/header.php';
    require '../views/student/signup-student.php';
    require '../views/includes/footer.php';
}