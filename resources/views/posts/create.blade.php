@extends('layout.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Crear Nuevo Post</h2>
        </div>
        <div class ="card-body">
            <form action="{{route('posts.store')}}" method = "post">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type = "text" name="title" id="title" class="form-control" placeholder="Titulo del post">
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <textarea name="contenido" id="contenido" class="form-control" placeholder="Contenido del post" rows="10"></textarea>
                </div>
                <button class="btn btn-success mt-3">
                    <i class="fas fa-save"></i> Guardar
                </button>
            </form>



        </div>
    </div>
@endsection