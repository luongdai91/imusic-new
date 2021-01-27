<?php
$DIR='';
include 'inc/connect.php';

$id = $_GET['id'];
$row = $db_home->tb_baihat->findOne(['id' => "$id"], [
  'projection' => [

    'urlgoc' => 1
]
]);
$urlgoc = $row->urlgoc;
$listen_link = "http://14.225.7.142/baihat.php?url=$urlgoc";
$json_data = json_decode(file_get_contents($listen_link));
$source = $json_data[0]->source;
// if (!empty($row['play_url'])) {
// 	$link_source = 'http://api.skysoundtrack.vn/song/detail?client_id=10&token=eyJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiIyNjcxIiwibmJmIjoxNTczNDQ1MzUwLCJleHAiOjE2MDQ5ODEzNTAsImlhdCI6MTU3MzQ0NTM1MCwiZGlkIjoiU0tZTVVTSTEwOTFFN0JGQUVGQjY3M0M3MkVGMzJFQTUiLCJqdGkiOiIxNTEzYmIyN2Y1NmQ0NzZjYmM3ZGJkNDAxZGM2ZjIyMyJ9.EQ5bIPnjnbkYDpFs9l5cIIq8p-tsQ3gTcr_nnaQcXOQ&timestamp=1573457151446&checksum=f883c644e14abd69882a4ed023b6c7955e03abe682ed99eea07d23c88279ed28&skyKey=' . $row['play_url'];
// 	$data_source = file_get_contents($link_source);
// 	$arrData_source = json_decode($data_source);
// 	$source = $arrData_source->data[0]->streamUrl;
// } else {
// 	$source = 'http://dl.downloadlagu247.com/?id=' . $row['api_youtube'];
// }

header("Location:$source");
// header("Content-Transfer-Encoding: binary");
// header("Content-Type: audio/mpeg");
// header('Content-Disposition: attachment; filename="' . $row['name'] . ' - ' . $row['author'] . '.mp3"');
// ob_clean();
// flush();

// readfile($source);
exit();
