<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Gallery;

$galleries = Gallery::all();
$deletedCount = 0;

foreach ($galleries as $gallery) {
    $fullPath = public_path($gallery->image);
    
    // Check if file exists, is readable, and has size > 1000 bytes and valid image dimensions
    if (!file_exists($fullPath) || filesize($fullPath) < 1000 || !@getimagesize($fullPath)) {
        echo "Removing broken/blank image: " . $gallery->image . " (ID: " . $gallery->id . ")\n";
        $gallery->delete();
        if (file_exists($fullPath)) {
            @unlink($fullPath);
        }
        $deletedCount++;
    }
}

echo "Finished cleanup. Removed {$deletedCount} invalid/blank gallery records.\n";
