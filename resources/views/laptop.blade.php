@extends('base')
@section('content')
    @include('elements.menu')

    <div class="breadcrumbs_block">
        <div class="uk-container uk-container-center">
            <ol itemscope="" itemtype="https://schema.org/BreadcrumbList" class="uk-breadcrumb">
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a itemprop="item"
                        href="https://comtel.md/" class="pathway"><span itemprop="name">Главная</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a itemprop="item"
                        href="https://comtel.md/catalog" class="pathway"><span itemprop="name">Каталог техники</span></a>
                    <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a itemprop="item"
                        href="https://comtel.md/catalog/laptops" class="pathway"><span itemprop="name">Ноутбуки</span></a>
                    <meta itemprop="position" content="3">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="active"><span
                        itemprop="name">Acer Aspire E1-V5WE2 15.6"</span>
                    <meta itemprop="position" content="4">
                </li>
            </ol>
        </div>
    </div>
    <div class="body_block">
        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">

                    <main id="tm-content" class="tm-content">

                        <div id="system-message-container">
                        </div>
                        <script type="text/javascript">
                            var translate_not_available = "Нет в наличии выбранной опции";
                            var translate_zoom_image = "Увеличить изображение";
                            var product_basic_price_volume = 0.0000;
                            var product_basic_price_unit_qty = 1;
                            var currency_code = "MDL";
                            var format_currency = "00 Symb";
                            var decimal_count = 0;
                            var decimal_symbol = ".";
                            var thousand_separator = "";
                            var attr_value = new Object();
                            var attr_list = new Array();
                            var attr_img = new Object();
                            var liveurl = 'https://comtel.md/';
                            var liveattrpath = 'https://comtel.md/components/com_jshopping/files/img_attributes';
                            var liveproductimgpath = 'https://comtel.md/components/com_jshopping/files/img_products';
                            var liveimgpath = 'https://comtel.md/components/com_jshopping/images';
                            var urlupdateprice = '/catalog/product/ajax_attrib_select_and_price/533?ajax=1';
                            var joomshoppingVideoHtml5 = 0;
                            var joomshoppingVideoHtml5Type = '';
                        </script>
                        <div itemscope="" itemtype="http://schema.org/Product" class="jshop productfull" id="comjshop">
                            <h1 itemprop="name">
                                {{ $product->title }} </h1>
                            <div class="uk-grid">
                                <div class="product_image uk-width-1-1 uk-width-medium-2-5">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1 uk-width-medium-3-4">
                                            <!---->
                                            <div class="main_image">
                                                @if ($images->isNotEmpty())
                                                    @foreach ($images as $image)
                                                        <a data-uk-lightbox="{group:'product'}" class="lightbox"
                                                            href="{{ $image->getUrl() }}" title="{{ $product->title }}">
                                                            <img itemprop="image"
                                                                src="{{ $product->getFirstMediaUrl('images') }}"
                                                                alt="{{ $product->getTranslation('title', 'ro') }}"
                                                                title="{{ $product->getTranslation('title', 'ro') }}">
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-width-medium-1-4">
                                            <div class="list_thumbs">
                                                @if ($product->hasMedia('images'))
                                                    @foreach ($product->getMedia('images') as $image)
                                                        <div>
                                                            <img class="jshop_img_thumb" src="{{ $image->getUrl('thumb') }}"
                                                            alt="{{ $product->getTranslation('title', 'ro') }}"
                                                            title="{{ $product->getTranslation('title', 'ro') }}"
                                                            onclick="showImage({{ $loop->index }})">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_short_info uk-width-1-1 uk-width-medium-3-5">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1 uk-width-medium-1-2">
                                            <div class="infoblock">
                                                <div class="extra_fields">
                                                    <div class="extra_fields_el extra_field_9">
                                                        <span class="extra_fields_name">
                                                            CPU:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            Intel Celeron-2955U </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_6">
                                                        <span class="extra_fields_name">
                                                            Тип памяти:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            HDD </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_14">
                                                        <span class="extra_fields_name">
                                                            Объём памяти:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            512 GB </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_7">
                                                        <span class="extra_fields_name">
                                                            Дисплей:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            15.6 </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_15">
                                                        <span class="extra_fields_name">
                                                            Разрешение:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            1366x768 px </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_8">
                                                        <span class="extra_fields_name">
                                                            RAM:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            4 GB </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_13">
                                                        <span class="extra_fields_name">
                                                            Видеокарта:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            Intel HD Graphics </span>
                                                    </div>
                                                    <div class="extra_fields_el extra_field_11">
                                                        <span class="extra_fields_name">
                                                            Battery:
                                                        </span>
                                                        <span class="extra_fields_value">
                                                            2 часа </span>
                                                    </div>
                                                    <div class="extra_field_0"><span class="extra_fields_value">Товар
                                                            сертифицирован</span>
                                                    </div>
                                                    <div class="extra_field_0"><span class="extra_fields_value">Гарантия
                                                            качества</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-width-medium-1-2">
                                            <form name="product" method="post" action="https://comtel.md/cart/add"
                                                enctype="multipart/form-data" autocomplete="off">
                                                <div class="uk-grid">
                                                    <div class="uk-width-1-1">
                                                        <div itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer"
                                                            class="price_block_product">
                                                            <link itemprop="url" href="https://comtel.md/">
                                                            <link itemprop="availability"
                                                                href="http://schema.org/InStock">
                                                            <meta itemprop="price" content="2500.000000">
                                                            <meta itemprop="priceCurrency" content="MDL">
                                                            <meta itemprop="itemCondition"
                                                                content="https://schema.org/NewCondition">
                                                            <meta itemprop="priceValidUntil" content=" 2023-06-26 ">
                                                            <div itemprop="seller"
                                                                itemtype="http://schema.org/Organization" itemscope="">
                                                                <meta itemprop="name" content="Body PIT">
                                                            </div>

                                                            <div class="uk-vertical-align price_block">
                                                                <div class="uk-vertical-align-bottom">
                                                                    <div class="price_product prod_price">
                                                                        <span id="block_price">
                                                                            2500 MDL </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="to" id="to"
                                                                value="cart"><input type="hidden" name="product_id"
                                                                id="product_id" value="533"><input type="hidden"
                                                                name="category_id" id="category_id" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div itemprop="description" class="product_description">
                                        <p><strong>Характеристики:</strong></p>
                                        <p>&gt;Процессор: Intel Celeron-2955U CPU 1.40 GHz DualCore<br>&gt;Оперативная
                                            память: 4 GB DDR3<br>&gt;Жёсткий диск: 500 GB HDD<br>&gt;Дисплей: 15.6*-дюймов,
                                            1366x768 HD<br>&gt;Видеокарта:Intel HD Graphics<br>&gt;Батарея: 2
                                            ч<br>Оригинальная
                                            зарядка</p>
                                        <p><strong>Описание товара:</strong></p>
                                        <p>Отличное решение для ежедневных задач!<br>Легко с ними справляется!</p>
                                        <p>Вас порадует тихая работа лэптопа!<br>Скорость загрузки и качество изображения!
                                        </p>
                                        <p>Удобно брать с собой, портативный и легкий!</p>
                                        <p><strong>Есть гарантия!</strong><br><strong>Можно в кредит!</strong></p>
                                        <p><strong>Работаем также с переводами на компанию!</strong></p>
                                    </div>
                                    <!--<div class="delivery_info">
                    <div class="moduletable">
                  
             <h3>Доставка и оплата</h3>
            <h4>Bodypit доставляет заказы по всей Молдове!</h4>
            <ul>
                <li>Мы доставим Ваши покупки по удобному для вас адресу в Кишиневе совершенно бесплатно при заказе от 300 леев.</li>
                <li>Также мы предлагаем Express доставку в течении 3-х часов (по Кишиневу) по отдельному тарифу.</li>
                <li>Стоимость доставки по территории Молдовы оговаривается отдельно.</li>
            </ul>
            <h4>Способ оплаты</h4>
            <p>Мы принимаем любой способ оплаты, удобный для нашего клиента:</p>
            <ul>
                <li>Оплата наличными</li>
                <li>Оплата банковской картой</li>
            </ul>		</div>
                  </div>

            -->
                                </div>
                                <div class="product_info uk-width-1-1">

                                </div>
                            </div>

                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script async="" src="{{ asset('js/slideshow.js') }}"></script>
    <script async="" src="{{ asset('js/slideset.js') }}"></script>
    <script async="" src="{{ asset('js/functions.js') }}"></script>
@endpush
