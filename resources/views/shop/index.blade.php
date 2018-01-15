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
                <img id="start-picture" src="start-picture.jpg">
               <h1>Willkommen bei Yacht Charter</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
                    sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="column" id="column-right">
                <h3>Kontakt</h3>

            </div>
        </div>
@endsection('content')