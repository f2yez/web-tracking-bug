@extends('layouts.master')

@section('content')


<div class="row">
   <div class="col-md-6">
        <img src="{{url('/uploads/'.$drug->image)}}" class="img-fluid">
   </div>
   <div class="col-md-4">
        <h1 class="my-4">{{$drug->name}} - ${{$drug->price}}</h1>
        <h4>Stock Available</h4>
        <h3 class="my-3">Details</h3>
        <ul>
            <li><b>Price</b>: ${{$drug->price}}</li>
        </ul>

        <ul>
            <li><b>Description</b>: ${{$drug->description}}</li>
        </ul>
        
        <button type="button" class="btn btn-outline-primary btn-lg btn-block btn-custom-color">ADD TO CART</button>
    </div>
</div>
@stop