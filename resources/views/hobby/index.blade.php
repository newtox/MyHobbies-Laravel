@extends('layouts.app')

@section('title', 'Hobbies')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Alle Hobbies') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($hobbies as $hobby)
                                <li class="list-group-item">{{ $hobby->name }}
                                    <span class="mx-1">
                                        Von <a href="/user/{{ $hobby->user->id }}">{{ $hobby->user->name }}</a> ({{ $hobby->user->hobbies->count() }} Hobbies)
                                    </span>
                                    <a class="ms-2" href="/hobby/{{ $hobby->id }}">Detailansicht</a>
                                    <a class="ms-2 btn btn-sm btn-outline-primary"
                                       href="/hobby/{{ $hobby->id }}/edit"><i
                                            class="fas fa-pencil"></i> Bearbeiten</a>
                                    <form style="display: inline;" action="/hobby/{{ $hobby->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="ms-2 btn btn-sm btn-outline-danger" type="submit" value="Löschen">
                                    </form>
                                    <div class="float-end">
                                        {{ $hobby->created_at->diffForHumans() }}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @auth
                            <a class="btn btn-primary btn-sm mt-3" href="/hobby/create"><i
                                    class="fas fa-plus-circle"></i>
                                Neues
                                Hobby erstellen</a>
                        @endauth
                        <div class="mt-3">
                            {{ $hobbies->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
