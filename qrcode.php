<?php
    if (empty($_POST)) {
        exit();
    }
	$url = "img.php?content=" . base64_encode(json_encode($_POST));
	exit($url);