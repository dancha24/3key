
<head>

    <meta name="yandex-verification" content="0e87b5b6426679a4" />

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


    <script type="text/javascript">

        $(function () {

            $(window).scroll(function () {

                if ($(this).scrollTop() != 0) {

                    $('#toTop').fadeIn();

                } else {

                    $('#toTop').fadeOut();

                }

            });

            $('#toTop').click(function () {

                $('body,html').animate({scrollTop: 0}, 800);

            });

        });

    </script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
<meta name="enot" content="6781598504534AIbrGuknTXEsrEHJvshheH2P_VODzTIS" />
</head>


<body id="page-top">
<script language="php">
   echo ("вариант вставки кода 2");
</script>
<? echo ("вариант вставки кода 3"); ?>
<?= текст ?> То же самое, что и "<? echo текст ?>"
<!-- Navigation -->
<!--<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

    <div class="container-fluid">

        <a class="px-5 navbar-brand" href="#page-top">
            <img src="img/logo.png" height="60">
        </a>

        <button class="navbar-toggler navbar-toggler-right mr-3 px-5" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true"
                aria-label="Toggle navigation">Меню
        </button>


        <div class="navbar-collapse text-center collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto pt-2">
                <li class="nav-item pt-1">
                    <a class="nav-link" href="#service">Услуги</a>
                </li>
                <li class="nav-item pt-1">
                    <a class="nav-link" href="/prise.html">Прайс</a>
                </li>
                <li class="nav-item pt-1">
                    <a class="nav-link" href="#about">О нас</a>
                </li>
                <li class="nav-item pt-1">
                    <a class="nav-link" href="#contacts">Контакты</a>
                </li>
                <li class="nav-item">
                    <div class="pr-4 pl-2 row justify-content-center align-items-center no-gutters">
                        <div class="col-4 pr-2 d-none d-lg-block"><a href="#zvonok" class="text-cord"><img
                                class="img-fluid" src="img/tel.png">
                        </a></div>
                        <div class="col-8">
                            <p class="text-white"><b>+7-384-265-01-20</b></p>
                            <p class="text-white"><small>ПН-ПТ 10:00 - 19:00</small></p>
                            <p class="text-white"><small>СБ-ВС 12:00 - 14:00</small></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>-->

<?php
         $MERCHANT_ID   = 15;                 // ID магазина
         $SECRET_WORD   = 'Секретный ключ';   // Секретный ключ
         $ORDER_AMOUNT  = 10;                 // Сумма заказа
         $PAYMENT_ID    = time();             // ID заказа (мы используем time(), чтобы был всегда уникальный ID)

         $sign = md5($MERCHANT_ID.':'.$ORDER_AMOUNT.':'.$SECRET_WORD.':'.$PAYMENT_ID);  //Генерация ключа
         ?>

<form method='get' action='https://enot.io/pay'>
    <input type='hidden' name='m' value='<?=$MERCHANT_ID?>'>
    <input type='hidden' name='oa' value='<?=$ORDER_AMOUNT?>'>
    <input type='hidden' name='o' value='<?=$PAYMENT_ID?>'>
    <input type='hidden' name='s' value='<?=$sign?>'>
    <input type="submit" value="Оплатить">
</form>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/scrolle.js"></script>

<!-- Plugin JavaScript -->
<!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Contact form JavaScript -->
<!--<script src="js/jqBootstrapValidation.js"></script>-->
<!--<script src="js/contact_me.js"></script>-->

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

<script src="js/script.js"></script>
<!--<script src="js/autoadvance.js"></script>-->
<!--<script src="js/gulpfile.js"></script>-->

<div id="toTop"><i class="fas fa-arrow-alt-circle-up"></i></div>

