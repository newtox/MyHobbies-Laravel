@extends('layouts.app')

@section('title', 'Tag erstellen')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Neuen Tag erstellen') }}</div>

                    <div class="card-body">
                        <form action="/tag" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"
                                       class="form-control w-50 {{ $errors->has('name') ? 'border-danger' : '' }}"
                                       id="name" name="name" value="{{ old('name') }}">
                                <small class="form-text text-danger">{!! $errors->first('name') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="style">Style</label>
                                <select id="style" name="style" class="form-select w-50">
                                    <option>primary</option>
                                    <option>secondary</option>
                                    <option>success</option>
                                    <option>danger</option>
                                    <option>warning</option>
                                    <option>info</option>
                                    <option>light</option>
                                    <option>dark</option>
                                </select>
                                {{-- <input type="text"
                                       class="form-control w-50 {{ $errors->has('style') ? 'border-danger' : '' }}"
                                       id="style" name="style" value="{{ old('style') }}">
                                <small class="form-text text-danger">{!! $errors->first('style') !!}</small> --}}
                            </div>
                            <input class="btn btn-success mt-4" type="submit" value="Tag erstellen">
                        </form>
                        <a class="btn btn-secondary btn-sm mt-3 float-end" href="/tag"><i
                                class="fas fa-circle-left"></i> Zurück</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
