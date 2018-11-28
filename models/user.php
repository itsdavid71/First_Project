<?php

require_once '../db.php';

function getAllUsers() {
    global $mysqli;

    $query = 'SELECT * FROM users';
    $result = $mysqli->query($query);

    $users = [];
    while($user = $result->fetch_assoc()) {
        $users[] = $user;
    }

    return $users;
}

function getUser($id) {
    global $mysqli;

    $query = "SELECT * FROM users WHERE user_id = $id";
    $result = $mysqli->query($query);

    $user = $result->fetch_assoc();
    return $user;
}


