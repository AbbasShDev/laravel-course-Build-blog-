@extends('layouts.app')

@section('title', __('Contact'))

@section('content')

    <div class="container">
        @include('_partials._closed_alert')
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        @php
        $today = date('Y-m-d H:i:s');
        @endphp
        <p>Today: {{$today}}</p>
{{--        <p>Today: {{date('Y-m-d H:i:s')}}</p>--}}
        @auth
        <p>@lang('interface.welcome_to_our_website'), {{ $user->name }}</p>
{{--        <p>{{trans('interface.welcome_to_our_website')}}, {{ $user->name }}</p>--}}
        @else
        <p>Welcome.</p>
        @endauth
        <hr>
        <h4>{{ $massage }}</h4>

        @if(date('D') != 'Mon')
            <p>{!! $info !!}</p>
        @endif
        <hr>
        <form action="" method="post">
            {{--    {{csrf_field()}}--}}
            {{--    <input type="hidden" name="_method" value="PUT">--}}
            @csrf
            @method('POST')
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="your name">
            </div>

            <div class="form-group">
                <select name="select-issue" id="select-issue" class="form-control">
{{--                    @foreach($options as $key => $option)--}}
{{--                        <option value="{{$key}}">{{$option}}</option>--}}
{{--                    @endforeach--}}
                    @forelse($options as $key => $option)
                            <option value="{{$key}}">{{$option}}</option>
                    @empty
                        <option value="null">Nothing to select</option>
                    @endforelse
                </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control"  name="massage" placeholder="Your Massage" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Send</button>
                </div>
            </form>
        </div>

    @endsection
