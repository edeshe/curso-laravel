@props(['type' => 'info', 'message'])
<span class="alert-title">{{ $title }}</span>
{{ $slot }}
<section {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    @if($slot->isEmpty())
        <div>Esta vacio!!!</div>
    @else
        {{ $slot }}
    @endif
    {{-- {{dd($attributes)}} --}} {{-- Muestra el contenido de... y detiene la ejecución --}}
    <h2>Alert componente...</h2>
    <h3>Tipo de alerta: {{$type}}</h3>
    <h3>Mensaje: {{$name}}</h3>
    @foreach ($languages('phyton') as $item)
        <h4 style="margin-left: 20px;">This is user {{ $item }}</h4>
    @endforeach
    <h4>Lenguaje: {{$language}}</h4>
</section>