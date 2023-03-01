@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('manager.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" value="{{$news->title}}" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea name="text" class="form-control" placeholder="Text">{{$news->text}}</textarea>
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option disabled>Select category</option>
                            @foreach($categories as $category)
                                <option {{ ($news->category_id == $category->id) ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Сохранить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('javascript')
    <script src="{{ asset('/adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            $('.tags').select2();
            $('.colors').select2();
        });
    </script>
@endsection
