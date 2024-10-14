@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Startseite') }}</div>

                    <div class="card-body">
                        <h2>Willkommen bei MyHobbies</h2>
                        @auth
                            <p>Hallo {{ auth()->user()->name }}</p>
                        @endauth
                        @guest
                            <p>Hallo unbekannter, bitte erstelle dir <a href="/register">hier</a> einen Account</p>
                        @endguest
                        @auth
                            <a class="btn btn-primary btn-sm mt-3" href="/hobby/create"><i
                                    class="fas fa-plus-circle"></i>
                                Neues Hobby erstellen</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
