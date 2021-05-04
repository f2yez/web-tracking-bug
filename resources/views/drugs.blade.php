@extends('layouts.master')

@section('content')


<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="container">
            <div class="row">
            @foreach($drugs as $drug)
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img p-3" src="{{url('/uploads/'.$drug->image)}}" alt="Vans">
                        <!-- <div class="card-img-overlay d-flex justify-content-end"></div> -->
                        <div class="card-body">
                        <h3 class="card-title">{{Str::limit($drug->name, 21)}}</h3>
                        <p class="card-text">
                            {{Str::limit($drug->description, 127)}}
                        </p>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">${{$drug->price}}</h5></div>
                            <a href="{{url('/drugs/'.$drug->id)}}" class="btn btn-info mt-3"><i class="fas fa-shopping-cart"></i> View Product</a>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            </div>
    </div>
</div>
@stop