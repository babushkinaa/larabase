{{--{{dd($users)}}--}}
@extends('layouts.bootstrap')
@section('content')

    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

    <div class="container">
        <h3>Административный раздел</h3>
        <div class="row col-md-12">
            <div class="col-md-12">
                <div class="col-md-3">
                    @include('include.menuadmin')
                </div>

                <div class="col-md-9">

                </div>
            </div>
        </div>

@endsection