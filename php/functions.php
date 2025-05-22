<?php
/**
 * Helper functions for the website
 */

// Function to make paths cleaner
function view($name, $data = []) {
    extract($data);
    return require "views/{$name}.php";
}

// Function to redirect
function redirect($path) {
    header("Location: {$path}");
    exit();
}

// Function to dump and die - useful for debugging
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}