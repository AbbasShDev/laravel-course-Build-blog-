@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $article->title }}
            </div>
            <div class="card-body">
                {!! nl2br($article->content) !!}
            </div>

            <div class="card-footer">
                    <div><b>{{ __('Author') }}: </b>{{ $article->user->name }}</div>
                    <div><b>{{ __('Created at') }}: </b>{{ $article->created_at }}</div>
                    <div><b>{{ __('Updated at') }}: </b>{{ $article->updated_at }}</div>

                    @foreach($categories as $category)
                    <a class="text-decoration-none" href="{{ route('categories.show', $category) }}"><span class="badge badge-info">{{ $category->title }}</span></a>
                    @endforeach
            </div>
        </div>

        <h3 class="text-info mt-2 mb-3">{{ __('Comments') }}</h3>

        @forelse($comments as $comment)
            <div class="card mt-2 col-10 col-md-6">
                <div class="card-body pt-2">
                    {{ $comment->comment }}

                    <div class="mt-2">
                        <small><b>{{__('Author')}}:</b> {{ $comment->user->name }}</small>
                    </div>
                    <div>
                        <small><b>{{__('Commented at')}}:</b> {{ $comment->created_at }}</small>

                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-info">
                {{ __('No comments to show') }}
            </div>
        @endforelse

        @auth
        <div id="comments-form" class="mt-5 col-12 col-md-8 mx-auto">
            <div class="card">
                <h5 class="card-header bg-secondary text-light text-center">{{ __('Add comment') }}</h5>
                <div class="card-body p-0">
                    <form action="{{ route('comments.store', $article->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="comment" id="comment" cols="30" rows="10"
                                      placeholder="{{ __('Type your comment here') }}"
                                      class="form-control"
                                      style="border: none; border-bottom: 1px solid rgba(0,0,0,.125); outline: none !important "
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-secondary ml-2" type="submit">{{ __("Save") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-warning mt-5">{{ __('Login to comment') }}</div>
        @endauth
    </div>



@endsection
