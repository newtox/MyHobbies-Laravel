@php
    use Illuminate\Support\Facades\URL;
@endphp

@extends('layouts.app')

@section('title', 'Hobby Detailansicht')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Hobby Detailansicht') }}
                        <div class="float-end">
                            <a href="/user/{{ $hobby->user->id }}">{{ $hobby->user->name }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <p><b>{{ $hobby->name }}</b></p>
                        <p>{{ $hobby->beschreibung }}</p>
                        <p>
                            @foreach($hobby->tags as $tag)
                                <a class="badge text-bg-{{ $tag->style }} me-2 text-decoration-none"
                                   href="/tag/{{ $tag->id }}/edit">{{ $tag->name }}</a>
                            @endforeach
                        </p>
                        <a class="btn btn-primary btn-sm mt-4" href="{{ URL::previous() }}"><i
                                class="fas fa-circle-left"></i> Zurück zur Übersicht</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

