{!! Form::open([
                'route' => ['updateprofile',$user->id],
                'class' => "form-group",
                'files' => true
                ]) !!}
{{--                {{Form::model($user, ['route' => ['updateuser', \App\User::class]])}}--}}
{{--                {{Form::model($user, ['route' => ['userupdate', $user->id]])}}--}}
{{Form::token()}}
<div class="row col-md-12">
    <div class="col-md-6">

        <div class="col-md-12"><fieldset disabled>


        {{Form::label('uname', 'Login', $attributes = ['class'=>'col-form-label'])}}
        {{Form::text('uname', $user->username, $attributes = ['class'=>'form-control'])}}
        {{Form::label('name', 'Name', $attributes = ['class'=>'col-form-label'])}}
        {{Form::text('name', $user->name, $attributes = ['class'=>'form-control'])}}
        {{Form::label('lastname', 'Last Name', $attributes = ['class'=>'col-form-label'])}}
        {{Form::text('lastname', $user->lastname, $attributes = ['class'=>'form-control'])}}
        {{Form::label('email', 'E-Mail Address', $attributes = ['class'=>'col-form-label'])}}
        {{Form::text('email', $user->email, $attributes = ['class'=>'form-control'])}}        {{--{{Form::checkbox('emailverify', 'true', false)}}--}}
        {{--{{Form::label('emailverify', 'E-mail addres verefy?', $attributes = ['class'=>'col-form-label'])}}--}}
        <br>
        </fieldset></div>

        <div class="col-md-12"><fieldset disabled>
        @foreach($roles as $role)

            @php
                $userrole = $user->roles->where('id',$role->id)->first();
            @endphp

            <div class="col-md-12">
                @if($role->id == $userrole['id'])
                    {{Form::checkbox('roles[]', $role->id, $role->id)}}
                    {{Form::label($role->slug, $role->name, $attributes = ['class'=>'col-form-label'])}}
                @else
                    {{--@endif--}}
                    {{--@if($role->id !== $userrole['id'])--}}
                    {{Form::checkbox('roles[]', $role->id, false)}}
                    {{Form::label($role->slug, $role->name, $attributes = ['class'=>'col-form-label'])}}
                @endif
            </div>
        @endforeach

    </div>
        {{Form::hidden('id', $user->id)}}
        {{Form::hidden('name', $user->name)}}
        {{Form::hidden('uname', $user->username)}}
        {{Form::hidden('lastname', $user->lastname)}}
        {{Form::hidden('email', $user->email)}}

        {{Form::label('password', 'Password', $attributes = ['class'=>'col-form-label'])}}
        {{Form::password('password', ['class'=>'form-control'])}}
    </div>

    <div class="col-md-6">
        <div class="col-md-12">
            <img class="img-rounded" width="250px" height="250px" src="{{asset('/storage/'.$user->image)}}">
        </div>
        <div class="col-md-12">
            {{Form::label('image', 'Foto', $attributes = ['class'=>'col-form-label'])}}
            {{Form::file('image')}}
        </div>
    </div>
</div>

<div class="row col-md-6">
    <hr>
    <div class="col-md-3">
        {{Form::submit('Внести изменения', [
        'class' => 'btn btn-success'
        ])}}
    </div>

</div>
{!! Form::close() !!}