@extends('layouts.app')

@section('title', 'Tags')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Alle Tags') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($tags as $tag)
                                <li class="list-group-item">
                                    <span class="mr-2 fs-6 badge text-bg-{{ $tag->style }}">{{ $tag->name }}</span>
                                    <a class="ms-2 btn btn-sm btn-outline-primary" href="/tag/{{ $tag->id }}/edit"><i
                                            class="fas fa-pencil"></i> Bearbeiten</a>
                                    <form style="display: inline;" action="/tag/{{ $tag->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="ms-2 btn btn-sm btn-outline-danger" type="submit" value="Löschen">
                                    </form>
                                    <a class="float-end text-decoration-none" href="/hobby/tag/{{ $tag->id }}">{{ $tag->hobbies->count() }} mal verwendet</a>
                                </li>
                            @endforeach
                        </ul>
                        <a class="btn btn-primary btn-sm mt-3" href="/tag/create"><i class="fas fa-plus-circle"></i>
                            Neuen
                            Tag erstellen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
