@extends('adminlte::page')

@section('title', 'Edit Page')

@section('content_header')
    <h1>Edit Page</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pages.update', $page->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $page->title }}">
                    </div>
                    <div class="form-group">
                        <label for="meta_title">Meta Title:</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $page->meta_title }}">
                    </div>
                    <div class="form-group">
                        <label for="meta_description">Meta Description:</label>
                        <textarea name="meta_description" class="form-control" rows="3">{{ $page->meta_description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea name="body" id="summernote" class="form-control" rows="10">{{ $page->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@stop
