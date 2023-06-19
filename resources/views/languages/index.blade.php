@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left text-xl">Lista limbilor</div>
                        <div class="float-right">
                            <a href="{{ route('languages.create') }}" class="btn btn-success">Adaugă limba nouă</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Cod</th>
                                    <th>Nume</th>
                                    <th>Acțiuni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($languages as $language)
                                    <tr>
                                        <td>{{ $language->code }}</td>
                                        <td>{{ $language->name }}</td>
                                        <td>
                                            <a href="{{ route('languages.edit', $language->id) }}" class="btn btn-sm btn-primary">Editează</a>
                                            <form action="{{ route('languages.destroy', $language->id) }}" method="POST" class="d-inline">
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
