<?php

$type = 1; // Locker | 2 Link | 3 Feed

$locker = '<script type="text/javascript" id="ogjs" src="https://www.areyouahuman.co/contentlockers/load.php?id=hjdeyghdbhdhkd"></script>';
$link = 'https://domain.com';
$feed = '<div class="ludy-options" data-offers="8yj13ea5Yl"></div><script type="text/javascript" src="http:////www.lookaloca.com/8yj13ea5Yl"></script>';

if($_POST){
	echo json_encode(array('type' => $type, 'locker' => $locker, 'link' => $link, 'feed' => $feed));
} 
?>