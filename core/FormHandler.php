<?php
/**
 * This file manage input from the client-side via AJAX-request.
 *
 * @package: feedback
 * @version: 1.0
 * @author: wildwind | George Zakharov
 */

$name = $_POST['inputName'];
$number = $_POST['inputNumber'];
$email = $_POST['inputEmail'];
$note = $_POST['notes'];
$isClient = $_POST['isClient'];