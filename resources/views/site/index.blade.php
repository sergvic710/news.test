@extends('layouts.site')
@section('content')
    <section class="content pt-4">
        @include('components.list-news')
{{--        @foreach($news as $item)--}}
{{--        <div class="card mt-2">--}}
{{--            <div class="card-body">--}}
{{--                <h5 class="card-title">{{ $item->title }}</h5>--}}
{{--                <div class="card-text">--}}
{{--                    {{ $item->text }}--}}
{{--                </div>--}}
{{--                <a href="{{ route('site.news.show',$item->id) }}" class="card-link"> Показать</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
    </section>
    <!-- /.content -->
@endsection
