<?php
$dir = new RecursiveDirectoryIterator(__DIR__);
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php' && $file->getFilename() !== 'replace.php') {
        $content = file_get_contents($file->getPathname());
        $original = $content;
        
        $content = preg_replace('/href="\<\?= BASE_URL \?>index\.php"/', 'href="<?= BASE_URL ?>"', $content);
        $content = preg_replace('/(href="\<\?= BASE_URL \?>[a-zA-Z0-9_-]+)\.php"/', '$1"', $content);
        
        if ($content !== $original) {
            file_put_contents($file->getPathname(), $content);
            echo "Updated: " . $file->getPathname() . "\n";
        }
    }
}
echo "Done.\n";
?>
