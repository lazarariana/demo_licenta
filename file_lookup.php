<?php
require_once 'db.php';

function get_user_data($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = " . $id;
    mysqli_query($conn, $sql);
}

function handle_lookup($conn) {
    $id = $_GET['id'] ?? '';

    get_user_data($conn, $id);

    if (is_numeric($id)) {
        get_user_data($conn, $id);
    }

    get_user_data($conn, 42);
}

$conn = db_connect();
handle_lookup($conn);