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
                <div class="cards" style="background-color: {{$pokemon->type_color[$key]}};">
                    <span>
                        {{$value->type->name}}
                    </span>
                </div>
                @endforeach 
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper nisl ac lectus porttitor, ut mollis massa semper. Aenean convallis consectetur pharetra. Morbi ultricies neque vitae ante aliquam posuere. Morbi vitae risus nec odio sodales cursus at quis enim. Proin mattis posuere maximus. Morbi sem odio, aliquam et luctus id, vehicula et libero. Nullam finibus bibendum nulla, sed ultrices eros luctus ac. Nam mollis scelerisque ex sit amet auctor. Curabitur commodo elit in maximus mollis. Mauris in quam pulvinar, pretium quam sed, fermentum tellus. Cras malesuada lorem ac libero iaculis, sed ullamcorper turpis pulvinar. Vivamus efficitur vulputate est sed ullamcorper. Maecenas et aliquam sem, sit amet convallis est. Vivamus ullamcorper pellentesque arcu in elementum. Aenean efficitur sed risus quis faucibus.
                    </div>
                    <div class="col-md-6 text-right">
                        Suspendisse egestas hendrerit sem sed volutpat. Curabitur magna nulla, semper vitae lobortis nec, viverra venenatis orci. Vivamus a diam eu turpis rutrum ullamcorper vel ac dolor. Duis mi metus, sagittis id fringilla ac, fermentum in magna. Mauris id tincidunt leo. Nullam eget eros at odio hendrerit rhoncus. Donec accumsan nulla et arcu hendrerit semper. Curabitur mollis dolor dui, eu congue tortor condimentum sit amet.
                        Vestibulum vel ligula ipsum. Aliquam eget suscipit ex, non fermentum ligula. Donec porta nunc a sem facilisis, ac sodales nunc tempor. Nam quis vestibulum massa. Donec hendrerit feugiat dignissim. Sed ut urna est. Vestibulum laoreet ex vel convallis venenatis. Proin rhoncus, leo ac consectetur feugiat, neque dui commodo arcu, ut iaculis augue nunc eu erat. Morbi rutrum commodo sapien consequat aliquam. Integer elementum egestas placerat. Sed vulputate commodo urna egestas pretium. Donec vestibulum varius urna ut accumsan. Maecenas malesuada ultrices turpis vel pharetra. Phasellus blandit neque ac risus condimentum, ac tristique nisi molestie. Integer et ullamcorper ipsum, quis fermentum arcu. Sed eu turpis aliquam, volutpat magna a, venenatis lectus.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
