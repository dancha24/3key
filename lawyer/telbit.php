<?php
$url = 'https://bitrix24public.com/avtopark.bitrix24.ru/form/28/kxdwn0/';
$data = array('LEAD_NAME' => $_POST['name'], 'LEAD_PHONE' => 'Неизвестен');
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
?>