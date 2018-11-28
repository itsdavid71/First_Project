<?php

require_once '../models/user.php';

$user = getUser($_GET['id']);
// var_dump($user);
require_once '../views/user_profile.php';
