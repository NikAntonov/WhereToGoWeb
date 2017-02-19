<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <title>Route'N'Go</title>

    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png?v=gAEzopl0rd">
    <link rel="icon" type="image/png" href="/icons/favicon-32x32.png?v=gAEzopl0rd" sizes="32x32">
    <link rel="icon" type="image/png" href="/icons/favicon-16x16.png?v=gAEzopl0rd" sizes="16x16">
    <link rel="manifest" href="/icons/manifest.json?v=gAEzopl0rd">
    <link rel="shortcut icon" href="/icons/favicon.ico?v=gAEzopl0rd">
    <meta name="apple-mobile-web-app-title" content="Route'N'Go">
    <meta name="application-name" content="Route'N'Go">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="/icons/mstile-144x144.png?v=gAEzopl0rd">
    <meta name="msapplication-config" content="/icons/browserconfig.xml?v=gAEzopl0rd">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/jumbotron.css"/>
    <!-- Custom styles for this template -->

    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="css/media.css" rel="stylesheet"/>


    <link href="css/set1" rel="stylesheet"/>


    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <link rel="stylesheet" href="css/flickity.min.css" media="screen">

    <script src="js/flickity.pkgd.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .panel-heading{
            background: #ff9800 !important;
        }
        .table{
            height: 200px !important;
        }
        .row{
            padding:0 !important;
            margin:0 !important;
        }
        .donate{
            margin-bottom: 30px;
        }
        #modaldonate{
             padding-top: 100px;
        }
    </style>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" id="custom-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">Route'N'Go</a>
        </div>
        <div class="collapse navbar-collapse navbar-right custom-controls" id="controls">
            <ul class="nav navbar-nav">
                <li><a href="#about">О проекте</a></li>
                <li><a href="#download">Контакты</a></li>
                <li><a href="../admin/login.php">Войти</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<header class="parallax-window" data-parallax="scroll" data-image-src="images/bg-jumbotron-mdf.jpg" id="header">
    <div class="jumbotron" id="jumbotron-main">
        <div class="container">
            <h1>Что это?</h1>
            <p>Это один из самых невероятных способов узнать наш город</p>
            <p><a class="bt-circle" href="#about">Узнать больше</a></p>
        </div>
    </div>
</header>
<div class="container" id="about">

    <div class="starter-template">

        <div id="featured">
            <h1 style="padding-bottom: 25px; padding-top: 35px;"">Калининград с совершенно новой точки зрения</h1>
            <p class="lead" align="center" style="padding-bottom: 25px;">Наша цель - сделать отдых в Калининграде
                интересным и
                захватывающим для жителей и гостей нашего города. Именно для этого мы и создаем наше приложение.
                При помощи Route'N'Go вы всегда будете в курсе всех интересных мероприятий Калининграда, а также
                сможете прогуляться по захватывающим местам, подобранным специально для вас!
            </p>
        </div>

        <h1 style="padding-bottom: 25px">Как это работает?</h1>

        <div class="row">
            <div class="col-sm-4">
                <img src="thumbnails/nexus5-art-1.png"/>
                <p class="lead">При открытии приложения в первый раз вы выбираете ваши увлечения - именно на их основе
                    будут строиться ваши индивидуальные маршруты.</p>
            </div>
            <div class="col-sm-4">
                <img src="thumbnails/nexus5-art-2.png"/>
                <p class="lead">После этого вы можете просмотреть интересные места в специальной подборке и решить куда
                    можно сходить. А можете составить индивидуальный маршрут, по которому отправитесь в путь.</p>
            </div>
            <div class="col-sm-4">
                <img src="thumbnails/nexus5-art-3.png"/>
                <p class="lead">Не всегда будет интернет под рукой? Не волнуйтесь - приложение все сохранит к вам на
                    устройство. Кафе с бесплатным WiFi на каждом шагу не нужны.</p>
            </div>
        </div>

        <br>
        <h1 style="padding-bottom: 25px">Наши приемущества</h1>

        <div class="row">
            <div class="col-sm-5">
                <img src="thumbnails/nexus5-art-1.png"/>
            </div>
            <div class="col-sm-7">
                <ul style="text-align: left;">
                    <li>
                        <p class="lead"><b>Простота использования</b><br>
                            Привычный дизайн делает приложение понятным с первого взгляда
                        </p>
                    </li>
                    <li>
                        <p class="lead"><b>Мультиязычность</b><br>
                            Наше приложение полностью переведено на русский, английский, литовксий, польски и немецкий
                            языки.
                        </p>
                    </li>
                    <li>
                        <p class="lead"><b>Оффлайн доступ</b><br>
                            Все карты города будут сохранены на устройство вместе с местами города
                        </p>
                    </li>
                    <p class="lead">...И многое другое!</p>
                </ul>
            </div>
        </div>
        <br><br>
    </div>

