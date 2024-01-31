<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Агентство по делам молодежи Республики Тыва</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/aptara/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

</head>
<body>
<header class="inner--header">
    <div class="container">
        <div class="nav__div">
            <div class="logo black logop">
                <a href="/" class="black"><h1 class="black">Агентство по делам молодежи <br> Республики Тыва</h1></a>
            </div>
            <nav>
                <ul class="nav__list">
                    <li><a style="color: #000;">О нас</a>
                        <ul class="nav__sublist">
                            <li><a href="#" class="sub__link">Цели агентства</a></li>
                            <li><a href="#" class="sub__link">История</a></li>
                            <li><a href="#" class="sub__link">Структура</a></li>
                        </ul>
                    </li>
                    <li><a style="color: #000;">Деятельность</a>
                        <ul class="nav__sublist">
                            <li><a href="#" class="sub__link">Инициативы агентства</a></li>
                            <li><a href="#" class="sub__link">Возможность участия и поддержка проектов</a></li>
                            <li><a href="#" class="sub__link">Молодежные инициативы</a></li>
                            <li><a href="#" class="sub__link">События и мероприятия</a></li>
                            <li><a href="#" class="sub__link">Волонтерство</a></li>
                        </ul>
                    </li>
                    <li><a style="color: #000;">Пресс-центр</a>
                        <ul class="nav__sublist">
                            <li><a href="#" class="sub__link">Новости</a></li>
                            <li><a href="#" class="sub__link">Контакты для СМИ</a></li>
                        </ul>
                    </li>
                    <li><a style="color: #000;">Документы</a></li>
                    <li><a style="color: #000;">Обратная связь</a>
                        <ul class="nav__sublist">
                            <li><a href="#" class="sub__link">Обратиться в агенство</a></li>
                            <li><a href="#" class="sub__link">Вопросы и ответы</a></li>
                            <li><a href="#" class="sub__link">Вакансии</a></li>
                            <li><a href="#" class="sub__link">Контакты</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="ftop">
            <div class="flogo">
                <div class="logof">
                    <a href="/">Агентство по делам молодежи <br> Республики Тыва</a>
                </div>
            </div>
            <div class="fnav">
                <ul>
                    <li><a href="#">Цели агентства</a></li>
                    <li><a href="#">История</a></li>
                    <li><a href="#">Структура</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты для СМИ</a></li>
                </ul>
            </div>
            <div class="fnav">
                <ul>
                    <li><a href="#">Инициативы</a></li>
                    <li><a href="#">Проекты</a></li>
                    <li><a href="#">Молодежные инициативы</a></li>
                    <li><a href="#">События</a></li>
                    <li><a href="#">Волонтерство</a></li>
                </ul>
            </div>
            <div class="floc">
                <div class="floc-adres">
                    <p class="floc--t">
                        Адрес
                    </p>
                    <p class="floc--p">
                        667000, Республика Тыва, Кызыл, улица Ленина, дом 39
                    </p>
                </div>
                <div class="floc-time">
                    <p class="floc--t">Время работы</p>
                    <p class="floc--p">Пн-Пт: 09:00 - 20:00</p>
                </div>
                <div class="floc-cont">
                    <p class="floc--t">Электронная почта</p>
                    <p class="floc--p"><a href="mailto:adm@rtyva.ru">adm@rtyva.ru</a></p>
                    <p class="floc--pt">+7 394 227-70-70</p>
                </div>
            </div>
        </div>
        <div class="fbot">
            © 2024 Агентство по делам молодежи Республики Тыва
        </div>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
