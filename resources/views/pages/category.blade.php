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
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Комоды и тумбы</h1>
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

    <div class="page-category">
        <div class="container">
            <div class="pc-filter">
                <div class="pc-filter__top">
                    <span class="pc-filter__title">Фильтр</span>
                    <div class="pc-filter__icon">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 4.99988H4V7.83317L9.5 13.3332V20H11.5606L14.5 17.0606V13.3331L20 7.83305V4.99988ZM5.5 7.21185V6.49988H18.5V7.21173L13 12.7117V16.4393L11 18.4393V12.7119L5.5 7.21185Z" fill="#1F2328"/>
                        </svg>
                    </div>
                </div>
                <div class="pc-filter-price">
                    <div class="pc-filter-price__inputs">
                        <input type="text" id="filter-price-slider-from" class="pc-filter-price__input"
                               name="price_from" placeholder="От 7400">
                        <input type="text" id="filter-price-slider-to" class="pc-filter-price__input" name="price_to"
                               placeholder="От 20400">
                    </div>
                    <div id="filter-price-slider" class="pc-filter__price_slider"></div>
                </div>
                <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">Конструкция</span>
                        <div class="pc-filter__item_icon">
                            <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 15h14l-7-8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="pc-filter__item__cont">
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">С ящиком</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div  class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">С зеркалом</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Угловые</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Модульные</span>
                        </label>
                    </div>
                </div> <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">Цвет</span>
                        <div class="pc-filter__item_icon">
                            <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 15h14l-7-8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="pc-filter__item__cont">
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Белый</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div  class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Коричневый</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Серый</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="dsa">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Черный</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="page-category__content">
                <div class="page-category__sort">
                    <div class="pc-select">
                        <span class="pc-select__title">Сортировка:</span>
                        <span class="pc-select__vail">По умолчанию</span>
                    </div>
                    <div class="pc-view">
                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- Внешний квадрат со светло-темно-серой заливкой -->
                            <rect x="0" y="0" width="20" height="20" rx="2" fill="#4E5664"/>
                            <!-- Вертикальная линия (очень светло-серая, толще, выходит за границы) -->
                            <line x1="10" y1="-1.5" x2="10" y2="21" stroke="#FFFFFF" stroke-width="3"/>
                            <!-- Горизонтальная линия (очень светло-серая, толще, выходит за границы) -->
                            <line x1="-1.5" y1="10" x2="21" y2="10" stroke="#FFFFFF" stroke-width="3"/>
                        </svg>
                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- Внешний квадрат с темно-серой заливкой -->
                            <rect x="0" y="0" width="20" height="20" rx="2" fill="#4E5664"/>
                            <!-- Вертикальные линии (белые, тоньше, выходят за границы) -->
                            <line x1="6.67" y1="-1" x2="6.67" y2="21" stroke="#FFFFFF" stroke-width="2"/>
                            <line x1="13.33" y1="-1" x2="13.33" y2="21" stroke="#FFFFFF" stroke-width="2"/>
                            <!-- Горизонтальные линии (белые, тоньше, выходят за границы) -->
                            <line x1="-1" y1="6.67" x2="21" y2="6.67" stroke="#FFFFFF" stroke-width="2"/>
                            <line x1="-1" y1="13.33" x2="21" y2="13.33" stroke="#FFFFFF" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <div class="page-category__products">
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт</span>
                            <div class="mini-product__action">
                                <div class="mini_product__compare">
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
                                <div class="mini-product__like">
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
                        <a href="#" class="mini_product__img">
                            <img src="{{asset('/images/products/prod_1s.jpg')}}" alt="">
                        </a>
                        <a href="#" class="mini_product__title">Комод Адажио 56.02 дуб сонома / белый с принтом
                            цветы</a>
                        <div class="mini-product__rating">
                            <div class="mini-product_rating_icon">
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
                            <div class="mini-product__rating_text">4.7</div>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">54 000</span>
                                <span class="mini-product__price_current">34 000</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale_count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endsection

        @section('script')

            <script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>

            <script>
                $(document).ready(function () {
                    $('#filter-price-slider').slider({
                        range: true,
                        min: 0,
                        max: 9999,
                        values: ['1000', '9000'],
                        slide: function (event, ui) {
                            $('#filter-price-slider-from').val(ui.values[0]);
                            $('#filter-price-slider-to').val(ui.values[1]);
                        }
                    });
                })
            </script>
@endsection

