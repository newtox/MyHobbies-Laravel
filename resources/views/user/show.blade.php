@php
    use Illuminate\Support\Facades\URL;
@endphp

@extends('layouts.app')

@section('title', 'User Detailansicht')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('User Detailansicht') }}</div>

                    <div class="card-body">
                        <h3>{{ $user->name }}</h3>
                        <p><b>Motto: </b>{{ $user->motto }}</p>
                        <p>{{ $user->ueber_mich }}</p>
                        <ul>
                            @foreach($user->hobbies as $hobby)
                                <li>
                                    <a href="/hobby/{{ $hobby->id }}" class="text-decoration-none">
                                        <b>{{ $hobby->name }}</b>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <a class="btn btn-secondary btn-sm mt-4 float-end" href="{{ URL::previous() }}"><i
                                class="fas fa-circle-left"></i> Zurück</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

