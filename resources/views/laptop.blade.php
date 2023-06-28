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
                                                @if ($product->hasMedia('images'))
                                                    @foreach ($product->getMedia('images') as $image)
                                                        @php
                                                            $display = $loop->index === 0 ? 'display: block' : 'display: none';
                                                            
                                                        @endphp
                                                        <a data-uk-lightbox="{group:'product'}" class="lightbox"
                                                            href="{{ $image->getUrl() }}" title="{{ $product->title }}"
                                                            id="main_image_full_{{ $image->id }}"
                                                            style="{{ $display }}">
                                                            <img itemprop="image" src="{{ $image->getUrl() }}"
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
                                                                onclick="showImage({{ $image->id }})">
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
                                                    @foreach ($product->properties as $property)
                                                        <div>
                                                            {{ $property->property->getTranslation('title', app()->getLocale()) }}:
                                                            {{ $property->getTranslation('value', app()->getLocale()) }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-width-medium-1-2">
                                            <form name="product" method="post" action="https://comtel.md/cart/add"
                                                enctype="multipart/form-data" autocomplete="off">
                                                <div class="uk-grid">
                                                    <div class="uk-width-1-1">
                                                        <div itemprop="offers" itemscope=""
                                                            itemtype="http://schema.org/Offer" class="price_block_product">
                                                            <link itemprop="url" href="https://comtel.md/">
                                                            <link itemprop="availability" href="http://schema.org/InStock">
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
                                                                            @if ($product->discount)
                                                                                <span class="original-price"
                                                                                    style="text-decoration: line-through; color: #c0c0c0;">
                                                                                    {{ intval($product->price) }} MDL
                                                                                </span>
                                                                                <span class="discounted-price">
                                                                                    {{ intval($product->discount) }} MDL
                                                                                </span>
                                                                            @else
                                                                                {{ intval($product->price) }} MDL
                                                                            @endif
                                                                        </span>
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
                                        {!! $product->body !!}
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
