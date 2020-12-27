@extends('layouts.app')

@section('title', __('Create article'))

@section('content')
    <div class="container">
        <h4 class="text-info">{{ __('Create article') }}</h4>

        <form action="{{route('articles.store')}}" method="post">
            @include('articles._form', ['submitButton' => __('Save')])
        </form>
    </div>

@endsection
