@extends('layout.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__el">
                        <svg fill="#000000" width="16px" height="16px" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">

                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                            <g id="SVGRepo_iconCarrier">

                                <path
                                    d="M21.554,8.168l-9-6A1,1,0,0,0,12,2h0a1,1,0,0,0-.554.168h0l-9,6a1,1,0,0,0-.278,1.387l0,0A1.05,1.05,0,0,0,3,10H4V21a1,1,0,0,0,1,1H19a.99.99,0,0,0,.389-.079,60.628,60.628,0,0,0,.318-.214A1,1,0,0,0,20,21V10h1a1,1,0,0,0,.555-1.832ZM10,20V13h4v7Zm6,0V12a1,1,0,0,0-1-1H9a1,1,0,0,0-1,1v8H6V8.2l6-4,6,4V20Z"/>

                            </g>

                        </svg>
                        Главная
                    </a>
                </li>
                <li class="breadcrumbs__item">
                    <span>Комоды и тумбы</span>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__el">
                        Стенка для гостинной Мона Люкс BMS
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Стенка для гостинной Мона Люкс BMS</h1>
    </div>


    <div class="page-product">
        <div class="container">
            <div class="page-product-gallery">
                <div class="page_product-gallery__thumbs">
                    <div class="page_product-gallery__thumbs__item">
                        <img src="{{asset('images/products/prod_1s.jpg')}}" alt="">
                    </div>
                    <div class="page_product-gallery__thumbs__item">
                        <img src="{{asset('images/products/prod_1s.jpg')}}" alt="">
                    </div>
                    <div class="page_product-gallery__thumbs__item">
                        <img src="{{asset('images/products/prod_1s.jpg')}}" alt="">
                    </div>
                </div>
                <div class="page-product-gallery__main">
                    <img src="{{asset('images/products/prod_1s.jpg')}}" alt="">
                </div>
            </div>
            <div class="page-product-main">
                <div class="page-product-main-top">
                    <div class="page-product-main-top__reviews">
                        <div class="page-product-main-top__rating">
                            <div class="page-product-main-top__rating_icon">
                                <svg width="20px" height="20px" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                       stroke="#E27C33" stroke-width="0.288"/>

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#E27C33" stroke-width="2.4" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </div>
                            <span class="page-product-main-top__rating_text">4.7</span>
                        </div>
                        <div class="page-product-main-top__link">12 отзывов</div>
                    </div>
                    <div class="page-product-main-top__actions">
                        <div class="page-product-main-top__actions_compare">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 7L21 7" stroke="#333333" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M3 17L21 17" stroke="#333333" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M3 7L8 2" stroke="#333333" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M3 7L8 12" stroke="#333333" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M21 17L16 22" stroke="#333333" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M21 17L16 12" stroke="#333333" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="page-product-main-top__actions_like">
                            <svg width="20" height="20" viewBox="144 144 512 512" fill="#000000"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m399.93 590.23-186.71-186.27c-42.758-45.508-40.531-116.95 4.7422-159.51 20.98-19.688 48.359-30.531 77.117-30.531 30.988 0 60.926 12.941 82.137 35.508l22.801 24.273 22.777-24.27c21.215-22.57 51.152-35.508 82.145-35.508 28.754 0 56.145 10.836 77.113 30.527 45.262 42.582 47.488 114.02 4.9531 159.27zm-104.86-356.16c-23.613 0-46.098 8.9023-63.324 25.07-37.164 34.934-39 93.605-4.0742 130.78l172.26 171.85 172.61-172.1c34.699-36.914 32.863-95.582-4.3008-130.55-17.211-16.156-39.699-25.059-63.309-25.059-25.832 0-49.785 10.352-67.461 29.156l-37.453 39.91-37.5-39.91c-17.664-18.797-41.617-29.148-67.445-29.148z"
                                    stroke="#000000" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="page-product-main-options">
                    <span class="page-product-main-options__title">Цвет</span>
                    <div class="page-product-main-options__item"></div>
                </div>
                <div class="page-product-main-dop">
                    <span class="page-product-main-dop__title">Аксессуары</span>
                </div>
                <div class="page-product-main-action">
                    <div class="page-product-main-action__price">
                        <div class="page-product-main-action__price_main">
                            <span class="page-product-main-action__price_old">54 000</span>
                            <span class="page-product-main-action__price_current">34 000</span>
                        </div>
                        <div class="page-product-main-action__price_sale">
                            <div class="page-product-main-action__price_sale_count">-10%</div>
                        </div>
                    </div>
                    <div class="page-product-main-action__count">
                        <span class="page-product-main-action__count_minus">-</span>
                        <input type="text" name="count" value="1">
                        <span class="page-product-main-action__count_plus">+</span>
                    </div>
                    <button class="page-product-main-action__buy">
                        <div class="page-product-main-action__buy_icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="page-product-main-action__buy_text">В корзину</span>
                    </button>
                    <a href="#" class="page-product-main-action__fast_buy">Купить в один клик</a>
                </div>
                <div class="page-product-main-bottom">
                    <span class="page-product-main-bottom__title">Способы получения</span>
                    <div class="page-product-main-bottom__items">
                        <span class="page-product-main-bottom__item"><a
                                href="#">Самовывоз</a> за 30 минут бесплатно</span>
                        <span class="page-product-main-bottom__item"><a href="#">Доставка</a> в течении 1-3 дней</span>
                    </div>
                </div>
            </div>
            <div class="page-product-info">
                <div class="page-product-info__tabs">
                    <a href="#" class="page-product-info__tabs_item">Описание товара</a>
                    <a href="#" class="page-product-info__tabs_item">Отзывы о товаре</a>
                    <a href="#" class="page-product-info__tabs_item">Доставка</a>
                    <a href="#" class="page-product-info__tabs_item">Сборка</a>
                    <a href="#" class="page-product-info__tabs_item">Оплата</a>
                    <a href="#" class="page-product-info__tabs_item">Гарантия</a>
                </div>
                <div class="page-product-info__cont">
                    <p> Олицетворение комфорта и изысканности. Представьте себе уголок вашего дома, где царит атмосфера
                        полного расслабления и утонченного стиля. Этот предмет мебели призван стать именно таким центром
                        притяжения. Его формы элегантно сочетают в себе плавные линии и благородную сдержанность,
                        создавая
                        визуальную гармонию, которая успокаивает и вдохновляет. Тщательно отобранные материалы дарят
                        неповторимые тактильные ощущения, приглашая прикоснуться и ощутить их качество. Каждый элемент
                        говорит о внимании к деталям и стремлении к совершенству. Он не кричит о себе, но мягко
                        подчеркивает
                        ваш безупречный вкус, легко вписываясь как в современные, так и в более классические интерьеры.
                        Это
                        не просто предмет обстановки, а часть вашей истории, создающая неповторимую атмосферу уюта и
                        тепла,
                        где рождаются самые приятные моменты.</p>
                </div>
            </div>
        </div>
        <div class="ms-tags">
            <div class="container">
                <a href="#" class="ms-tags__item">C ящиками</a>
                <a href="#" class="ms-tags__item">Длинные</a>
                <a href="#" class="ms-tags__item">Модульные</a>
                <a href="#" class="ms-tags__item">С зеркалом</a>
                <a href="#" class="ms-tags__item">ЛДСП</a>
                <a href="#" class="ms-tags__item">Эконом</a>
                <a href="#" class="ms-tags__item">С ящиками</a>
            </div>
        </div>
        <section class="info">
            <div class="container">
                <div class="info__desc">
                    <p>Обновите свой дом с нашей коллекцией стильной и функциональной мебели! От уютных диванов до элегантных
                        обеденных столов, мы предлагаем широкий выбор решений для любого пространства. Найдите идеальную мебель,
                        отражающую ваш уникальный вкус, и создайте дом, в котором хочется жить. Комфорт, качество и дизайн – вот
                        что делает нашу мебель особенной. Преобразите свой дом уже сегодня!</p>
                    <p>Создайте дом своей мечты с нашей изысканной мебелью! Подчеркните свой стиль и добавьте комфорта в каждый
                        уголок. Выбирайте лучшее для себя!</p>
                    <a href="#" class="info-link">Подробнее ></a>
                </div>
            </div>
        </section>
    </div>



@endsection

@section('script')

    <script>
        $(document).ready(function () {

        })
    </script>
@endsection

