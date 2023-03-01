<ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
        <a href="{{ route('site.index') }}" class="nav-link text-dark" aria-current="page">
            Все
        </a>
    </li>
@foreach($categories as $category)
    <li class="nav-item">
        <a href="{{ route('site.news.category', $category->id) }}" class="nav-link text-dark" aria-current="page">
            {{ $category->title }}
        </a>
    </li>
@endforeach
</ul>

