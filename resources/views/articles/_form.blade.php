@csrf
<div class="form-group">
    <label for="title">{{ __('Article title') }}</label>
    <input type="text" name="title" id="title" class="form-control"
        @isset($article) value="{{ $article->title }}" @endisset
    >
</div>

<div class="form-group">
    @foreach($categories as $category)

        <label for="category_{{$category->id}}">{{ $category->title }}</label>
        <input type="checkbox" id="category_{{$category->id}}" name="categories[]" value="{{ $category->id }}"
        @if(isset($article) && in_array($category->id, $articleCategories )) checked @endif
        >

    @endforeach
</div>

<div class="form-group">
    <label for="content">{{ __('Article content') }}</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control">
        @isset($article) {{$article->content}}@endisset
    </textarea>
</div>

<div class="form-group">
    <button class="btn btn-info">{{ $submitButton }}</button>
</div>
