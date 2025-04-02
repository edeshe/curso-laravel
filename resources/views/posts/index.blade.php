@extends('layout.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
    <div class="container">
        <div class="text-center align-items-center mb-4 mt-4">
            <h1 class="text-center text-primary mb-4 ">Práctica 2 - Blog</h1>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- <img src="{{ asset('images/Blog.jpg') }}" alt="Descripción de la imagen" class="me-3" style="width: 400px; height: 400px;"> -->
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Blog_%281%29.jpg/250px-Blog_%281%29.jpg
" class="d-block w-100 rounded img-fluid" alt="Imagen 1" style="border: 1px solid #ccc">
                        </div>
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            
            <div class="col-md-6">
                <h2>¿Qué es un blog?</h2>
                <p class="text-muted" style="text-align: justify; font-family: 'Arial', sans-serif;"> Un blog​ o bitácora​ es un sitio web que incluye, a modo de diario personal de su autor o autores, contenidos de su interés, que suelen estar actualizados con frecuencia y a menudo son comentados por los lectores.</p>​
                <p>Sirve como publicación en línea de historias con una periodicidad muy alta, que son presentadas en orden cronológico inverso, es decir, lo más reciente que se ha publicado es lo primero que aparece en la pantalla. Antes era frecuente que los blogs mostraran una lista de enlaces a otros blogs u otras páginas para ampliar información, citar fuentes o hacer notar que se continúa con un tema que empezó otro blog. </p>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Nuevo Post</a>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
        <li>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </li>
    @endforeach
@endsection


        
