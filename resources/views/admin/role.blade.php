{{--{{dd($roles)}}--}}
@extends('layouts.bootstrap')
@section('content')

    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

    <div class="container">
        <h3>Управление ролями пользователей</h3>
        <div class="row col-md-12">
            <div class="col-md-12">
                <div class="col-md-3">
                    @include('include.menuadmin')
                </div>

                <div class="col-md-9">
                    @include('include.allrole')
                </div>
            </div>
        </div>

@endsection