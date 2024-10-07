@extends('layouts.app')

@section('title', 'Hobby erstellen')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Neues Hobby erstellen') }}</div>

                    <div class="card-body">
                        <form action="/hobby" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control w-50" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung</label>
                                <textarea class="form-control w-50" id="beschreibung" name="beschreibung" rows="2"></textarea>
                            </div>
                            <input class="btn btn-success mt-4" type="submit" value="Hobby erstellen">
                        </form>
                        <a class="btn btn-secondary btn-sm mt-3 float-end" href="/hobby"><i class="fas fa-circle-left"></i> Zurück</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