</div><!-- /.container -->

<div class="jumbotron parallax-window parallax" data-parallax="scroll" data-image-src="images/bg-workswith-mdf.jpg">
    <div class="starter-template" id="tech">
        <h1 style="padding-bottom: 25px">Наша небольшая команда</h1>
        <div class="main-carousel" style="padding-bottom: 25px"
             data-flickity='{ "cellAlign": "left", "contain": true }'>
            <div class="carousel-cell">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="thumbnails/antonov.png"/>
                    </div>
                    <div class="col-sm-4">
                        <h2>Никита Антонов</h2>
                        <h4>Идея, Android & Web разработчик</h4>
                        <p class="lead">Я отошлю немного задач завтра, отдохни пока что... Я сейчас на БалтАртеке... В
                            Москве...
                            В горах :)</p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="thumbnails/blagovestnuy.png"/>
                    </div>
                    <div class="col-sm-4">
                        <h2>Иван Благовестный</h2>
                        <h4>Web разработчик</h4>
                        <p class="lead">На каком языке будем писать сервер? Давай использовать Python. Хотя, может лучше
                            использовать Go? Ну я не знаю... Я думаю, лучше использовать Python. </p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="thumbnails/duidik.png"/>
                    </div>
                    <div class="col-sm-4">
                        <h2>Анна Дидык</h2>
                        <h4>Проект-Менеджер</h4>
                        <p class="lead">У меня же есть возможность менеджерить! Я вас закомандую до ужаса!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="thumbnails/luferenko.png"/>
                    </div>
                    <div class="col-sm-4">
                        <h2>Константин Луференко</h2>
                        <h4>Web разработчик</h4>
                        <p class="lead">Это кто тут на PHP гонит? :)</p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell">

                <div class="row">
                    <div class="col-sm-6">
                        <img src="thumbnails/skabuickaya.png"/>
                    </div>
                    <div class="col-sm-4">
                        <h2>Юлия Скабицкая</h2>
                        <h4>Ментор проекта</h4>
                        <p class="lead">Кто первый найдет ошибку в коде, тому без разговоров поставлю пятерку =)
                            Любимая ваша ошибка, между прочим))</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="facts">
    <div class="container">
        <div class="row">

            <!-- single fact -->
            <div class="col-md-3 col-sm-6">
                <div class="single">
                    <i class="fa fa-coffee"></i>
                    <h2>9</h2>
                    <h6>Кружек кофе</h6>
                </div>
            </div>
            <!-- End of single fact -->

            <!-- single fact -->
            <div class="col-md-3 col-sm-6">
                <div class="single">
                    <i class="fa fa-calendar-o"></i>
                    <h2>198</h2>
                    <h6>Дней работы</h6>
                </div>
            </div>
            <!-- End of single fact -->

            <!-- single fact -->
            <div class="col-md-3 col-sm-6">
                <div class="single">
                    <i class="fa fa-music"></i>
                    <h2>549</h2>
                    <h6>Песен</h6>
                </div>
            </div>
            <!-- End of single fact -->

            <!-- single fact -->
            <div class="col-md-3 col-sm-6">
                <div class="single">
                    <i class="fa fa-users"></i>
                    <h2>5</h2>
                    <h6>Партий в теннис</h6>
                </div>
            </div>
            <!-- End of single fact -->

        </div>
    </div>
</section>

