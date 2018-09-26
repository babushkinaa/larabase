{{--{{dd($roles)}}--}}
@extends('layouts.bootstrap')
@section('content')

    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

    <div class="container">
        <h3>Добавить нового пользователя</h3>
        <div class="row col-md-12">
            <div class="col-md-3">
                @include('include.menuadmin')
            </div>
            <div class="col-md-9">
                {!! Form::open([
                'action' => 'UserController@createuser',
                'class' => "form-group",
                'files' => true
                ]) !!}
                {{Form::token()}}
                <div class="row col-md-12">
                    <div class="col-md-6">
                        {{Form::label('uname', 'Login', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('username', null, $attributes = ['class'=>'form-control'])}}
                        <hr>
                        {{Form::label('name', 'Name', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('name', null, $attributes = ['class'=>'form-control'])}}
                        <hr>

                        {{Form::label('lastname', 'Last Name', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('lastname', null, $attributes = ['class'=>'form-control'])}}
                        <hr>

                        {{Form::label('email', 'E-Mail Address', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('email', null, $attributes = ['class'=>'form-control'])}}

                        {{Form::checkbox('email_verified_at', 'true', false)}}
                        {{Form::label('email_verified_at', 'E-mail addres verefy?', $attributes = ['class'=>'col-form-label'])}}
                        <hr>
                        {{Form::label('password', 'Password', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::password('password', ['class'=>'form-control'])}}
                        <hr>
                        @foreach($roles as $role)
                            <div class="col-md-12">
                                {{Form::checkbox('roles[]', $role->id , false)}}
                                {{Form::label($role->slug, $role->name, $attributes = ['class'=>'col-form-label'])}}
                            </div>
                        @endforeach

                    </div>

                    <div class="col-md-6">
                        {{Form::label('image', 'Foto', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::file('image')}}
                    </div>
                </div>

                <div class="row col-md-6">
                    <br>
                    <div class="col-md-3">
                        {{Form::submit('Создать', [
                        'class' => 'btn btn-success'
                        ])}}
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger" onClick='location.href="{{ route('users') }}"'>Отмена</button>
                        {{--{{Form::submit('Отмена', [--}}
                        {{--'class' => 'btn btn-danger',--}}
                        {{--'action' => 'URL::previous()'--}}
                        {{--])}}--}}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>






@endsection