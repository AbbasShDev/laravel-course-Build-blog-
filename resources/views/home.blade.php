@extends('layouts.app')

@section('title', __('Home'))
@section('content')
<div class="container col-12 col-md-8">
    <a href="{{route('articles.create')}}" class="btn btn-large btn-info mb-5">{{__('New article')}}</a>

    <ul class="list-group">
        @forelse($articles as $article)
            <li class="list-group-item">
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                <form action="{{ route('articles.destroy', $article) }}" method="post" style="display: inline-block">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
                </form>
                <a href="{{ route('articles.show', $article) }}" class="text-info ml-2">
                    {{ $article->title }}
                </a>
            </li>
        @empty
            <li class="list-group-item">{{ __('No articles to show yet') }}</li>
        @endforelse
    </ul>

</div>
@endsection
