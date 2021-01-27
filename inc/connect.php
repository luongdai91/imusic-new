<?php
require $DIR.'mongodb/vendor/autoload.php';

$db_host = "localhost";  // DB Host
$db_name = "imusic";  // DB Name
$db_user = "imusic";  // DB User
$db_pass = "xyz123aaaa";  // DB Pass
$client = new MongoDB\Client("mongodb://$db_name:$db_pass@$db_host/$db_name");
$db_home = $client->imusic;
$home_collec = $db_home->tbl_settings;

$data_home = $home_collec->findOne([], [
        'projection' => [
        'website' => 1,
        'domain_name' => 1,
        'web_logo' => 1,
        'web_icon' => 1,
        'index' => 1,
        'sschema' => 1,
        'analytics' => 1,
        'anh_share' => 1,
        'cache' => 1,
    ],
]);
// $home = $data_home->website;
$namehome = $data_home->domain_name;
$web_logo = $data_home->web_logo;
$web_icon = $data_home->web_icon;
$anh_share = $data_home->anh_share;
$cached = $data_home->cache;
$home = 'http://get.nghenhac123.com';