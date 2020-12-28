@extends('layouts.app')

@section('title', __('Articles'))

@section('content')
    <div class="container">
        <div class="row">
            @include('articles._card_article')
        </div>
    </div>

@endsection
