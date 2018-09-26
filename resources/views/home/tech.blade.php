{{--@extends('layouts.app')--}}
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
                                <h3>Laravel</h3>
                                <button type="button" class="list-group-item">Eloquent</button>
                                <button type="button" class="list-group-item">Route</button>
                                <button type="button" class="list-group-item">Midleware</button>
                                <button type="button" class="list-group-item">Auth</button>
                                <button type="button" class="list-group-item">Log</button>
                                <button type="button" class="list-group-item">Lang</button>
                            </div>



                            <div class="col-md-10">



                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a href="#"> Компонент: Eloquent ORM</a></h3>
                                    </div>
                                    <div class="panel-body">
                                        Easily add a heading container to your panel with .panel-heading. You may also include any  with a .panel-title class to add a pre-styled heading. However, the font sizes of  are overridden by .panel-heading.

                                        For proper link coloring, be sure to place links in headings within .panel-title.
                                    </div>
                                    <br>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a href="#"> Компонент: Eloquent ORM</a></h3>
                                    </div>
                                    <div class="panel-body">
                                        Easily add a heading container to your panel with .panel-heading. You may also include any  with a .panel-title class to add a pre-styled heading. However, the font sizes of  are overridden by .panel-heading.

                                        For proper link coloring, be sure to place links in headings within .panel-title.
                                    </div>
                                    <br>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection