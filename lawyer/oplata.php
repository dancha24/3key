<head>

    <meta name="yandex-verification" content="0e87b5b6426679a4"/>

    <meta charset="utf-8">
    <meta name="description"
          content="3Кей, юридические услуги">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Юридические услуги Кемерово">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>3Кей - оплата услуг</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f3bca98bf0.js" crossorigin="anonymous"></script>


    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <meta name="enot" content="6781598504534AIbrGuknTXEsrEHJvshheH2P_VODzTIS"/>
</head>


<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #131313">

    <div class="container-fluid pr-0">

        <a class="px-5 navbar-brand js-scroll-trigger" href="#page-top">
            <img src="img/logo.png" height="60">
        </a>

        <button class="navbar-toggler navbar-toggler-right mr-3 px-5" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true"
                aria-label="Toggle navigation">Меню
        </button>


        <div class="navbar-collapse text-center collapse" id="navbarResponsive" style="">
            <ul class="navbar-nav ml-auto pt-2">

                <li class="nav-item mb-2 mr-3">
                    <a style="color: #00E025" class="nav-link js-scroll-trigger" href="/">Перейти на главную</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<?php
         $ORDER_AMOUNT   = $_POST['oa'];
         $MERCHANT_ID   = 4778;                 // ID магазина
         $SECRET_WORD   = 'DqWLiwdmES6_2LVcyaybtLCUMcsVCGUI';   // Секретный ключ
         $PAYMENT_ID    = time();             // ID заказа (мы используем time(), чтобы был всегда уникальный ID)

         $sign = md5($MERCHANT_ID.':'.$ORDER_AMOUNT.':'.$SECRET_WORD.':'.$PAYMENT_ID);  //Генерация ключа
         ?>
<div class="pt-5 h-100 container-fluid bg-light">
    <div class="pt-5 row justify-content-center">
        <h1 class="pt-5">Оплата услуг</h1>
    </div>
    <div class="row justify-content-center">
        <!--        <div class="col">-->
        <form class="pt-5" method='get' action='https://enot.io/pay'>
                <div class="form-group">
                    <label for="sum">Сумма</label>
                    <input type="number" class="form-control" name='oa' id="sum" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="com">Коментарий</label>
                    <input type="text" class="form-control" name="c" id="com">
                </div>
            <input type='hidden' name='m' value='<?=$MERCHANT_ID?>'>
<!--            <input type='hidden' name='oa' value='<?=$ORDER_AMOUNT?>'>-->
            <input type='hidden' name='o' value='<?=$PAYMENT_ID?>'>
            <input type='hidden' name='s' value='<?=$sign?>'>
            <input type="submit" class="btn btn-danger" value="Вернуться на главную">
            <input type="submit" class="btn btn-success" value="Оплатить">
        </form>
        <!--        </div>-->
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/agency.min.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(64370398, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/64370398" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160620001-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-160620001-1');
</script>

</body>

</html>
