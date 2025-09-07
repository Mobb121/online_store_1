<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySuperShop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="top-line">
    <div class="container flex-center">
        <div class="top-line__main flex-center">
            <div class="select_city flex-center">
                <span class="select-city_text">Москва</span>
                <div class="select-city_icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                            fill="white"/>
                    </svg>
                </div>
            </div>
            <div class="pick-up-point flex-center">
                <div class="pick-up-point__icon">
                    <svg width="18px" height="20px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"
                            fill="white"/>
                    </svg>
                </div>
                <span class="pick-up-point__text">Пункт выдачи</span>
            </div>
            <div class="top-line-time flex-center"><span class="top-line-time__text">ПН-ПТ<span> с 9:00 до 17:00</span></span>
            </div>
        </div>
        <div class="user-account flex-center">
            <div class="user-account__icon">
                <svg width="30px" height="22px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
                     xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <style>.cls-1 {
                                fill: none;
                                stroke: white;
                                stroke-miterlimit: 10;
                                stroke-width: 1.3px;
                            }</style>
                    </defs>
                    <circle class="cls-1" cx="12" cy="7.25" r="5.73"/>
                    <path class="cls-1"
                          d="M1.5,23.48l.37-2.05A10.3,10.3,0,0,1,12,13h0a10.3,10.3,0,0,1,10.13,8.45l.37,2.05"/>
                </svg>
            </div>
            <span class="user-account__text">Личный кабинет</span>
        </div>
    </div>
</div>
<div class="middle-line">
    <div class="container flex-center">
        <a class="ml-logo" href="/">
            <img src="{{asset('images\logoS.png')}}" alt="" width="120px">
        </a>
        <form class="fast-search">
            <div class="fast_search__input">
                <input type="text" name="v" placeholder="Какой сорт балтики 9 желаете сударь???" size="35">
                <div class="fast_search__icon">
                    <svg width="15px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <span class="fast_search__example">Например: Арника, ГРИПП, Траумель</span>
        </form>
        <div class="ml-callback">
            <a href="tel:+7(938)759-64-22" class="ml-callback__phone">+7(938)759-64-22</a>
            <a href="#" class="ml-callback__call">Заказать звонок</a>
        </div>
        <div class="ml-action flex-center">
            <div class="ml-action-action__compare">
                <div class="ml-action-cart__icon">
                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 16 16"
                         xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="ml-action-like">
                <div class="ml-action-cart__icon">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z"
                              stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="ml-action__cart">
                <div class="ml-action-cart__icon">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="ml-action__cart_text">
                    Корзина
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="main-menu">
    <div class="container">
        <div class="list-cat">
            <div class="list-cat__main flex-center">
                <div class="list-cat__main_icon">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 5a1 1 0 0 0 0 2h16a1 1 0 1 0 0-2H4ZM4 9a1 1 0 0 0 0 2h12a1 1 0 1 0 0-2H4ZM3 14a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1ZM4 17a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2H4Z"
                            fill="#000000"/>
                    </svg>
                </div>
                <span class="list-cat__main_text">Все категории</span>
            </div>
            <div class="list-cat__drop">
                <ul class="list-cat__list">
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Комоды и тумбы</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Мебель для детской</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Мебель для кухни</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Прихожие</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Стенки для гостинной</a>
                    </li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Столы</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Шкафы</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Диваны</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Кресла</a></li>
                    <li class="list-cat__list_item"><a class="list-cat__list_link" href="#">Пуфы</a></li>
                </ul>
            </div>
        </div>
        <ul class="main-menu__list">
            <li class="main_menu__item"><a href="#" class="main-menu__item">Акции</a></li>
            <li class="main_menu__item"><a href="#" class="main-menu__item">О фабрике</a></li>
            <li class="main_menu__item"><a href="#" class="main-menu__item">Оплата</a></li>
            <li class="main_menu__item"><a href="#" class="main-menu__item">Производители</a></li>
            <li class="main_menu__item"><a href="#" class="main-menu__item">Сборка</a></li>
            <li class="main_menu__item"><a href="#" class="main-menu__item">Доствка</a></li>
            <li class="main_menu__item"><a href="#" class="main-menu__item">Контакты</a></li>
        </ul>
    </div>
</nav>

@yield('content')

@include('partials/footer')


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    if (window.location.pathname != '/'){
        $('.list-cat__drop').hide()
    }
</script>

@yield('script')

</body>
</html>
