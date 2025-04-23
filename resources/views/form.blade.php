
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
                <form class="form" action="{{route('save')}}" method="post">
                    @csrf
                    @method('PUT')
                    <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
                    <input class="form-control" type="text" name="email" value="" placeholder="Email">
                    <input class="form-control" type="password" name="password" value="" placeholder="Contraseña">
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>