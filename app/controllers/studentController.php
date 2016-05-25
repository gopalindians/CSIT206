<?php
/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 00:59
 */

//GET | login |student
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'login-student.php') {

    session_start();

    if (isset($_SESSION['la'])) {
        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=survey.php');
    } else {
        require '../views/includes/header.php';
        require '../views/student/login-student.php';
        require '../views/includes/footer.php';
    }

//POST | login |student
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'login-student.php') {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $ifExists = false;
    $error = [];
    $i = 0;
    try {
        $db = new PDO('mysql:host=localhost;dbname=csit206;charset=utf8', 'root', '');

        $stmt = $db->prepare("SELECT * FROM account WHERE user_name = ? AND  password = md5(?)");
        if ($stmt->execute(array($userName, $password))) {
            while ($row = $stmt->fetch()) {

                if (count($row) > 0) {
                    $ifExists = true;
                } else {
                    $ifExists = false;
                }
            }
        }
    } catch (PDOException  $e) {
        echo 'Error: ' . $e;
    }
    if ($ifExists) {
        session_start();
        $_SESSION['la'] = $userName;
        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=survey.php');
    } else {
        $error[$i++]['error'] = 'Username is empty!';
        require '../views/includes/header.php';
        require '../views/student/login-student.php';
        require '../views/includes/footer.php';

    }
//GET | signup |student
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['r'] === 'signup-student.php') {


    session_start();

    if (isset($_SESSION['la'])) {
        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=survey.php');
    } else {
        require '../views/includes/header.php';
        require '../views/student/signup-student.php';
        require '../views/includes/footer.php';
    }


//POST | signup | student
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['r'] === 'signup-student.php') {


    $userName = $_POST['username'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $password = $_POST['password'];

    $error = [];
    $i = 0;
    $userNameCheck = '';
    if ($userName === '') {
        $error[$i++]['error'] = 'Username is empty!';
    }

    if ($firstName === '') {
        $error[$i++]['error'] = 'First name is empty!';
    }

    if ($lastName === '') {
        $error[$i++]['error'] = 'Last name is empty!';
    }

    if ($password === '') {
        $error[$i++]['error'] = 'Password is empty!';
    }


    if (count($error) === 0) {
        try {
            $db = new PDO('mysql:host=localhost;dbname=csit206;charset=utf8', 'root', '');

            $stmt = $db->prepare("SELECT * FROM account WHERE user_name = ?");
            if ($stmt->execute(array($userName))) {
                while ($row = $stmt->fetch()) {
                    if (count($row) > 0) {
                        $userNameCheck = true;
                    } else {
                        $userNameCheck = false;
                    }
                }
            }
        } catch (PDOException  $e) {
            echo "Error: " . $e;
        }

        if ($userNameCheck === true) {
            $error[$i++]['error'] = 'Username is already used';
            require '../views/includes/header.php';
            require '../views/student/signup-student.php';
            require '../views/includes/footer.php';

            return false;

        } else {
            $last_user_id = $database->insert('account', [
                'user_name' => $userName,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'password' => md5($password),
            ]);
            $success[$i++]['success'] = 'Account created successfully!';
            require '../views/includes/header.php';
            require '../views/student/signup-student.php';
            require '../views/includes/footer.php';

            return false;

        }

    } else {

        require '../views/includes/header.php';
        require '../views/student/signup-student.php';
        require '../views/includes/footer.php';

        return false;
    }


    //GET || POST |
} else if (($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') && $_GET['r'] === 'survey.php') {
    session_start();


    if (isset($_SESSION['la'])) {

        $userdata = $database->select("account", [
            "user_name",
            "first_name",
            "last_name",
        ], [
            "user_name[=]" => $_SESSION['la']
        ]);

        require '../views/includes/header.php';
        require '../views/student/survey.php';
        require '../views/includes/footer.php';
    } else {
        header("Location: " . $_SERVER['REMOTE_HOST'] . '/index.php?r=login-student.php');
    }
}