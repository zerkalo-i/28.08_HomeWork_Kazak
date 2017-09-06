<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 30.08.2017
 * Time: 20:55
 */

if (!empty($_POST)) {
    echo '<p>Thank you for your data:</p><pre>' . var_export($_POST, 1) . '</pre>';
} else {
    echo '<p>Error: no data</p>';
}