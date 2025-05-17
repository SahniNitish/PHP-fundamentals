<?php
// Add error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Basic routing
$uri = $_SERVER['REQUEST_URI'];

// Strip query string
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

// Remove trailing slash
$uri = rtrim($uri, '/');

// Route to the appropriate controller
try {
    switch ($uri) {
        case '':
        case '/':
            if (file_exists('controllers/index.php')) {
                require 'controllers/index.php';
            } else {
                throw new Exception('Index controller not found');
            }
            break;
        case '/about':
        case '/about.php':
            if (file_exists('controllers/about.php')) {
                require 'controllers/about.php';
            } else {
                throw new Exception('About controller not found');
            }
            break;
        case '/contact':
        case '/contact.php':
            if (file_exists('controllers/contact.php')) {
                require 'controllers/contact.php';
            } else {
                throw new Exception('Contact controller not found');
            }
            break;
        default:
            // 404 Not Found
            header('HTTP/1.1 404 Not Found');
            if (file_exists('views/404.php')) {
                require 'views/404.php';
            } else {
                echo '404 - Page Not Found';
            }
    }
} catch (Exception $e) {
    // Log the error (in a production environment)
    error_log($e->getMessage());
    
    // Show error page
    header('HTTP/1.1 500 Internal Server Error');
    echo 'An error occurred. Please try again later.';
}