<?php
	$content = isset($_GET['content']) ? json_decode(base64_decode($_GET['content']), true) : "";
    if (empty($content)) {
        exit();
    }
	
	$vcard = <<<EOT
BEGIN:VCARD
VERSION:2.1
FN:{$content['name']}
TITLE:{$content['duty']}
ORG:{$content['company']}
NOTE:{$content['remark']}
ADR:{$content['addr']}
TEL;CELL:{$content['phone']}
TEL;HOME;VOICE:{$content['tel']}
EMAIL:{$content['email']}
URL:{$content['url']}
END:VCARD
EOT;
	
	include "vendor/kairos/phpqrcode/qrlib.php";
	QRcode::png($vcard);