@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <div class="pokemon-pic">
        <img src="{{$pokemon->pic->front_default}}">
    </div>
    <div class="pokemon-info">
        <span>Name: {{$pokemon->name}}</span>
        <span class="">Types: 
        @foreach($pokemon->types as $pt)
        {{$pt->type->name}}
        @endforeach
        </span>
    </div>
</div>
@endsection