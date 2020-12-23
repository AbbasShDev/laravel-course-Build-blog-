<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | {{__('About us')}}</title>
</head>
<body>

</body>
</html>

@extends('layouts.app')

@section('title', __('About us'))

@section('content')

    <div class="container">
        <h1>{{__('Hello')}} {{ Auth::user()->name}}, {{__('from laravel')}}</h1>
        <a href="remove-session-name">Remove my name</a>
    </div>

@endsection
