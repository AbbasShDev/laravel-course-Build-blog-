@forelse($articles as $article)
    <div class="col-md-4 mt-4">
        <div class="card ">
            <h4 class="card-header"><a href="{{ route('articles.show', $article) }}" class="text-secondary">{{ $article->title }}</a></h4>
            <div class="card-body">{{ $article->content }}</div>
            <div class="card-footer ">
                <div class="float-left">{{ $article->user->name }}</div>
                <div class="float-right">
                    @foreach($article->categories as $category)
                        <a class="text-decoration-none" href="{{ route('categories.show', $category) }}"><span class="badge badge-info">{{ $category->title }}</span></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@empty
    <h1 class="text-center text-info mx-auto">{{ __('No articles to show yet') }}</h1>
@endforelse
