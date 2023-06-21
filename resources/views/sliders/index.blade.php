@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-left text-xl">Sliders</div>
                        <div class="float-right">
                            <a href="{{ route('sliders.create') }}" class="btn btn-success">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Imagine</th>
                                    <th>Ordine</th>
                                    <th>Titlu</th>
                                    <th style="width: 250px;">Acțiuni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td><img src="{{ $slider->getFirstMediaUrl('images') }}" alt="{{ $slider->title }}" width="100"></td>
                                        <td>{{ $slider->order }}</td>
                                        <td>{{ $slider->getTranslation('title', app()->getLocale()) }}</td>
                                        <td>
                                            <a href="{{ route('sliders.show', $slider) }}" class="btn btn-sm btn-info"><i class="fas fa-tv"></i></a>
                                            <a href="{{ route('sliders.edit', $slider) }}" class="btn btn-sm btn-primary"> <i class="fas fa-fw fa-pen"></i></a>
                                            <form action="{{ route('sliders.destroy', $slider) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
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
