<?php
require_once 'db.php';

function get_user_data($conn, $id) {
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function handle_lookup($conn) {
    $id = $_GET['id'] ?? '';

    if (!is_numeric($id)) { http_response_code(400); exit; }
    get_user_data($conn, (int)$id);
}

$conn = db_connect();
handle_lookup($conn);