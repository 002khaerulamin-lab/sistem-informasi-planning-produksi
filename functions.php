<?php
session_start();

// Variabel global untuk simpan style dan body
$__style = '';
$__body = '';

function style($callback)
{
    global $__style;
    ob_start();
    $callback();
    $__style = ob_get_clean();
}

function body($callback)
{
    global $__body;
    ob_start();
    $callback();
    $__body = ob_get_clean();
}

function render($title = 'My Website')
{
    global $__style, $__body;
    include __DIR__ . '/layout.php';
}