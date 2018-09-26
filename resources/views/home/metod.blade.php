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

                                <h3>  Eloquent:metods</h3>

                                <div class="list-group col-md-12">
                                    <a href="#" class="list-group-item" style="margin-bottom: 5px; margin-top: 10px;">
                                        <h4 class="list-group-item-heading">
                                            Create
                                        </h4>
                                        <p class="list-group-item-text" style="color: #3d4852">
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                        </p>
                                    </a>

                                    <a href="#" class="list-group-item" style="margin-bottom: 5px; margin-top: 10px;">
                                        <h4 class="list-group-item-heading">
                                            Create
                                        </h4>
                                        <p class="list-group-item-text" style="color: #3d4852">
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                        </p>
                                    </a>

                                    <a href="#" class="list-group-item" style="margin-bottom: 5px; margin-top: 10px;">
                                        <h4 class="list-group-item-heading">
                                            Create
                                        </h4>
                                        <p class="list-group-item-text" style="color: #3d4852">
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                            Стандартный язык разметки документов во Всемирной паутине.
                                        </p>
                                    </a>
                                </div>

                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection