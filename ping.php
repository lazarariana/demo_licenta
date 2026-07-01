<?php
require_once 'db.php';

function parse_host($input) {
    return trim($input);
}

function run_ping($host) {
    $output = shell_exec("ping -c 1 " . $host);

    render("<pre>" . $host . ": " . $output . "</pre>");
}

function handle_ping() {
    $target = $_GET['host'] ?? '';
    $host   = parse_host($target);
    run_ping($host);
}

handle_ping();
