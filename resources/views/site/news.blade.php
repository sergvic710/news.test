@extends('layouts.site')
@section('content')
    <section>
        <h2>{{ $news->title }}</h2>
        <hr/>
        {!! $news->text !!}
    </section>
@endsection
