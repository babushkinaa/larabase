@extends('layouts.bootstrap')

@section('content')

    <div class="container">
        <h3>Редактирование пользователя</h3>
        <div class="row col-md-12">
            <div class="col-md-3">
                @include('include.menuadmin')
            </div>
            <div class="col-md-9">
                {!! Form::open([
                'route' => ['addrole'],
                'class' => "form-group",
                'files' => true
                ]) !!}
                {{Form::token()}}
                <div class="row col-md-12">
                    <div class="col-md-6">

                        {{Form::label('name', 'Name', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('name', null, $attributes = ['class'=>'form-control'])}}

                        {{Form::label('Slug', 'slug', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('slug', null, $attributes = ['class'=>'form-control'])}}



                    </div>

                    <div class="row col-md-12">
                        <hr>
                        <div class="col-md-3">
                            {{Form::submit('Добавить', [
                            'class' => 'btn btn-success'
                            ])}}
                        </div>

                    </div>
    {!! Form::close() !!}

@endsection