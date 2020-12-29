@extends('layouts.app')

@section('title', __('Create category'))

@section('content')
    <div class="container col-md-6 mt-5">
        <h4 class="text-info">{{ __('Create category') }}</h4>
        @include('_partials._errors')
        <form action="{{route('categories.store')}}" method="post">
            @csrf
           <div class="form-group">
               <label for="title">{{ __('Category title') }}</label>
               <input type="text" name="title" id="title" class="form-control">
           </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
            </div>
        </form>
    </div>

@endsection
