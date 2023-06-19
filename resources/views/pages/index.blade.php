@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left text-xl">Lista paginilor</div>
                        <div class="float-right">
                            <a href="{{ route('pages.create') }}" class="btn btn-success">Adaugă pagină nouă</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Titlu</th>
                                    <th>Acțiuni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td>{{ $page->title }}</td>
                                        <td>
                                            <a href="{{ route('pages.show', $page) }}" class="btn btn-sm btn-info">Vizualizează</a>
                                            <a href="{{ route('pages.edit', $page) }}" class="btn btn-sm btn-primary">Editează</a>
                                            <form action="{{ route('pages.destroy', $page) }}" method="POST" style="display: inline-block;">
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
