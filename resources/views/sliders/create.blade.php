@extends('adminlte::page')

@section('title', 'Create Slider')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (!empty($slider))
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $slider->id }}">
                @endif
                <div class="form-group">
                    <label for="order">Order:</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $slider->order ?? '') }}">
                </div>
                <div class="form-group">
                    <label for="image">Imagine:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="p-0 pt-1 mt-4">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        @foreach ($languages as $key => $locale)
                        <li class="nav-item">
                            <a class="nav-link @if($key === 0) active @endif" id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-{{$key}}" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">
                                <img src="{{ asset('/images/'. $locale.'.png')}}" style="width: 20px;" alt="">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content p-4 border bg-white border-top-0" id="custom-tabs-one-tabContent">
                    @foreach ($languages as $k => $locale)
                    <div class="tab-pane fade @if($k === 0) show active @endif" id="tab-{{$k}}" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            @php 
                                $value = empty($slider) ?  '': $slider->getTranslation('title', $locale);
                            @endphp
                            <input type="text" name="title[{{$locale}}]" class="form-control" value="{{ $value }}">
                        </div>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary mb-4">
                    <i class="fas fa-fw fa-save"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@stop
