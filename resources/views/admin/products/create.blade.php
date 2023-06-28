@extends('adminlte::page')

@section('title', 'Create Product')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-4">
                            <label for="">Slug</label>
                            @php
                                $value = empty($product) ? '' : $product->slug;
                                $value = old('slug', $value);
                            @endphp
                            <input type="text" name="slug" id="" value="{{ $value }}"
                                class="form-control">
                        </div>
                        @csrf
                        @if (!empty($product))
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        @endif

                        {{-- Select input for product type --}}
                        <div class="form-group">
                            <label for="product_type_id">Product Type:</label>
                            <select name="product_type_id" id="product_type_id" class="form-control">
                                @foreach ($productTypes as $productType)
                                    <option value="{{ $productType->id }}"
                                        {{ !empty($product) && $product->product_type_id == $productType->id ? 'selected' : '' }}>
                                        {{ $productType->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="p-0 pt-1 mt-4">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                @foreach ($languages as $key => $locale)
                                    <li class="nav-item">
                                        <a class="nav-link @if ($key === 0) active @endif"
                                            id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-{{ $key }}"
                                            role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">
                                            <img src="{{ asset('/images/' . $locale . '.png') }}" style="width: 20px;"
                                                alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content p-4 border bg-white border-top-0" id="custom-tabs-one-tabContent">
                            @foreach ($languages as $k => $locale)
                                <div class="tab-pane fade @if ($k === 0) show active @endif"
                                    id="tab-{{ $k }}" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        @php
                                            $value = empty($product) ? '' : $product->getTranslation('title', $locale);
                                        @endphp
                                        <input type="text" name="title[{{ $locale }}]" class="form-control"
                                            value="{{ $value }}">
                                    </div>
                                    <div class="form-group">
                                        @php
                                            $value = empty($product) ? '' : $product->getTranslation('meta_title', $locale);
                                        @endphp
                                        <label for="meta_title">Meta Title:</label>
                                        <input type="text" name="meta_title[{{ $locale }}]" class="form-control"
                                            value="{{ $value }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description:</label>
                                        @php
                                            $value = empty($product) ? '' : $product->getTranslation('meta_description', $locale);
                                        @endphp
                                        <textarea name="meta_description[{{ $locale }}]" class="form-control" rows="3">{{ $value }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body:</label>
                                        @php
                                            $value = empty($product) ? '' : $product->getTranslation('body', $locale);
                                        @endphp
                                        <textarea name="body[{{ $locale }}]" class="summernote" rows="40">{{ $value }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group mt-4">
                            <label for="imagine">Thumbnail:</label>
                            <input type="file" id="imagine" name="imagine">
                        </div>

                        @if ($product)
                            <img src="{{ $product->getFirstMediaUrl('main') }}" style="width: 60px;">
                        @endif

                        <div class="form-group mt-4">
                            <label for="images">Images:</label>
                            <input type="file" id="images" name="images[]" accept="image/*" multiple>
                        </div>

                        @if ($product)
                            <div class="d-flex">
                                @foreach ($product->getMedia('images')->all() as $media)
                                    <div class="thumbnail">
                                        <span class="delete" data-id="{{ $media->id }}">x</span>
                                        <img src="{{ $media->getUrl() }}" style="width: 60px;">
                                    </div>
                                @endforeach
                            </div>

                        @endif

                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" name="active" id="active"
                                {{ !empty($product) && $product->active ? 'checked' : '' }}>
                            <label class="form-check-label" for="active">
                                Active
                            </label>
                        </div>

                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" name="is_new" id="is_new"
                                {{ !empty($product) && $product->is_new ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_new">
                                Nou
                            </label>
                        </div>

                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" name="is_brand" id="is_brand"
                                {{ !empty($product) && $product->is_brand ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_brand">
                                Brand
                            </label>
                        </div>

                        <div class="form-group mt-4">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price"
                                value="{{ !empty($product) ? $product->price : '' }}">
                        </div>

                        <div class="form-group mt-4">
                            <label for="discount">Discount</label>
                            <input type="number" step="0.01" class="form-control" id="discount" name="discount"
                                value="{{ !empty($product) ? $product->discount : '' }}">
                        </div>

                        <br>
                        <?php
                        $value = '';
                        $productProperties = [];
                        
                        if ($product && $product->properties) {
                            foreach ($product->properties as $productProperty) {
                                foreach ($languages as $l) {
                                    $productProperties[$productProperty->property_id][$l] = $productProperty->getTranslation('value', $l);
                                }
                            }
                        }
                        ?>
                        @foreach ($properties as $property)
                            <div class="row">
                                @foreach (['ro', 'ru'] as $locale)
                                    @php($value = \Illuminate\Support\Arr::get($productProperties, $property->id . '.' . $locale))
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label
                                                for="">{{ $property->getTranslation('title', app()->getLocale()) }}
                                                ({{ $locale }})
                                            </label>
                                            <input type="text"
                                                name="properties[{{ $property->id }}][{{ $locale }}]"
                                                class="form-control" value="{{ $value }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary mt-3 mb-3">
                            <i class="fas fa-fw fa-save"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @stop

    @push('css')
        <link rel="stylesheet" href="{{ asset('/vendor/summernote/summernote.css') }}">
        <style>
            .thumbnail {
                position: relative;
                margin-right: 15px;
                border: 1px solid #dedede;
                background: #dedede;
                padding: 10px;
            }

            .thumbnail .delete {
                display: inline-block;
                position: absolute;
                right: 0;
                top: 0;
                background: red;
                color: #fff;
                height: 25px;
                width: 25px;
                text-align: center;
                line-height: 25px;
            }
        </style>
    @endpush

    @push('js')
        <script src="{{ asset('/vendor/summernote/summernote.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 300
                });

                $('.delete').on('click', function() {
                    const th = $(this);

                    if (confirm('Delete image?')) {
                        const data = {
                            id: $(this).attr('data-id')
                        }

                        $.post("/admin/product-delete-image", data, function() {
                            th.parent().remove();
                        });
                    }

                });
            });
        </script>
    @endpush