<div class="container">

    <div class="starter-template" id="download">

        <h1>Пожертвования</h1>
        <p class="lead">Наше приложение сегодня активно разрабатывается для устройств на платформе Android, но нам
            очень многое надо сделать прежде чем приложение увидит свет. Вы всегда можете присоединиться к нам в
            команду и создавать вместе с нами самый иновационный гид по городу. Мы всегда открыты для сотрудничества
            :)</p>

        <div class="container" style="align-content: center">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Бронзовый</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$1-4</h1>
                            </div>
                            <table class="table">
                                <tr class="active">
                                    <td>
                                        E-mail с благодарностью
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>

                                    </td>
                                </tr>
                                <tr class="active panel-footer">
                                    <td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Серебрянный</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$3-6</h1>
                            </div>
                            <table class="table">
                                <tr class="active">
                                    <td>
                                        E-mail с благодарностью
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Открытка
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Золотой</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$6+</h1>
                            </div>
                            <table class="table">
                                <tr class="active">
                                    <td >
                                        E-mail с благодарностью
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Открытка
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Наклейка с логотипом
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                        </div>
                        <div class="modal fade" id="modaldonate">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Пожертвовать</h5>
                                    </div>
                                    <div class="modal-body">
                                        <iframe frameborder="0" allowtransparency="true" scrolling="no"
                                                src="https://money.yandex.ru/embed/donate.xml?account=410013245041792&quickpay=donate&payment-type-choice=on&default-sum=&targets=%D0%9D%D0%B0+%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5+Route'N'Go&target-visibility=on&project-name=Route'N'Go&project-site=routengo.pe.hu&button-text=05&fio=on&mail=on&phone=on&successURL="
                                                width="422" height="117"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <a class="btn btn-primary donate" role="button" data-toggle="modal" data-target="#modaldonate">Пожертвовать</a>
        </div>

    </div>

</div>
<div class="subscription">
    <!--#FF9800 active-->
    <!--#F90 hover-->
<!--    #f8f8f8 bg -->
    <div class="container">
        <h1 align="center">БУДЬТЕ В КУРСЕ</h1>
        <hr class="hr">
        <p class="lead text-center" style="margin-top: 40px">Подпишитесь на нас в социальных сетях. Вы также можете
            подписаться на нашу рассылку.<br>
            Мы собираемся предоставить вам актуальную и важную для Вас информацию без спама.</p>
        <div class="subline">
            <div class="social-sub">
                <a href="https://vk.com/routengo" target="_blank">
                    <img src="icons/social/VK.png" class="social-icons">
                </a>
                <a href="https://www.facebook.com/groups/routengo/" target="_blank">
                    <img src="icons/social/FB.png" class="social-icons">
                </a>
            </div>
            <div class="sub_input">
                <input type="text" class="sub-input" placeholder="Введите эл. почту" />
                <button id="thanks" type="submit"><img id="plane" src="icons/symbol.png" alt="Подписаться" /></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-thanks">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <h1 align="center">Вы успешно подписались на рассылку!</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ОК</button>
            </div>
        </div>
    </div>
</div>
<!--<section class="content bgcolor-3">-->
<!--    <h2>Kyo</h2>-->
<!--    <span class="input input--kyo">-->
<!--					<input class="input__field input__field--kyo" type="text" id="input-19" />-->
<!--					<label class="input__label input__label--kyo" for="input-19">-->
<!--						<span class="input__label-content input__label-content--kyo">What's your email?</span>-->
<!--					</label>-->
<!--				</span>-->
<!--</section>-->

<div class="bgsoon parallax-window parallax" data-parallax="scroll" data-image-src="images/bg-contact-mdf.jpg" style="text-align: center; padding: 65px">
    <h1 style="color: white;">Скоро <i class="fa fa-apple"></i> <i class="fa fa-android"></i></h1>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/google-analytics.min.js"></script>
<script src="js/navbar-collapse.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/script.js"></script>
<script src="https://use.fontawesome.com/5229f40f0b.js"></script>


<script>
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

</script>
<script src="js/ie10-viewport-bug-workaround.js"></script>

<?php
include "admin/includes/footer.php";
?>

</body>
</html>