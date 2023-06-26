<div class="header_block">
    <div class="sticky_block">
        <div class="uk-sticky-placeholder" style="height: 138px; margin: 0px;">
            <div data-uk-sticky="" class="sticky_bar" style="margin: 0px;">
                <div class="uk-container uk-container-center">
                    <div class="logo_block"><a href="https://comtel.md/"><img src="{{ asset('/images/logo.jpg') }}"
                                alt="Logo"></a>
                    </div>
                    <div class="header_info_block">
                        <div class="contacts_block">
                            <div class="uk-panel">
                                <div class="adress">Кишинев, ул. Бэнулеску-Бодони 53А</div>
                                <div class="phone">+373 60 48 47 77</div>
                                <div class="shelude">Пн - Пт: 09:00 − 19:00 | Сб: 10:00 − 18:00</div>
                            </div>
                        </div>
                        <div class="menu_block">

                            <nav class="tm-navbar uk-navbar">
                                <div data-uk-dropdown="{mode:&#39;click&#39;}" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="menu_button"><i class="uk-icon-navicon"></i>
                                    </div>
                                    <div class="uk-dropdown menu_dropdown" aria-hidden="true">
                                        <ul class="uk-navbar-nav uk-hidden-small">
                                            <li class="uk-active"><a href="https://comtel.md/"
                                                    class="homepage">Главная</a></li>
                                            <li class="uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}"
                                                aria-haspopup="true" aria-expanded="false"><a
                                                    href="https://comtel.md/catalog">Каталог техники</a>
                                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1"
                                                    aria-hidden="true">
                                                    <div class="uk-grid uk-dropdown-grid">
                                                        <div class="uk-width-1-1">
                                                            <ul class="uk-nav uk-nav-navbar">
                                                                @foreach ($productTypes as $productType)
                                                                    <li><a
                                                                            href="{{ $productType->url }}">{{ $productType->title }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}"
                                                aria-haspopup="true" aria-expanded="false"><a
                                                    href="https://comtel.md/used-equipment-catalog">Каталог б/у
                                                    техники</a>
                                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom"
                                                    aria-hidden="true" tabindex="" style="top: 51px; left: 0px;">
                                                    <div class="uk-grid uk-dropdown-grid">
                                                        <div class="uk-width-1-1">
                                                            <ul class="uk-nav uk-nav-navbar">
                                                                <li><a
                                                                        href="https://comtel.md/used-equipment-catalog/computers-used">Компьютеры
                                                                        б/у</a></li>
                                                                <li><a
                                                                        href="https://comtel.md/used-equipment-catalog/laptops-used">Ноутбуки
                                                                        б/у</a></li>
                                                                <li><a
                                                                        href="https://comtel.md/used-equipment-catalog/smartphones-used">Смартфоны
                                                                        б/у</a></li>
                                                                <li><a
                                                                        href="https://comtel.md/used-equipment-catalog/tv-used">Телевизоры
                                                                        б/у</a></li>
                                                                <li><a
                                                                        href="https://comtel.md/used-equipment-catalog/monitors-used">Мониторы
                                                                        б/у</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}"
                                                aria-haspopup="true" aria-expanded="false"><a
                                                    href="https://comtel.md/accessories">Аксессуары</a>
                                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1"
                                                    aria-hidden="true">
                                                    <div class="uk-grid uk-dropdown-grid">
                                                        <div class="uk-width-1-1">
                                                            <ul class="uk-nav uk-nav-navbar">
                                                                <li><a
                                                                        href="https://comtel.md/accessories/case">Чехлы</a>
                                                                </li>
                                                                <li><a href="https://comtel.md/accessories/screen">Защита
                                                                        Дисплея</a></li>
                                                                <li><a
                                                                        href="https://comtel.md/accessories/cable">Кабели</a>
                                                                </li>
                                                                <li><a
                                                                        href="https://comtel.md/accessories/charger">Зарядки</a>
                                                                </li>
                                                                <li><a href="https://comtel.md/accessories/power-bank">Power
                                                                        Bank</a></li>
                                                                <li><a
                                                                        href="https://comtel.md/accessories/memory">Память</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="https://comtel.md/#tm-bottom-b"
                                                    data-uk-smooth-scroll="{offset:70}">Контакты</a></li>
                                            <li><a href="https://comtel.md/sale" class="sale">Скидки</a></li>
                                            <li><a href="https://comtel.md/we-will-buy-your-equipment">Купим Вашу
                                                    технику</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>
                    </div>

                    <div class="languages_block">
                        <div class="">
                            <div class="mod-languages ">
                                <div class="lang-active" dir="ltr">
                                    <a href="https://comtel.md/">
                                        RU </a>
                                </div>

                                <div class="" dir="ltr">
                                    <a href="https://comtel.md/ro/">
                                        RO </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="go-to-top">
    <div class="">
        <div class="uk-sticky-placeholder" style="height: 50px; margin: 0px;">
            <div data-uk-sticky="{top:0}" class="sticky_arrow" style="margin: 0px;"><a data-uk-smooth-scroll=""
                    href="https://comtel.md/#"><img src="{{ asset('/images/arrow_top.png') }}"
                        alt="Вверх страницы"></a></div>
        </div>
    </div>
</div>
