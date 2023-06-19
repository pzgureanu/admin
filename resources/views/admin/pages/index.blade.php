@extends('adminlte::page')

@section('title', 'Pages')

@section('content_header')
    <h1>Pages</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Create Page</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>
                                    <a href="{{ route('pages.show', $page->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
