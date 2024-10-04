@extends('layouts.app')

@section('title', 'Information')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Information') }}</div>

                    <div class="card-body">
                        Info über MyHobbies!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
