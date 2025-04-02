@if($num == 8)
    <div class="col-md-3 col-sm-6 col-xs-12">Es igual!</div>
@elseif($num < 8)
    <div class="col-md-3 col-sm-6 col-xs-12">Es menor</div>
@else
    <div class="col-md-3 col-sm-6 col-xs-12">Es mayor</div>
@endif

@isset($data)
<h2>La variable existe...</h2>
@endisset

@empty($vacia)
<h2>La variable esta vacia...</h2>
@endempty

@foreach ($nombres as $idx => $bro)
    <h4>Nombre({{$idx}})... {{$bro}}</h4>
@endforeach
