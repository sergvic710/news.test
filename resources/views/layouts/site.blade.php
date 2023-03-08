<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @yield('style')
</head>
<body>
<header class="d-flex align-items-center pb-3 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Новости</span>
    </a>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none text-bg-light">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Категории</span>
            </a>
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-light">
                <x-category-list/>
        </div>
    </div>
    <div class="col-8">
        @yield('content')
    </div>

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

</footer>


</div>
<!-- ./wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
@yield('javascript')
</body>
</html>

