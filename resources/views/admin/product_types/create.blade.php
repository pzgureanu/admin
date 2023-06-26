@extends('adminlte::page')

@section('title', 'Create Product Type')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('product_types.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (!empty($productType))
                        <input type="hidden" name="id" value="{{ $productType->id }}">
                    @endif
                    <div class="p-0 pt-1 mt-4">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @foreach ($languages as $key => $locale)
                                <li class="nav-item">
                                    <a class="nav-link @if ($key === 0) active @endif"
                                       id="custom-tabs-one-{{ $locale }}-tab" data-toggle="pill" href="#tab-{{ $locale }}"
                                       role="tab" aria-controls="custom-tabs-one-{{ $locale }}" aria-selected="true">
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
                                 id="tab-{{ $locale }}" role="tabpanel" aria-labelledby="custom-tabs-one-{{ $locale }}-tab">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    @php
                                        $value = empty($productType) ? '' : $productType->getTranslation('title', $locale);
                                    @endphp
                                    <input type="text" name="title[{{ $locale }}]" class="form-control"
                                           value="{{ $value }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_title">Meta Title:</label>
                                    @php
                                        $value = empty($productType) ? '' : $productType->getTranslation('meta_title', $locale);
                                    @endphp
                                    <input type="text" name="meta_title[{{ $locale }}]" class="form-control"
                                           value="{{ $value }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description:</label>
                                    @php
                                        $value = empty($productType) ? '' : $productType->getTranslation('meta_description', $locale);
                                    @endphp
                                    <textarea name="meta_description[{{ $locale }}]" class="form-control">{{ $value }}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">
                        <i class="fas fa-fw fa-save"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop
