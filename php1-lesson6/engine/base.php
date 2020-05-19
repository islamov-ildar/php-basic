<?php
function redirect(string $url) {
    header("Location: {$url}");
    exit;
}

function get($name) {
    return htmlspecialchars(strip_tags( $_GET[$name]));
}

function post($name) {
    return htmlspecialchars(strip_tags( $_POST[$name]));
}