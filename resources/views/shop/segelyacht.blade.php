@extends('layouts.app')
@section('content')
    <h1>Unsere Yachten</h1>
    <div class="container-fluid">
        @foreach($segelyachts->chunk(3) as $segelyachtChunk)
            <div class="row">
                @foreach($segelyachtChunk as $segelyacht)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ $segelyacht->imagePath}}" alt="Preview picture">
                            <div class="caption">
                                <h3>{{$segelyacht->title}}</h3>
                                <p>{{$segelyacht->description}}</p>
                                <div class="clearfix">
                                    <p class="pull-left price">{{$segelyacht->price}}.-/per Woche</p>
                                    <a href="{{route('addToCart', ['id' => $segelyacht->id])}}" class="btn btn-primary pull-right" role="button">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection('content')