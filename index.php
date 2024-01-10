<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config = parse_ini_file('config.ini');
    echo json_encode($config);
}else{
    readfile('content.html');
}
?>