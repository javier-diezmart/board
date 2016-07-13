<?php
define('CHAT_DB_HOST', '148.251.187.13');
define('CHAT_DB_USER', 'ejab');
define('CHAT_DB_PASSWORD', 'F4hTpQsxf5');
define('CHAT_DB_NAME', 'ejab');
define('CHAT_DB_PORT', '5432');
$chat_con = pg_connect('host=' . CHAT_DB_HOST . ' port=' . CHAT_DB_PORT . ' dbname=' . CHAT_DB_NAME . ' user=' . CHAT_DB_USER . ' password=' . CHAT_DB_PASSWORD . ' options=--client_encoding=UTF8');
$app_path = dirname(dirname(__FILE__));
require_once $app_path . '/config.inc.php';
require_once $app_path . '/libs/core.php';
$boards = pg_query_params($db_lnk, 'select * FROM boards', array());
while ($board = pg_fetch_assoc($boards)) {
    $argsString = "destroy_room board-" . $board['id'] . " conference.service.develag.com service.develag.com";
    echo "<pre></pre>\n./ejabberdctl " . $argsString;
}
$users = pg_query_params($db_lnk, 'select * FROM users where username != \'admin\'', array());
while ($user = pg_fetch_assoc($users)) {
    $argsString = "unregister " . $user['username'] . " service.develag.com";
    echo "<pre></pre>\n./ejabberdctl " . $argsString;
}
