

@extends('layouts.app')
<link href ="css/main.css" rel="stylesheet">
@section('content')
@if (Route::has('login'))
        <div class="top-right links">
           
        </div>
    @endif

<div class="flex-center position-ref full-height">
   
    

    <div class="content">
    <img src="/img/pizza-house.png" alt ="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        
        <a href="/pizzas/create"> Order a pizza</a>    </div>
        @endsection
</div>


