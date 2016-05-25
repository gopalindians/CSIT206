<?php
/**
 * Created by PhpStorm.
 * User: gopalindians
 * Date: 25-05-2016
 * Time: 00:57
 */


$database = new medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'csit206',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // [optional]
    'port' => 3306,

    // [optional] Table prefix
    /*'prefix' => 'PREFIX_',*/

    // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
