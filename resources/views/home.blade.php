@extends('base')
@section('content')
    @include('elements.menu')
    @include('elements.slider', ['sliders' => $sliders])
    <div class="body_block">
        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">
                        <div id="system-message-container"></div>

                        <div class="page-header">
                            <h1>Брендовые ноутбуки</h1>
                        </div>
                        <div class="latest_products jshop jshop_list_product">
                            <div class="uk-grid uk-grid-large">
                            @foreach ($brandProducts as $product)
                                @if($product->active)
                                    @include('elements.product', ['product' => $product])
                                @endif
                            @endforeach
                            </div>
                        </div>

                        <div class="page-header">
                            <h1>Новые поступления</h1>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_a_block">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-a" class="tm-bottom-a uk-grid"
                data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="latest_products jshop jshop_list_product">
                            <div class="uk-grid uk-grid-large">
                            @foreach ($newProducts as $product)
                                @if($product->active)
                                    @include('elements.product', ['product' => $product])
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
@endsection
