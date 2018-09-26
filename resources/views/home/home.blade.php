{{--@extends('layouts.app')--}}

{{--@extends('layouts.onemetod')--}}
@extends('layouts.bootstrap')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
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
                                <button type="button" class="list-group-item">Bootstrap</button>
                                <button type="button" class="list-group-item">Laravel</button>
                                <button type="button" class="list-group-item">NodeJs</button>
                                <button type="button" class="list-group-item">VueJs</button>
                                <button type="button" class="list-group-item">JavaScript</button>
                                <button type="button" class="list-group-item">CSS</button>
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