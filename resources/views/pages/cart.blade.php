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
                    <span>Оформление заказа</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Оформление заказа</h1>
    </div>


    <div class="page-cart">
        <div class="container">
            <div class="page-cart-main">
                <div class="page-cart-product-list">
                    <div class="page-cart-product-list-item">
                        <div class="page-cart-product-list-item__info-wrap">
                            <div class="page-cart-product-list-item__image">
                                <img src="{{asset('images/products/prod_1s.jpg')}}" alt="">
                            </div>
                            <div class="page-cart-product-list-item__info">
                                <a href="#" class="page-cart-product-list-item__title">Стенка для гостинной Мона Люкс
                                    BMS</a>
                                <div class="page-cart-product-list-item__options">
                                    <span>красный</span>
                                    <span>144x123x123</span>
                                </div>
                            </div>
                        </div>
                        <div class="page-cart-product-list-item__count">
                            <span class="page-cart-product-list-item__count_minus">-</span>
                            <input type="text" name="count" value="1">
                            <span class="page-cart-product-list-item__count_plus">+</span>
                        </div>
                        <div class="page-cart-product-list-item__price">21900</div>
                        <div class="page-cart-product-list-item__remove">
                            <svg width="14px" height="14px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true" role="img"
                                 class="iconify iconify--emojione-monotone" preserveAspectRatio="xMidYMid meet">
                                <path
                                    d="M62 10.571L53.429 2L32 23.429L10.571 2L2 10.571L23.429 32L2 53.429L10.571 62L32 40.571L53.429 62L62 53.429L40.571 32z"
                                    fill="#7B7B7B"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="page-cart-product-list-item">
                        <div class="page-cart-product-list-item__info-wrap">
                            <div class="page-cart-product-list-item__image">
                                <img src="{{asset('images/products/prod_1s.jpg')}}" alt="">
                            </div>
                            <div class="page-cart-product-list-item__info">
                                <a href="#" class="page-cart-product-list-item__title">Стенка для гостинной Мона Люкс
                                    BMS</a>
                                <div class="page-cart-product-list-item__options">
                                    <span>красный</span>
                                    <span>144x123x123</span>
                                </div>
                            </div>
                        </div>
                        <div class="page-cart-product-list-item__count">
                            <span class="page-cart-product-list-item__count_minus">-</span>
                            <input type="text" name="count" value="1">
                            <span class="page-cart-product-list-item__count_plus">+</span>
                        </div>
                        <div class="page-cart-product-list-item__price">21900</div>
                        <div class="page-cart-product-list-item__remove">
                            <svg width="14px" height="14px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true" role="img"
                                 class="iconify iconify--emojione-monotone" preserveAspectRatio="xMidYMid meet">
                                <path
                                    d="M62 10.571L53.429 2L32 23.429L10.571 2L2 10.571L23.429 32L2 53.429L10.571 62L32 40.571L53.429 62L62 53.429L40.571 32z"
                                    fill="#7B7B7B"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="pcart-main-contact">
                    <span class="pcart-main-contact__title">1.Контактная информация</span>
                    <div class="pcart-main-contact__input-wrap">
                        <input name="name" placeholder="ФИО">
                        <input name="email" placeholder="E-mail">
                    </div>
                    <div class="pcart-main-contact__input-wrap">
                        <input name="phone" placeholder="Телефон">
                    </div>
                </div>
                <div class="pcart-main-delivery">
                    <span class="pcart-main-delivery__title">2.Способ получнения заказа</span>
                    <div class="pcart-main-delivery__items">
                        <label class="pcart-main-delivery__item">
                            <input type="radio" name="1">
                            <div class="pcart-main-delivery__item_box"></div>
                            <div class="pcart-main-delivery__item_info">
                                <span class="pcart-main-delivery__item_title">Доставка в пункт выдачи</span>
                                <span class="pcart-main-delivery__item_description">Срок и стоимость уточняйте у продавца</span>
                            </div>
                        </label>
                        <label class="pcart-main-delivery__item">
                            <input type="radio" name="1">
                            <div class="pcart-main-delivery__item_box"></div>
                            <div class="pcart-main-delivery__item_info">
                                <span class="pcart-main-delivery__item_title">Самовывоз</span>
                                <span class="pcart-main-delivery__item_description">Доступен в городе Симферополь, уточняйте у продавца</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="pcart-main-comment">
                    <span class="pcart-main-comment__title">3.Комментарий</span>
                    <textarea name="comment" placeholder="комментарий к заказу"
                              class="pcart-main-comment__textarea"></textarea>
                </div>
            </div>
            <div class="pcart-main-order">
                <div class="pcart-main-order-promo">
                    <input type="text" name="promocode" class="pcart-main-order-promo__input" placeholder="Промокод">
                    <button class="pcart-main-order-promo__btn">Применить</button>
                </div>
                <span class="pcart-main-order__title">Ваш заказ</span>
                <div class="pcart-main-order__info">
                    <div class="pcart-main-order__info-item">
                        <div class="pcart-main-order__info-item_title">Всего товаров:</div>
                        <div class="pcart-main-order__info-item_sep">.........</div>
                        <div class="pcart-main-order__info-item_value">4 шт</div>
                    </div>
                    <div class="pcart-main-order__info-item">
                        <div class="pcart-main-order__info-item_title">Сумма заказа:</div>
                        <div class="pcart-main-order__info-item_sep">.........</div>
                        <div class="pcart-main-order__info-item_value">4300 ₽</div>
                    </div>
                    <div class="pcart-main-order__info-item">
                        <div class="pcart-main-order__info-item_title">К оплате:</div>
                        <div class="pcart-main-order__info-item_sep">..................</div>
                        <div class="pcart-main-order__info-item_value result">17000 ₽</div>
                    </div>
                    <div class="cart-main-order__buy_wrap">
                        <button class="cart-main-order__buy">Оформить заказ</button>
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

        })
    </script>
@endsection

