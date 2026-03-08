<?php
// router.php for PHP Built-in Web Server
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico|webp|svg|woff2?|ttf|eot)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path . '.php';

if ($path === '/debug-router') {
    die("DEBUG: path=$path, file=$file, exists=" . (file_exists($file) ? 'YES' : 'NO'));
}

if ($path === '/' || $path === '') {
    include __DIR__ . '/index.php';
    return true;
}

if (file_exists($file)) {
    include $file;
    return true;
}

// Fallback to exactly requested file if it exists
if (file_exists(__DIR__ . $path) && !is_dir(__DIR__ . $path)) {
    return false;
}

// 404
header("HTTP/1.0 404 Not Found");
echo "<h1>404 Not Found</h1><p>The page <code>$path</code> was not found.</p>";
?>
