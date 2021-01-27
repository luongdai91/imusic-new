<?php
$id = $_GET['id'];

$json_get_song_detail = file_get_contents("https://imusic.vn/webapi/play.php?id_song=$id");
$data_song = json_decode($json_get_song_detail);
$name = $data_song->name;
$singer = $data_song->singer;
$source = $data_song->play_url;

header("Content-Transfer-Encoding: binary");
header("Content-Type: audio/mpeg");
header('Content-Disposition: attachment; filename="imusic.vn - '.$name.' - ' . $singer . '.mp3"');
ob_clean();
flush();

readfile($source);
?>