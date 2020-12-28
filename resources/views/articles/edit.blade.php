@extends('layouts.app')

@section('title', __('Edit article'))

@section('content')
    <div class="container">
        @include('_partials._errors')
        <h4 class="text-info">{{ __('Edit article') }} : <span class="text-dark">{{ $article->title }}</span></h4>
        <form action="{{route('articles.update', $article->id)}}" method="post">
            @method('PATCH')
            @include('articles._form', ['submitButton' => __('Edit')])
        </form>
    </div>

@endsection
