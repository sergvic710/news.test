@extends('layouts.main')
@section('style')

@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление новости</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
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
                <form action="{{ route('manager.news.store') }}" method="post" enctype="multipart/form-data" style="width: 50%;">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Заголовок">
                    </div>
                    <div class="form-group">
                        <textarea name="text" rows="20" class="form-control" placeholder="Текст"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected" disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
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

