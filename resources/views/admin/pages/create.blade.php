@extends('adminlte::page')

@section('title', 'Create Page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('pages.store') }}" method="POST">
                @csrf
                @if (!empty($page))
                    <input type="hidden" name="id" value="{{ $page->id }}">
                @endif
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
                                $value = empty($page) ?  '': $page->getTranslation('title', $locale);
                            @endphp
                            <input type="text" name="title[{{$locale}}]" class="form-control" value="{{ $value }}">
                        </div>
                        <div class="form-group">
                            @php 
                                $value = empty($page) ?  '': $page->getTranslation('meta_title', $locale);
                            @endphp
                            <label for="meta_title">Meta Title:</label>
                            <input type="text" name="meta_title[{{$locale}}]" class="form-control" value="{{ $value }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description:</label>
                            @php 
                                $value = empty($page) ?  '': $page->getTranslation('meta_description', $locale);
                            @endphp
                            <textarea name="meta_description[{{$locale}}]" class="form-control" rows="3">{{ $value }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Body:</label>
                            @php 
                                $value = empty($page) ?  '': $page->getTranslation('body', $locale);
                            @endphp
                            <textarea name="body[{{$locale}}]" class="summernote" rows="40">{{ $value }}</textarea>
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

@push('css')
<link rel="stylesheet" href="{{ asset('/vendor/summernote/summernote.css') }}">
@endpush

@push('js')
<script src="{{ asset('/vendor/summernote/summernote.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300
        });
    });
</script>
@endpush
