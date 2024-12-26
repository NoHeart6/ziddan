<?php
$images = [
    'kemeja1' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157',
    'kemeja2' => 'https://images.unsplash.com/photo-1563630423918-b58f07336ac9',
    'dress1' => 'https://images.unsplash.com/photo-1502716119720-b23a93e5fe1b',
    'celana1' => 'https://images.unsplash.com/photo-1542272604-787c3835535d',
];

echo "<html><head><title>Test Gambar</title></head><body>";
foreach ($images as $name => $url) {
    echo "<div style='margin: 20px;'>";
    echo "<h3>$name</h3>";
    echo "<img src='$url' style='max-width: 300px;' />";
    echo "</div>";
}
echo "</body></html>"; 