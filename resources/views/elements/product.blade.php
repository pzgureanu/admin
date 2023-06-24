<div class="uk-width-1-1 uk-width-medium-1-4">
    <div class="list_product_block" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
        <div class="image_block">
            <a itemprop="url" href="#">
                @if($product->hasMedia('images'))
                    <!-- Preia prima imagine din colecția de imagini a produsului -->
                    <img itemprop="image" class="jshop_img" src="{{ $product->getFirstMediaUrl('images') }}" alt="{{ $product->getTranslation('title', 'ro') }}">
                @else
                    <!-- O imagine placeholder în cazul în care produsul nu are imagini -->
                    <img itemprop="image" class="jshop_img" src="{{ asset('path/to/placeholder.png') }}" alt="No image">
                @endif
                <span itemprop="name">{{ $product->getTranslation('title', 'ro') }}</span>
            </a>
        </div>
        <div class="price">
            <!-- Include aici informațiile despre preț -->
        </div>
        <div class="info_block">
            <!-- Include aici informațiile detaliate despre produs -->
        </div>
    </div>
</div>
