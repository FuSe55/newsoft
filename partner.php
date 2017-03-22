<?php session_start();
    if (isset($_SESSION['username'])) {
        $partner_url = 'href="partner.php"';
    } else {
        $partner_url =  'href="#myModal" data-toggle="modal"';
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
                        <li><a href="index.php" onclick='$("div.head").scrollToMe()'>Главная</a></li>
                        <li><a href="index.php#chapter-service" onclick='$("div.service").scrollToMe(-40)'>Услуги</a></li>
                        <li><a href="index.php#chapter-price" onclick='$("div.chapter-price").scrollToMe(-50)'>Цены</a></li>
                        <li><a href="index.php#chapter-soft" onclick='$("div.chapter-soft").scrollToMe()'>Продажа ПО</a></li>
                        <li><a  <?php echo $partner_url; ?>>Партнерам</a></li>
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
                    <div class="modal-body">
                        <form action="login.php" method="post" role="form" class="form-horizontal">
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
                                        <input type="text" class="form-control" required="required" name="login" pattern="[A-Za-z]{6,}">
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
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button type="submit" id="login_button" class="btn btn-primary login_button">Войти</button>
                    </div>
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
                    <div class="col-md-2"></div>
                    <div class="col-md-4 white-text">
                        г. Омск, ул. Куйбышева, 43, офис 639 </br>  т. 8(3812)948-775,</br> <a href="mailto:soft@soft-expert.su">soft@soft-expert.su</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">

    </div>

</body>
</html>