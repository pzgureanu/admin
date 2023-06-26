@extends('adminlte::page')

@section('title', 'Product Types')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Product Types</div>
                        <div class="float-right">
                            <a href="{{ route('product_types.create') }}" class="btn btn-success">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width: 250px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productTypes as $productType)
                                    <tr>
                                        <td>{{ $productType->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>
                                            <a href="{{ route('product_types.edit', $productType) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-fw fa-pen"></i>
                                            </a>
                                            <form action="{{ route('product_types.destroy', $productType) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
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
@stop
