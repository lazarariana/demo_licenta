<?php
require_once 'db.php';

function parse_host($input) {
    return trim($input);
}

function run_ping($host) {
    $safe_host = escapeshellarg($host);
    $output    = shell_exec("ping -c 1 " . $safe_host);

    render("<pre>" . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . ": " . $output . "</pre>");
}

function handle_ping() {
    $target = $_GET['host'] ?? '';
    $host   = parse_host($target);
    run_ping($host);
}

handle_ping();
