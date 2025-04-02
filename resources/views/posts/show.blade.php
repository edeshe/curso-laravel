<!DOCTYPE html>
<html>
<head>
    <title>Lista de Posts</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Posts Guardados</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                @if(count($posts) > 0)
                    <ul class="list-group list-group-numbered">
                        @foreach($posts as $post)
                            <li class="list-group-item">
                                <strong>{{ $post['title'] }}</strong><br>
                                {{ $post['contenido'] }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-danger">No hay posts aún.</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{ route('posts.create') }}" class="btn btn-success">Crear otro post</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>