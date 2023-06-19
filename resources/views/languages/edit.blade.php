@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editare limbă</div>

                    <div class="card-body">
                        <form action="{{ route('languages.update', $language->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="code">Cod limbă:</label>
                                <input type="text" name="code" id="code" class="form-control" value="{{ $language->code }}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Nume limbă:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $language->name }}" required>
                            </div>

                            <!-- Alte câmpuri ale formularului -->

                            <button type="submit" class="btn btn-primary">Actualizează</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
