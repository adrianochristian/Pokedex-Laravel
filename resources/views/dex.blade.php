@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <ul>
    @foreach($pokemons as $p)
        <li class="pokemon-list img-wrapper" style="background-color:{{$p->color[0]}}"><img src="{{$p->data['image']->front_default}}" class="pokemon-img"><span class="pokemon-lbl">{{ $p->name }}</span></li>
    @endforeach
    </ul>
</div>
@endsection