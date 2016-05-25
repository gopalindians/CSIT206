<?php
/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 02:17
 */

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require '../views/includes/header.php';
    require '../views/404.php';
    require '../views/includes/footer.php';

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require '../views/includes/header.php';
    require '../views/404.php';
    require '../views/includes/footer.php';
}