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
<head>

    <meta charset="utf-8">
    <meta name="description"
          content="3Кей, юридические услуги">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Юридические услуги Кемерово">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>3Кей</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f3bca98bf0.js" crossorigin="anonymous"></script>


    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
</head>
<body>
<div align="center" class="row justify-content-center mt-5">
    <div class="col-12 align-items-center">
        <h1>Заявка отправленна</h1>
        <p>Наш юрист свяжется с вами в ближайшее время</p>
        <a href="https://xn--h1apee0d.xn--3-jtbmc.xn--p1ai/" ><button class="mt-3 btn btn-success">Вернуться на главную</button></a>
    </div>
</div>
</body>