@extends('layouts.bootstrap')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <p class="navbar-text">Поиск в библиотеке</p>
                        @include('include.search')
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="clearfix"></div>

                        @include('include.breadcrumb')

                        <div class="row col-md-12">


                            <div class="col-md-2 list-group">
                                {{--<h3>Laravel</h3>--}}
                                <button type="button" class="list-group-item">Eloquent</button>
                                <button type="button" class="list-group-item">Route</button>
                                <button type="button" class="list-group-item">Midleware</button>
                                <button type="button" class="list-group-item">Auth</button>
                                <button type="button" class="list-group-item">Log</button>
                                <button type="button" class="list-group-item">Lang</button>
                            </div>

                            <div class="col-md-10">
                                <div class="row col-md-12">
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-default" aria-label="edit">
                                            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                    {{--<div class="col-md-10"><h3>  Eloquent::Create</h3></div>--}}
                                    <div class="panel panel-default col-md-10">
                                        <div class="panel-heading ">Eloquent::Create</div>
                                    </div>


                                    <div class="col-md-1">
                                            <button type="button" class="btn btn-default" aria-label="edit">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </button>
                                    </div>
                                </div>

                                    <div class="well col-md-12">


                                    <div class="panel panel-default">
                                        <div class="panel-heading">Описание</div>
                                        <div class="panel-body">

                                            // Create a new user in the database...<br>
                                            $user = User::create(['name' => 'John']);<br>
                                            <br>
                                            // Retrieve the user by the attributes, or create it if it doesn't exist...<br>
                                            $user = User::firstOrCreate(['name' => 'John']);<br>
                                            <br>
                                            // Retrieve the user by the attributes, or instantiate a new instance...<br>
                                            $user = User::firstOrNew(['name' => 'John']);<br>

                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">Как использовать</div>
                                        <div class="panel-body">

                                            // Create a new user in the database...<br>
                                            $user = User::create(['name' => 'John']);<br>
                                            <br>
                                            // Retrieve the user by the attributes, or create it if it doesn't exist...<br>
                                            $user = User::firstOrCreate(['name' => 'John']);<br>
                                            <br>
                                            // Retrieve the user by the attributes, or instantiate a new instance...<br>
                                            $user = User::firstOrNew(['name' => 'John']);<br>

                                        </div>
                                    </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><strong>Пример</strong></div>
                                            <div class="panel-body">

                                                // Create a new user in the database...<br>
                                                $user = User::create(['name' => 'John']);<br>
                                                <br>
                                                // Retrieve the user by the attributes, or create it if it doesn't exist...<br>
                                                $user = User::firstOrCreate(['name' => 'John']);<br>
                                                <br>
                                                // Retrieve the user by the attributes, or instantiate a new instance...<br>
                                                $user = User::firstOrNew(['name' => 'John']);<br>

                                            </div>
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection