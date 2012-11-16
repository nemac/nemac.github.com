<?php
// Generation d'un bandeau aleatoire.
header("Content-type: image/jpeg");
header("location:".'thumbnails/thumb_'.rand(1,20).'.jpg');
?>