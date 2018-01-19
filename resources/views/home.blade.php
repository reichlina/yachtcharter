@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="column" id="column-left">
            <div class="w3-sidebar w3-bar-block w3-border-right">
                <a href="#" class="w3-bar-item w3-button">Link 1</a>
                <a href="#" class="w3-bar-item w3-button">Link 2</a>
                <a href="#" class="w3-bar-item w3-button">Link 3</a>
            </div>
        </div>
        <div class="column" id="column-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dashboard</div>
                            <div class="panel-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                You are logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column" id="column-right">
            <h3>Wrong</h3>

        </div>
    </div>
@endsection('content')
