<?php
global $h_uri;
$h_uri = rtrim($_SERVER["REQUEST_URI"], '/');
$h_uri = substr($uri, strrpos($uri, '/') + 1);