<?php
$str = "http://www.youtube.com/watch?v=ZQeKiDpbd-M&feature=youtube_gdata_player";
preg_match('/\?v=(.*)\&/',$str, $matches);
$vidoeId = $matches[1];
print_r($vidoeId);
