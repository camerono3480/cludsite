<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require '../views/home.php';
        break;
    // About page
    case '/signin':
        require '../views/signin.php';
        break;
    case '/login':
      require '../views/login.php';
      break;
    case '/home':
        require '../views/index.php';
      break;
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}
?>
