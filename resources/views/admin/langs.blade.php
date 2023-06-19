@extends('adminlte::page')

@section('title', 'Langs')

@section('content_header')
    <h1>Languages</h1>
@stop

@section('content')
    <div class="container">
        <h1>Langs</h1>

        <!-- Formularul de creare a limbilor -->
        <form action="{{ route('langs.store') }}" method="POST" class="mb-3">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="language" class="form-control">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Lista limbilor existente -->
        <h2>Existing Languages:</h2>
        <ul class="list-group">
            @foreach ($languages as $language)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $language->name }}
                    <form action="{{ route('langs.destroy', $language->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@stop
