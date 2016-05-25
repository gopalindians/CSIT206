<?php
/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 00:55
 */

if ($_SERVER['REQUEST_URI'] === '/') {
    require '../views/includes/header.php';
    require '../views/index.php';
    require '../views/includes/footer.php';

} else {
    
    require '../views/includes/header.php';
    require '../views/index.php';
    require '../views/includes/footer.php';
}