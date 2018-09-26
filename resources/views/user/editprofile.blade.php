@extends('layouts.bootstrap')
@section('content')
    <div class="container">
        <div class="col-md-12">
            @include('include.userprofilemenu')
        </div>
        <div class="col-md-8">

            <div class="page-header">
                <h1><small>Редактирование профиля</small></h1>
            </div>
            @include('include.userprofileformedit')

        </div>

    </div>
    </div>
@endsection