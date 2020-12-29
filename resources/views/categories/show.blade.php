@extends('layouts.app')

@section('title', $category->title)

@section('content')
    <div class="container">
        <h4 class="text-center text-info my-4">{{ $category->title }}</h4>
        <div class="row">
            @include('articles._card_article')
        </div>
    </div>

@endsection
