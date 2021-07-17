@extends('layouts.app')
<link href ="public/css/main.css" rel="stylesheet">
@section('content')
<div class=styelsheet>
<div class="flex-center position-ref full-height">
    <div class="content">
    <div class="container">
        <div class="title m-b-md">       
        </div>
<link href ="css/main.css" rel="stylesheet">
<div class="wrapper pizza-details">
<h1>Order for {{ $pizza->name }}</h1>
<p class="type"> Type - {{$pizza->type}}</p>
<p class="base"> Base - {{$pizza->base}}</p>
<p class="toppings">Extra toppings:</p>
<ul>
       @if ($pizza->toppings)
                @foreach ($pizza->toppings as $extra)
                    <h3> <li> {{ $extra }} </li> </h3>
                @endforeach
      @endif
</ul>
<form action="/pizzas/{{ $pizza->id }}" method="POST"> 
@csrf
<button>Complete Order</button>
@method('DELETE')
</form>
</div>
<a href="/pizzas" class="back"> <-- Back to all pizzas</a>
@endsection
</div>
</div>
</div>
</div>

