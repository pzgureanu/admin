@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Filters</div>
                        <div class="float-right">
                            <a href="{{ route('filters.create') }}" class="btn btn-success">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Active</th>
                                    <th style="width: 250px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($filters as $filter)
                                    <tr>
                                        <td>{{ $filter->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>{{ $filter->active ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a href="{{ route('filters.edit', $filter) }}"
                                                class="btn btn-sm btn-primary"> <i class="fas fa-fw fa-pen"></i></a>
                                            <form action="{{ route('filters.destroy', $filter) }}" method="POST"
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
