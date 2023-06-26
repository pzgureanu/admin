@extends('adminlte::page')

@section('title', 'Settings')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Settings</div>
                        <div class="float-right">
                            <a href="{{ route('settings.create') }}" class="btn btn-sm btn-success">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="width: 250px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{ $setting->id }}</td>
                                        <td>
                                            <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-fw fa-pen"></i>
                                            </a>
                                            <form action="{{ route('settings.destroy', $setting->id) }}" method="POST"
                                                class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-fw fa-trash"></i>
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
