@extends('layouts.template')
@section('content')
<style>
.footer-wrapper{
    position: relative !important;
}
</style>
<div class="content-wrapper">
    <ul>
    @foreach($pokemons as $p)
        <a href="{{ route('pokemon.details', $p->name) }}"><li class="pokemon-list img-wrapper" style="background-color:{{$p->color[0]}}"><img src="{{$p->data['image']->front_default}}"><span class="pokemon-lbl">{{ $p->name }}</span></li>
    @endforeach
    </ul>
</div>
@endsection