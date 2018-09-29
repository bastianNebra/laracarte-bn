@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>What is laracarte ?</h2>
        <p>Laracarte is a clone app for <a href="https://laramap.com" target="_blank">Laramap</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        This app has been build by <a href="https://www.linkedin.com/in/bastian-lontsi">Bastian</a> for learning purpose !!</strong>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve thes <a href="#">source code</a></p>

        <hr>

        <h2>What is laramap ?</h2>
        <p>Laramap is a the web site by with Laracarte was inspired :).</p>
        <p>More info <a href="https://laramap.com/about">here.</a></p>

        <hr>

        <h2>Which tool and services are used in Laracarte ?</h2>
        <p>Basicaly it's build on Laravel &dash;Bootstrap </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Google Maps</li>
            <li>etc..</li>

        </ul>

    </div>

@endsection
