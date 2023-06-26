@extends('adminlte::page')

@section('title', 'Creare Setări')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('settings.store') }}" method="POST">
                    @csrf
                    @if (!empty($setting))
                        <input type="hidden" name="id" value="{{ $setting->id }}">
                    @endif

                    <div class="form-group">
                        <label for="address">Adresă:</label>
                        <input type="text" name="address" class="form-control"
                            value="{{ $setting->address ?? '' }}">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Număr de telefon:</label>
                        <input type="text" name="phone_number" class="form-control"
                            value="{{ $setting->phone_number ?? '' }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control"
                            value="{{ $setting->email ?? '' }}">
                    </div>

                    <div class="form-group">
                        <label for="schedule">Program:</label>
                        <input type="text" name="schedule" class="form-control"
                            value="{{ $setting->schedule ?? '' }}">
                    </div>

                    <!-- Social media links -->
                    <div class="form-group">
                        <label for="instagram">Instagram:</label>
                        <input type="text" name="instagram" class="form-control"
                            value="{{ $setting->instagram ?? '' }}">
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook:</label>
                        <input type="text" name="facebook" class="form-control"
                            value="{{ $setting->facebook ?? '' }}">
                    </div>
                    
                    

                    <div class="form-group">
                        <label for="messenger">Messenger:</label>
                        <input type="text" name="messenger" class="form-control"
                            value="{{ $setting->messenger ?? '' }}">
                    </div>
                    

                    <div class="form-group">
                        <label for="viber">Viber:</label>
                        <input type="text" name="viber" class="form-control"
                            value="{{ $setting->viber ?? '' }}">
                    </div>
                    

                    <div class="form-group">
                        <label for="whatsapp">WhatsApp:</label>
                        <input type="text" name="whatsapp" class="form-control"
                            value="{{ $setting->whatsapp ?? '' }}">
                    </div>
                    


                    <button type="submit" class="btn btn-primary mt-3">
                        Salvează
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop
