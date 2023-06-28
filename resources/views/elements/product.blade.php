<div class="uk-width-1-1 uk-width-medium-1-4">
    <div class="list_product_block" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
        <div class="image_block">
            <a itemprop="url" href="{{ route(app()->getLocale() . '.laptop', $product->slug) }}">
                @if ($product->hasMedia('images'))
                    <!-- Preia prima imagine din colecția de imagini a produsului -->
                    <img itemprop="image" class="jshop_img" src="{{ $product->getFirstMediaUrl('main') }}"
                        alt="{{ $product->getTranslation('title', 'ro') }}">
                @else
                    <!-- O imagine placeholder în cazul în care produsul nu are imagini -->
                    <img itemprop="image" class="jshop_img" src="{{ asset('path/to/placeholder.png') }}" alt="No image">
                @endif
                <span itemprop="name">{{ $product->getTranslation('title', 'ro') }}</span>
            </a>
        </div>
        <div class="price" itemprop="offers" itemtype="http://schema.org/Offer" itemscope="">
            <link itemprop="availability" href="http://schema.org/InStock">
            <meta itemprop="priceCurrency" content="MDL">
            <meta itemprop="itemCondition" content="https://schema.org/NewCondition">
            <link itemprop="url" href="{{ route(app()->getLocale() . '.laptop', $product->slug) }}">
            <div itemprop="seller" itemtype="http://schema.org/Organization" itemscope="">
                <meta itemprop="name" content="Body PIT">
            </div>

            <div>
                @if ($product->discount)
                    <span class="jshop_price original-price" style="text-decoration: line-through; color: #c0c0c0;">
                        {{ $product->price }} MDL
                    </span>
                    <span class="jshop_price" itemprop="price">
                        {{ $product->discount }} MDL
                    </span>
                @else
                    <span class="jshop_price" itemprop="price">
                        {{ $product->price }} MDL
                    </span>
                @endif
            </div>
        </div>

    </div>
    <div class="info_block">
        <div class="description">
        </div>
        <div class="short_info">
            <div class="extra_fields">
                @foreach ($product->properties as $property)
                    <div>
                        {{ $property->property->getTranslation('title', app()->getLocale()) }}:
                        {{ $property->getTranslation('value', app()->getLocale()) }}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clr"></div>
        <div class="buttons">
        </div>
        <div class="clr"></div>
        <div class="quantity">
        </div>
    </div>
</div>
</div>
