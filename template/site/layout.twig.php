<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ description }}">

    <meta property="og:title" content="{{ title }}"/>
    <meta property="og:description" content="{{ description }}"/>
    <meta property="og:image" content="/public/images/og-image.png">

    <title>{{ title }}</title>
    <link rel="icon" href="/public/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="/public/style/uikit.min.css">
    <link rel="stylesheet" href="/public/style/site.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <nav class="uk-container">
        <ul class="menu-list">
            <li>
                <a class="index-link" href="https://vipservis.su"><img src="/public/images/logo.svg" alt="">Випсервис</a>
            </li>
            <li>
                <a class="active-item" href="/">Статус заказа</a>
            </li>
            <li>
                <a href="">Входные двери</a>
            </li>
            <li>
                <a href="">Натяжные потолки</a>
            </li>
            <li>
                <a href="">Сплит-системы</a>
            </li>
            <li>
                <a href="">Окна</a>
            </li>
        </ul>
    </nav>
</div>
{% block content %}{% endblock %}

</body>
<script src="/public/scripts/vue.min.js"></script>
<script src="/public/scripts/axios.min.js"></script>
<script src="/public/scripts/uikit.min.js"></script>
<script src="/public/scripts/uikit-icons.min.js"></script>

</html>