@extends('adminlte::page')

@section('title', 'Create Page')

@section('content_header')
<h1>Create Page</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('pages.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="meta_title">Meta Title:</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description:</label>
                    <textarea name="meta_description" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea name="body" id="summernote" class="form-control" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
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
        $('#summernote').summernote();
    });
</script>
@endpush