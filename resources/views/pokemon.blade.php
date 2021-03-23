@extends('layouts.template')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4">
                <div class="pic">
                    <img src="{{$pokemon->pic->front_default}}">
                </div>
                <div class="cards">
                    <span>
                        {{$pokemon->name}}
                    </span>
                </div>
                @foreach($pokemon->types as $key => $value)
                <div class="cards" style="background-color: {{$pokemon->type_color[$key][0]}};">
                    <span>
                        {{$value->type->name}}
                    </span>
                </div>
                @endforeach 
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </div>
                    <div class="col-md-6 text-right">
                        Suspendisse egestas hendrerit sem sed volutpat.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
