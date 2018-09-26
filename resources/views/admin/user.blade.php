@extends('layouts.bootstrap')

@section('content')
    <div class="container">
        <h3>Управление пользователями</h3>
<div class="row col-md-12">
    <div class="col-md-3">
        @include('include.menuadmin')
    </div>
    <div class="col-md-9">

        <div class="row col-md-12">

            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default" onClick='location.href="{{ route('adduser') }}"'>Добавит пользователя</button>
                <br>
            </div>
            <hr>
        </div>

    <table class="table table-condensed col-md-12">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Username</th>
            <th scope="col">User Name</th>
            <th scope="col">User LastName</th>
            <th scope="col">User Role</th>
            <th scope="col">Edit</th>
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

        <tr>
            <td> {{$user->id}} </td>
            <td> {{$user->email}} </td>
            <td> {{$user->name}} </td>
            <td> {{$user->lastname}} </td>
            <td>
                {{$user->roles()->pluck('name')->implode(', ')}}
            </td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align" onClick='location.href="{{route('edituser',['id'=>$user->id])}}"'>
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>

            </td>
            <td>

                {{--<button type="button" class="btn btn-default" aria-label="Left Align" onclick="return confirm('are you sure?');" onClick='location.href="{{route('deleteuser',['id'=>$user->id])}}"'>--}}
                <button type="button" class="btn btn-default" aria-label="Left Align" onClick="clickEvent();">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>

            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
        {{$users->links()}}
    </div>
</div>
</div>
    <script>
        function clickEvent()
        {
//            confirm('Удалить пользователя?');
            if (confirm('Удалить пользователя?')){
            location.href="{{route('deleteuser',['id'=>$user->id])}}";
            }
        }
    </script>
    @endsection

