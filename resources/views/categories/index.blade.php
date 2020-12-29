@extends('layouts.app')

@section('title', __('Categories'))

@section('content')
    <div class="container">
        <h4 class="text-info text-center">{{ __('All categories') }}</h4>
        @include('categories._show_categories')
    </div>

@endsection
