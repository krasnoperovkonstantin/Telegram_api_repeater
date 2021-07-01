<?php
    $url = 'https://api.telegram.org/'.substr($_SERVER['REQUEST_URI'],9);
    $content = file_get_contents($url);
    echo $content;
