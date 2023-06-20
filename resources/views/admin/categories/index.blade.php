@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Categories</div>
                        <div class="float-right">
                            <a href="{{ route('categories.create') }}" class="btn btn-success">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Titlu</th>
                                    <th style="width: 250px;">Acțiuni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>
                                            <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-info">Vizualizează</a>
                                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-primary">Editează</a>
                                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Șterge</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
