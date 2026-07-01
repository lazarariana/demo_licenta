<?php

function db_connect() {
    return mysqli_connect(
        getenv('DB_HOST') ?: 'localhost',
        getenv('DB_USER') ?: 'root',
        getenv('DB_PASS') ?: '',
        getenv('DB_NAME') ?: 'demo'
    );
}

function db_query($conn, $sql) {
    return mysqli_query($conn, $sql);
}

function render($html) {
    echo "<div class='result'>" . $html . "</div>";
}
