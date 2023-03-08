@foreach($news as $item)
    <div class="card mt-2">
        <div class="card-body">
            <a href="{{ route('site.news.show',$item->id) }}" ><h5 class="card-title">{{ $item->title }}</h5></a>
            <div class="card-text">
                {{ $item->text }}
            </div>
            <a href="{{ route('site.news.show',$item->id) }}" class="card-link"> Показать</a>
        </div>
    </div>
@endforeach
11
{{ $news->links() }}
