@forelse($articles as $article)
    <div class="col-md-4 mt-4">
        <div class="card ">
            <h4 class="card-header"><a href="{{ route('articles.show', $article) }}" class="text-secondary">{{ $article->title }}</a></h4>
            <div class="card-body">{{ $article->content }}</div>
            <div class="card-footer ">{{ $article->user->name }}</div>
        </div>
    </div>
@empty
    <div>{{ __('No articles to show yet') }}</div>
@endforelse
