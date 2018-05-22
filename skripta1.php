<?php
try {
    $phar = new PharData('ffmpeg-snapshot.tar.bz2');
    $phar->extractTo('ffmpeg'); // extract all files
} catch (Exception $e) {
    // handle errors
}
?>