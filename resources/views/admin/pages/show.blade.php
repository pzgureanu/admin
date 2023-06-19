@extends('adminlte::page')

@section('title', 'Page Details')

@section('content_header')
    <h1>Page Details</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Title: {{ $page->title }}</h2>
                <p>Meta Title: {{ $page->meta_title }}</p>
                <p>Meta Description: {{ $page->meta_description }}</p>
                <div>{!! $page->body !!}</div>
            </div>
        </div>
    </div>
@stop
