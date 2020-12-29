@extends('layouts.app')

@section('title', __('Edit category'))

@section('content')
    <div class="container col-md-6 mt-5">
        <h4 class="text-info">{{ __('Edit category') }}</h4>
        @include('_partials._errors')
        <form action="{{route('categories.update', $category)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">{{ __('Category title') }}</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">{{ __('Edit') }}</button>
            </div>
        </form>
    </div>

@endsection
