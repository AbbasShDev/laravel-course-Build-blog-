@extends('layouts.app')

@section('title', __('Home'))
@section('content')
<div class="container">
    <a href="{{route('articles.create')}}" class="btn btn-large btn-info">{{__('New article')}}</a>
</div>
@endsection
