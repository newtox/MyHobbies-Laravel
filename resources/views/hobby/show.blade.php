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
                        @if($hobby->tags->count() > 0)
                            <p>
                                <b>Verknüpfte Tags:</b> (klicken zum entfernen)<br>
                                @foreach($usedTags as $tag)
                                    <a class="badge text-bg-{{ $tag->style }} ms-2 text-decoration-none"
                                       href="/hobby/{{ $hobby->id }}/tag/{{ $tag->id }}/detach">{{ $tag->name }}</a>
                                @endforeach
                            </p>
                        @endif
                        <p>
                            <b>Verfügbare Tags:</b> (klicken zum hinzufügen)<br>
                            @foreach($availableTags as $tag)
                                <a class="badge text-bg-{{ $tag->style }} ms-2 text-decoration-none"
                                   href="/hobby/{{ $hobby->id }}/tag/{{ $tag->id }}/attach">{{ $tag->name }}</a>
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

