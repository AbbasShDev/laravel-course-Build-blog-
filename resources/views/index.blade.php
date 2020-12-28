@extends('layouts.app')

@section('title', __('Home'))

@section('content')
<div class="container">
    <div class="bg-light py-5 mb-4">
        <h1 class="text-center">{{ __('Welcome to') }} {{ config('app.name') }}</h1>
    </div>
    <h1 class="text-info">{{ __('Latest articles') }}</h1>
    <div class="row">
        @include('articles._card_article')
        <a href="{{ route('articles.index') }}" class="btn btn-link">{{ __('View all articles') }}</a>
    </div>
</div>
@endsection
