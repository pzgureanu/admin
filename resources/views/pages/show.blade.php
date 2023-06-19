@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $page->title }}</div>

                    <div class="card-body">
                        <p><strong>Titlu:</strong> {{ $page->title }}</p>
                        <p><strong>Meta Titlu:</strong> {{ $page->meta_title }}</p>
                        <p><strong>Meta Descriere:</strong> {{ $page->meta_description }}</p>
                        <p><strong>Limba:</strong> {{ $page->language->name }}</p> <!-- Adăugați această linie -->
                        <hr>
                        <p>{!! $page->body !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
