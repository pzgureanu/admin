@extends('adminlte::page')

@section('title', 'Products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Products</div>
                        <div class="float-right">
                            <a href="{{ route('products.create') }}" class="btn btn-success">
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
                                    <th>Image</th> <!-- New column for image -->
                                    <th style="width: 250px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>{{ $product->active ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <!-- Display the image -->
                                            <img src="{{ $product->getFirstMediaUrl('images') }}" style="width: 60px;">
                                        </td>
                                        <td>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-fw fa-pen"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST"
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
