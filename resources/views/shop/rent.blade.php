@extends('layouts.app')
@section('content')
    <h1>Yacht Touren</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('images/sailing-yacht.png') }}" alt="Preview picture">
                    <div class="caption">
                        <h3>Product Tilte</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="clearfix">
                            <p class="pull-left price">1200.-</p>
                            <a href="#" class="btn btn-primary pull-right" role="button">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('images/sailing-yacht.png') }}" alt="Preview picture">
                    <div class="caption">
                        <h3>Product Tilte</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="clearfix">
                            <p class="pull-left price">1200.-</p>
                            <a href="#" class="btn btn-primary pull-right" role="button">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('images/sailing-yacht.png') }}" alt="Preview picture">
                    <div class="caption">
                        <h3>Product Tilte</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                        <div class="clearfix">
                            <p class="pull-left price">1200.-</p>
                            <a href="#" class="btn btn-primary pull-right" role="button">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')