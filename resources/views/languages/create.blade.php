@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Creare limbă</div>

                    <div class="card-body">
                        <form action="{{ route('languages.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="code">Cod limbă:</label>
                                <input type="text" name="code" id="code" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Nume limbă:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <!-- Alte câmpuri ale formularului -->

                            <button type="submit" class="btn btn-primary">Salvează</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
