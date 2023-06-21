@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Pages</div>
                        <div class="float-right">
                            <a href="{{ route('pages.create') }}" class="btn btn-success">
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
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>
                                            <a href="{{ route('pages.edit', $page) }}"
                                                class="btn btn-sm btn-primary"> <i class="fas fa-fw fa-pen"></i></a>
                                            <form action="{{ route('pages.destroy', $page) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fas fa-trash-alt"></i></i></button>
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