<script>
    (function (w, d, u) {
        var s = d.createElement('script');
        s.async = true;
        s.src = u + '?' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn.bitrix24.ru/b7087087/crm/site_button/loader_10_eejgve.js');
</script>

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

<!-- Скрипт подключения сайта битрикс -->
<script>
    (function (w, d, u) {
        var s = d.createElement('script');
        s.async = true;
        s.src = u + '?' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn.bitrix24.ru/b7087087/crm/tag/call.tracker.js');
</script>


<script type="text/javascript">
    $(document).ready(function () {
        if (window.location.href.indexOf("franky") > -1) {
            $('#collapse14').collapse({
                show: true
            })
        }
    });
</script>


<script>
    'use strict';
    var multiItemSlider = (function () {

        function _isElementVisible(element) {
            var rect = element.getBoundingClientRect(),
                vWidth = window.innerWidth || doc.documentElement.clientWidth,
                vHeight = window.innerHeight || doc.documentElement.clientHeight,
                elemFromPoint = function (x, y) {
                    return document.elementFromPoint(x, y)
                };
            if (rect.right < 0 || rect.bottom < 0
                || rect.left > vWidth || rect.top > vHeight)
                return false;
            return (
                element.contains(elemFromPoint(rect.left, rect.top))
                || element.contains(elemFromPoint(rect.right, rect.top))
                || element.contains(elemFromPoint(rect.right, rect.bottom))
                || element.contains(elemFromPoint(rect.left, rect.bottom))
            );
        }

        return function (selector, config) {
            var
                _mainElement = document.querySelector(selector),
                _sliderWrapper = _mainElement.querySelector('.slider__wrapper'),
                _sliderItems = _mainElement.querySelectorAll('.slider__item'),
                _sliderControls = _mainElement.querySelectorAll('.slider__control'),
                _sliderControlLeft = _mainElement.querySelector('.slider__control_left'),
                _sliderControlRight = _mainElement.querySelector('.slider__control_right'),
                _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width),
                _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width),
                _html = _mainElement.innerHTML,
                _indexIndicator = 0,
                _maxIndexIndicator = _sliderItems.length - 1,
                _indicatorItems,
                _positionLeftItem = 0,
                _transform = 0,
                _step = _itemWidth / _wrapperWidth * 100,
                _items = [],
                _interval = 0,
                _states = [
                    {active: false, minWidth: 0, count: 1},
                    {active: false, minWidth: 576, count: 2},
                    {active: false, minWidth: 992, count: 3},
                    {active: false, minWidth: 1200, count: 4},
                ],
                _config = {
                    isCycling: false,
                    direction: 'right',
                    interval: 5000,
                    pause: true
                };

            for (var key in config) {
                if (key in _config) {
                    _config[key] = config[key];
                }
            }

            _sliderItems.forEach(function (item, index) {
                _items.push({item: item, position: index, transform: 0});
            });

            var _setActive = function () {
                var _index = 0;
                var width = parseFloat(document.body.clientWidth);
                _states.forEach(function (item, index, arr) {
                    _states[index].active = false;
                    if (width >= _states[index].minWidth)
                        _index = index;
                });
                _states[_index].active = true;
            }

            var _getActive = function () {
                var _index;
                _states.forEach(function (item, index, arr) {
                    if (_states[index].active) {
                        _index = index;
                    }
                });
                return _index;
            }

            var position = {
                getItemMin: function () {
                    var indexItem = 0;
                    _items.forEach(function (item, index) {
                        if (item.position < _items[indexItem].position) {
                            indexItem = index;
                        }
                    });
                    return indexItem;
                },
                getItemMax: function () {
                    var indexItem = 0;
                    _items.forEach(function (item, index) {
                        if (item.position > _items[indexItem].position) {
                            indexItem = index;
                        }
                    });
                    return indexItem;
                },
                getMin: function () {
                    return _items[position.getItemMin()].position;
                },
                getMax: function () {
                    return _items[position.getItemMax()].position;
                }
            }

            var _transformItem = function (direction) {
                var nextItem, currentIndicator = _indexIndicator;
                if (!_isElementVisible(_mainElement)) {
                    return;
                }
                if (direction === 'right') {
                    _positionLeftItem++;
                    if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) > position.getMax()) {
                        nextItem = position.getItemMin();
                        _items[nextItem].position = position.getMax() + 1;
                        _items[nextItem].transform += _items.length * 100;
                        _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
                    }
                    _transform -= _step;
                    _indexIndicator = _indexIndicator + 1;
                    if (_indexIndicator > _maxIndexIndicator) {
                        _indexIndicator = 0;
                    }
                }
                if (direction === 'left') {
                    _positionLeftItem--;
                    if (_positionLeftItem < position.getMin()) {
                        nextItem = position.getItemMax();
                        _items[nextItem].position = position.getMin() - 1;
                        _items[nextItem].transform -= _items.length * 100;
                        _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
                    }
                    _transform += _step;
                    _indexIndicator = _indexIndicator - 1;
                    if (_indexIndicator < 0) {
                        _indexIndicator = _maxIndexIndicator;
                    }
                }
                _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
                _indicatorItems[currentIndicator].classList.remove('active');
                _indicatorItems[_indexIndicator].classList.add('active');
            }

            var _slideTo = function (to) {
                var i = 0, direction = (to > _indexIndicator) ? 'right' : 'left';
                while (to !== _indexIndicator && i <= _maxIndexIndicator) {
                    _transformItem(direction);
                    i++;
                }
            }

            var _cycle = function (direction) {
                if (!_config.isCycling) {
                    return;
                }
                _interval = setInterval(function () {
                    _transformItem(direction);
                }, _config.interval);
            }

            var _controlClick = function (e) {
                if (e.target.classList.contains('slider__control')) {
                    e.preventDefault();
                    var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
                    _transformItem(direction);
                    clearInterval(_interval);
                    _cycle(_config.direction);
                }
                if (e.target.getAttribute('data-slide-to')) {
                    e.preventDefault();
                    _slideTo(parseInt(e.target.getAttribute('data-slide-to')));
                    clearInterval(_interval);
                    _cycle(_config.direction);
                }
            };

            var _handleVisibilityChange = function () {
                if (document.visibilityState === "hidden") {
                    clearInterval(_interval);
                } else {
                    clearInterval(_interval);
                    _cycle(_config.direction);
                }
            }

            var _refresh = function () {
                clearInterval(_interval);
                _mainElement.innerHTML = _html;
                _sliderWrapper = _mainElement.querySelector('.slider__wrapper');
                _sliderItems = _mainElement.querySelectorAll('.slider__item');
                _sliderControls = _mainElement.querySelectorAll('.slider__control');
                _sliderControlLeft = _mainElement.querySelector('.slider__control_left');
                _sliderControlRight = _mainElement.querySelector('.slider__control_right');
                _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width);
                _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width);
                _positionLeftItem = 0;
                _transform = 0;
                _indexIndicator = 0;
                _maxIndexIndicator = _sliderItems.length - 1;
                _step = _itemWidth / _wrapperWidth * 100;
                _items = [];
                _sliderItems.forEach(function (item, index) {
                    _items.push({item: item, position: index, transform: 0});
                });
                _addIndicators();
            }

            var _setUpListeners = function () {
                _mainElement.addEventListener('click', _controlClick);
                if (_config.pause && _config.isCycling) {
                    _mainElement.addEventListener('mouseenter', function () {
                        clearInterval(_interval);
                    });
                    _mainElement.addEventListener('mouseleave', function () {
                        clearInterval(_interval);
                        _cycle(_config.direction);
                    });
                }

                document.addEventListener('visibilitychange', _handleVisibilityChange, false);
                window.addEventListener('resize', function () {
                    var
                        _index = 0,
                        width = parseFloat(document.body.clientWidth);
                    _states.forEach(function (item, index, arr) {
                        if (width >= _states[index].minWidth)
                            _index = index;
                    });
                    if (_index !== _getActive()) {
                        _setActive();
                        _refresh();
                    }
                });
            }

            var _addIndicators = function () {
                var sliderIndicators = document.createElement('ol');
                sliderIndicators.classList.add('slider__indicators');
                for (var i = 0; i < _sliderItems.length; i++) {
                    var sliderIndicatorsItem = document.createElement('li');
                    if (i === 0) {
                        sliderIndicatorsItem.classList.add('active');
                    }
                    sliderIndicatorsItem.setAttribute("data-slide-to", i);
                    sliderIndicators.appendChild(sliderIndicatorsItem);
                }
                _mainElement.appendChild(sliderIndicators);
                _indicatorItems = _mainElement.querySelectorAll('.slider__indicators > li')
            }

            // добавляем индикаторы
            _addIndicators();
            // инициализация
            _setUpListeners();

            if (document.visibilityState === "visible") {
                _cycle(_config.direction);
            }
            _setActive();

            return {
                right: function () {
                    _transformItem('right');
                },
                left: function () {
                    _transformItem('left');
                },
                stop: function () {
                    _config.isCycling = false;
                    clearInterval(_interval);
                },
                cycle: function () {
                    _config.isCycling = true;
                    clearInterval(_interval);
                    _cycle();
                }
            }

        }
    }());

    var slider = multiItemSlider('.slider', {
        isCycling: true
    });
</script>

</body>

</html>
