<div class="row justify-content-around">
    @forelse($categories as $category)
        <a class="text-decoration-none" href="{{ route('categories.show', $category) }}"><div class="bg-info text-light px-5 py-3 mt-3 rounded-lg">{{ $category->title }}</div></a>
    @empty
        <h1 class="text-info text-center">{{ __('No categories to show') }}</h1>
    @endforelse
</div>
