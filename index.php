<?php session_start();
    if (isset($_SESSION['username'])) {
        $partner_url = 'partner.php';
    } else {
        $partner_url =  '#myModal" data-toggle="modal';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <script>
        (function( $ ) {
            $.fn.scrollToMe = function(correction, oncomplete, container) {
                var offset=$(this).offset();
                if (typeof offset === "undefined") return $(this);
                if (typeof correction === "undefined") correction=0;
                if (typeof oncomplete === "undefined") oncomplete=function(){};
                if (typeof container === "undefined") container=$("html, body");
                container.animate({scrollTop: offset.top+correction}, 500, 'swing', oncomplete);
                return $(this);
            };
        })(jQuery);
    </script>
    <title>Софт-Эксперт</title>
</head>
<body>
    <header>
        <!--Навигация:Начало-->
        <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
            <div class="container menu">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand visible-xs"><img src="img/logo.png" style="height: 50px; margin-top: -15px"/></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mob-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mob-navbar-collapse">
                    <ul class="nav navbar-nav navbar-center">
                        <li><a href="#" onclick='$("div.head").scrollToMe(-40)'>Главная</a></li>
                        <li><a href="#" onclick='$("div.service").scrollToMe(-40)'>Услуги</a></li>
                        <li><a href="#" onclick='$("div.chapter-price").scrollToMe(-50)'>Цены</a></li>
                        <li><a href="#" onclick='$("div.chapter-soft").scrollToMe()'>Продажа ПО</a></li>
                        <!--<li><a href="partner.html">Партнерам</a></li>-->
                        <li><a href="<?= htmlspecialchars($partner_url); ?>">Партнерам</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_SESSION['username']?></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Выход</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!--Навигация:Конец-->

        <!--Окно входа:начало-->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Вход на сайт</h4>
                    </div>
                    <form action="login.php" method="post" role="form" class="form-horizontal">
                        <div class="modal-body">
                            <!--<div class="row">-->
                                <!--<label for="user_login">Введите Ваш логин</label>-->
                                <!--<input id="user_login" name="login" value="" />-->
                            <!--</div>-->
                            <!--<div class="row">-->
                                <!--<label for="user_password">Введите Ваш пароль</label>-->
                                <!--<input id="user_password" name="password" value="" />-->
                            <!--</div>-->
                            <div class="form-group has-feedback">
                                <label class="control-label col-xs-3">Логин:</label>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input autofocus type="text" class="form-control" required="required" name="login" pattern="[A-Za-z]{4,}">
                                    </div>
                                    <span class="glyphicon form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- Блок для ввода email -->
                            <div class="form-group has-feedback">
                                <label class="control-label col-xs-3">Пароль:</label>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input type="password" class="form-control" required="required" name="password">
                                    </div>
                                    <span class="glyphicon form-control-feedback"></span>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            <button type="submit" id="login_button" class="btn btn-primary login_button">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Окно входа:конец-->

        <div class="head scrollToMe">
            <div class="container">
                <div class="row" style="margin-top: 10%">
                    <div class="col-md-6 logo hidden-xs">
                        <img src="img/logo.png" style="width: 100%"/>
                    </div>
                </div>
                <div class="fa-location-arrow">
                    <div class="col-md-7 white-text">
                        <b>г. Омск, ул. Куйбышева, 43, офис 639   т. 8(3812)948-775, <a href="mailto:soft@soft-expert.su">soft@soft-expert.su</a></b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </header>
    <div class="chapter-about">
        <a name="chapter-about"></a>
        <div class="container content">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">IT аутсорсинг, абонентское обслуживание компьютеров</h1>


                    <p>Компания СОФТ-Эксперт &nbsp;предлагает достойную замену штатному IT специалисту, системному администратору. Наше предложение ориентировано на малые и средние предприятия, которым не целесообразно и экономический не выгодно тратить финансовые ресурсы (и не малые) на содержание штатного IT специалиста, системного администратора.</p>
                    <p>Конечно, Вы можете подумать, что штатный специалист, будет всегда под рукой, и он сможет быстрее компании решить возникающие проблемы. Но так происходит далеко не всегда. Почему? Потому что, вмешательство специалиста требуется только в случаях возникновения серьезной проблемы, которые возникают не так часто. Поэтому большую часть времени Ваш штатный специалист будет заниматься своими делами сидя за рабочим местом.</p>
                    <hr>
                    <h1 class="text-center">Плюсы IT аутсорсинга:</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fa fa-rub fa-4x fa-about" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 about-text">
                    Минимизация расходов, вы экономите от 40% стоимости содержания собственного специалиста.
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fa fa-compress fa-4x fa-about" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 about-text">
                    Уменьшение налогооблагаемой базы.
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fa fa-users fa-4x fa-about" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 about-text">
                    Вы получаете не одного специалиста, а целый штат. Отсутствие необходимости искать замену заболевшему или ушедшему в отпуск сотруднику.
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fa fa-handshake-o fa-4x fa-about" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 about-text">
                    Взаимоотношения проходят не в русле работник - работодатель, а Заказчик - Исполнитель; где существует договор и чёткие обязательство по выполнению работ, что дает вам дополнительные гарантии.
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fa fa-pie-chart fa-4x fa-about" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 about-text">
                    Улучшенное планирование расходов на IT инфраструктуру.
                </div>
            </div>
            <!--<div class="row">-->
                <!--<div class="col-md-12">-->
                    <!--<i class="fa fa-list fa-3x fa-about" aria-hidden="true"></i>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="row">-->
                <!--<div class="col-md-12 about-text">-->
                    <!--И т.п.-->
                <!--</div>-->
            <!--</div>-->

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p>Стоит ли переходить на IT аутсорсинг, необходимо решать индивидуально исходя из ваших условий, но если у вас регулярно возникает потребность в специалисте по обслуживанию компьютерной техники и Ваше предприятие не так велико для того чтобы содержать собственный штат IT специалистов, то Вам однозначно стоит поближе посмотреть на IT аутсорсинг.</p>
                    <div class="service"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="chapter-service">
        <a name="chapter-service"></a>
        <div class="container content">
            <div class="row">
                <div class="col-md-12  text-center">
                    <h1>Какие услуги входят в IT аутсорсинг, а именно в ежемесячную абонентскую плату?</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-check-square-o fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Установка и настройка программного обеспечения.
                </div>
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-list fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Проверка корректности работы компьютерной техники.
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-life-ring fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Проверка на &laquo;вирусы&raquo; и лечение.
                </div>
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-balance-scale  fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Настройка оптимальной конфигурации операционных систем.
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-sitemap fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Обслуживание локальных сетей.
                </div>
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-microchip fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Работы по устранению проблем с аппаратной частью&nbsp; компьютеров.
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-database fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Организация резервного копирования данных.
                </div>
                <div class="col-md-1 col-xs-1">
                    <i class="fa fa-question-circle-o fa-2x fa-service" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-xs-5">
                    Ответы на вопросы пользователей.
                </div>
            </div>

                    <!--<ul>-->
                        <!--<li>Обслуживание компьютеров.</li>-->
                        <!--<li>Установка и настройка программного обеспечения.</li>-->
                        <!--<li>Проверка корректности работы компьютерной техники.</li>-->
                        <!--<li>Исправление нарушений организации данных в компьютерах.</li>-->
                        <!--<li>Проверка на &laquo;вирусы&raquo; и лечение.</li>-->

                        <!--<li>Настройка оптимальной конфигурации операционных систем.</li>-->
                        <!--<li>Помощь в установке новой техники и программ.</li>-->
                        <!--<li>Обслуживание локальных сетей.</li>-->
                        <!--<li>Работы по устранению проблем с аппаратной частью&nbsp; компьютеров.</li>-->
                        <!--<li>Составление рекомендаций по развитию.</li>-->

                        <!--<li>Ответы на вопросы пользователей.</li>-->
                        <!--<li>Чистка компьютеров и принтеров от пыли.</li>-->
                        <!--<li>Организация резервного копирования данных.</li>-->
                        <!--<li>И т.п.</li>-->
                    <!--</ul>-->

                    <p>Если у вас существует потребность в какой-то дополнительной услуге, которая носит регулярный характер, то мы с радостью включим её в этот перечень. Все остальные услуги (работы), как правило, носят единичный (разовый) характер, и они оплачиваются отдельно. Например, такие услуги, как:</p>

                    <ul>

                        <li>Развертывание сервера домена.</li>
                        <li>Развертывание почтового сервера.</li>
                        <li>Установка и настройка прокси-сервера.</li>
                        <li>Настройка управляемого сетевого оборудования.</li>
                        <li>Монтаж ЛВС</li>

                        <li>И т.п.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="chapter-price">
        <a name="chapter-price"></a>
        <div class="container content">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Стоимость абонетского обслуживания</h1>
                    <a name="price"></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Кол-во компьютеров</th>
                                    <th>Ориентировочная* стоймость за 1 ед.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1-3</td>
                                    <td>1000 руб.</td>
                                </tr>
                                <tr>
                                    <td>4-9</td>
                                    <td>800 руб.</td>
                                </tr>
                                <tr>
                                    <td>10-19</td>
                                    <td>600 руб.</td>
                                </tr>
                                <tr>
                                    <td>20-&#8734</td>
                                    <td>500 руб.</td>
                                </tr>

                            </tbody>
                        </table>
                        <p>*Стоимость может меняться в зависимости от географического расположения вашего офиса.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chapter-soft">
        <a name="chapter-soft"></a>
        <div class="container content text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1>Продажа програмного обеспечения</h1>
                </div>
            </div>
            <div class="row" style="padding-bottom: 40px">
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/logo-microsoft.png"></div>
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/Kaspersky_png.png"></div>
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/drweb_logo_madeInRussia_ru_green.png"></div>
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/eset_logo_dark1.gif"></div>
            </div>
            <div class="row">
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/logo-abbyy.png"></div>
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/Adobe_Systems_logo.png"></div>
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/Autodesk_Logo_07.png"></div>
                <div class="col-md-3 soft-logo"><img class="img-responsive" src="img/logos/logo-corel.jpg"></div>
            </div>
        </div>
    </div>
</body>
</html>
